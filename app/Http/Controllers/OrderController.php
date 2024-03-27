<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderedProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        return view('orders', [
            "orders" => Order::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get()
        ]);
    }

    public function orderDetails($id) {
        return view('order_details', [
            "order" => Order::where("id", $id)->get(),
            "ordered_products" => OrderedProduct::where("order_id", $id)->get()
        ]);
    }
}
