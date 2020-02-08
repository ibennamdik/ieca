<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItem;
use App\Product;
use App\User;
use App\Transaction;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('permission:admin-dashboard', ['only' => ['index']]);
    }
    //
    public function index()
    {
        //dd(auth()->user()->hasRole('Super Admin'));
        $customers = User::role('Level 4')->get()->count();
        $orders = Order::all();
        $pending = $orders->where('status_id', 2)->count();
        $completed = $orders->where('status_id', 6)->count();
        $cancelled = $orders->where('status_id', 3)->count();

        $transactions = Transaction::all();
        $products = Product::all();

        // $items = OrderItem::all()->groupBy('product_id');
        // $top = $items->each(function($item, $key) {
        //     $max = 0;
        //     if($item->count() > $max) {
        //         $max = $item->count();
        //         //dd($item);
        //     }
        // });
        //dd($items);

        return view('dashboard', compact('customers', 'orders', 'completed', 'cancelled', 'pending', 'products'));
    }


}
