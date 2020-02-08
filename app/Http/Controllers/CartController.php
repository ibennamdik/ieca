<?php

namespace App\Http\Controllers;

use App\DeliveryMethod;
use App\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use App\User;
use Auth;
use Redirect;

class CartController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:buy item', ['only' => ['checkout', 'buy', 'deliveryMethod', 'add', 'addQty', 'remove', 'update']]);
    }

    public function index()
    {
        $items = \Cart::session(auth()->user()->id);

        $all_products = Product::all();

        return view('frontend.cart.index', compact('items', 'all_products'));
    }

    public function add($item)
    {

        $product = Product::find($item);

        $item = \Cart::session(auth()->user()->id)->get($item);
        //dd($item);
        if (isset($item)) {

            return back()->with('success', 'Product added to your cart');
        }

        \Cart::session(auth()->user()->id)->add($product->id, $product->name, $product->amount, 1);

        return back()->with('success', 'Product added to your cart');
    }

    public function remove($id)
    {

        \Cart::session(auth()->user()->id)->remove($id);

        return back()->with('success', 'Product removed from your cart');
    }

    public function update($id)
    {

        //dd(Input::get($id));
        \Cart::session(auth()->user()->id)->update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => Input::get($id)
            ),
        ));

        return back()->with('success', 'Product quantity updated');
    }

    public function checkout()
    {

        $method = false;
        $deliveryMethods = DeliveryMethod::all();

        return view('frontend.cart.checkout', compact('method', 'deliveryMethods'));
    }

    public function addQty($item)
    {

        $type = Input::get('type');
        //dd($type);
        $qty = Input::get('quantity');
        //dd($qty);
        $product = Product::find($item);

        $item = \Cart::session(auth()->user()->id)->get($item);

        if ($type == 'buy') {

            \Cart::session(auth()->user()->id)->add($product->id, $product->name, $product->amount, $qty);

            return redirect()->route('cart.index');
        } else {


            \Cart::session(auth()->user()->id)->add($product->id, $product->name, $product->amount, $qty);

            return back()->with('success', 'Product added to your cart');
        }

    }

    public function buy($item, $qty, $product)
    {

        if (!isset($item)) {

            \Cart::session(auth()->user()->id)->add($product->id, $product->name, $product->amount, $qty);
        }

        return redirect()->route('cart.index');
    }

    public function deliveryMethod($id)
    {
        $method = true;
        $items = \Cart::session(auth()->user()->id);
        $method = DeliveryMethod::find($id);
        $methodOfDelivery = $method->name;
        $deliveryCost = $method->cost;
        $profile_update_status = auth()->user()->profile_update_status;

        return view('frontend.cart.checkout', compact('method', 'items', 'methodOfDelivery', 'deliveryCost','profile_update_status'));
    }

    //update email
    public function updateAddress(Request $request)
    {
        $method = true;
        $items = \Cart::session(auth()->user()->id);
        $method = DeliveryMethod::find($request->id);
        $methodOfDelivery = $method->name;
        $deliveryCost = $method->cost;
        
        $user = Auth::user();

        DB::beginTransaction();
        
        try {
            
            $user = User::where('id', $user->id)->first();
            $profile = $user->profile()->first();
            if ($profile === null) {
                // user profile doesn't exist
                $user->profile()->create([
                    'phone_number' => $request->phone_number,
                    'address' => $request->address,
                    'status_id' => 7
                ]);
            }
            $user = User::where('id', $user->id)->update(['profile_update_status' => 1]);

        } catch (\Exception $e) {
            DB::rollBack();
        }
        DB::commit();
        $profile_update_status = Auth::user()->profile_update_status;

        //return view('frontend.cart.checkout', compact('method','failure', 'items', 'methodOfDelivery', 'deliveryCost', 'profile_update_status'))->with('success', 'Profile updated successfully');
        return Redirect::route('cart.deliveryMethod', array('method' => $method,
                                                      'items' => $items, 
                                                      'methodOfDelivery' => $methodOfDelivery, 
                                                      'deliveryCost' => $deliveryCost, 
                                                      'profile_update_status' => $profile_update_status ))->with('success', 'Profile updated successfully');
}
}
