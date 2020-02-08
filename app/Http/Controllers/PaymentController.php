<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use App\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Unicodeveloper\Paystack\Paystack;
use App\Payment;
use App\Transaction;
use App\Product;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public $paystack;

    public function __construct()
    {
        //$this->paystack = new Paystack();
    }

    //
    public function redirectToGateway(Request $request)
    {
        // dd($request->toArray());
        $request->metadata = json_encode($array = [
            "email" => $request->email,
            "delivery_method" => $request->delivery_method,
            "delivery_cost" => $request->delivery_cost,
            'items' => \Cart::session(auth()->user()->id)->getContent()
        ]);
        $request->email = $request->email;
        $request->amount = $request->amount * 100;
        $request->reference = $this->paystack->genTranxRef();
        $request->key = config('paystack.secretKey');

        try {
            //code...
            return $this->paystack->getAuthorizationUrl()->redirectNow();

        } catch (\Exception $e) {
            //throw $th;
            //dd($e->getMessage());
            return back()->with('failure', 'Opps!!! Something went wrong '.$e->getMessage());
        }

    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = $this->paystack->getPaymentData();

        //dd($paymentDetails['data']['metadata']);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
        //$transaction_ref = false;
        if($paymentDetails['status'])
        {
            //collect data
            $email = $paymentDetails["data"]["customer"]["email"];
            $transaction_ref = $paymentDetails["data"]["reference"];
            $amount = $paymentDetails["data"]["amount"]/100;
            $delivery_cost = $paymentDetails['data']['metadata']['delivery_cost'];
            $delivery_method = $paymentDetails['data']['metadata']['delivery_method'];
            $payment_status = $paymentDetails['data']['status'];

            //get items paid for
            $items = $paymentDetails['data']['metadata']['items'];

            //create transaction record on payment
            $transaction = Transaction::create([
                'txn_id' => $transaction_ref,
                'amount' => $amount,
                'payment_status' => $payment_status
            ]);

            DB::beginTransaction();

            try {

                //create payment information
                $payment = Payment::create([
                    "email" => $email,
                    "transaction_ref" => $transaction_ref,
                    "amount" => $amount,
                    'status_id' => 1,
                    'user_id' => auth()->user()->id
                ]);

                //create order on successful payment
                $order = Order::create([
                    'status_id' => 2, //set status to pending
                    'payment_id' => $payment->id,
                    'delivery_cost' => $delivery_cost,
                    'delivery_method' => $delivery_method,
                    'comment' => '',
                    'user_id' => auth()->user()->id
                ]);

            } catch (\Exception $e) {

                DB::rollBack();

                return back()->with('failure', 'error creating order');
            }

            try {

                foreach ($items as $item) {

                    //create record of items in order
                    OrderItem::create([
                        'order_id' => $order->id,
                        'quantity' => $item['quantity'],
                        'product_id' => $item['id']
                    ]);

                    //Increase order count
                    $product = Product::find($item['id']);
                    $product->increment('orders_count');
                    $product->save();
                }
                
            } catch (\Exception $e) {

                DB::rollBack();

                return back()->with('failure', 'error creating order');
            }


            // clear cart after payment is complete
            \Cart::session(auth()->user()->id)->clear();

            DB::commit();

            return redirect()
            ->to('home')
            ->with('status', $payment_status)
            ->with('email', $email)
            ->with('success', 'Payment Successful, Your Order has been placed');
        }

        return redirect()->route('home')->with('failure', 'Payment not successful. Order was not placed');
    }

    public function index()
    {

        $payments = Payment::all();

        return view('backend.payments.index', compact('payments'));
    }
}
