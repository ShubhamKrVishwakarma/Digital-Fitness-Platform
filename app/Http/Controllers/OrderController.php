<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function index(){
        // $orders = Order::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->get();

        return view('orders', [
            "orders" => Order::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get()
        ]);
        // return view('orders', compact('orders')); 
    }
}
