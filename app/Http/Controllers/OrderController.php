<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderedProduct;

class OrderController extends Controller
{
    public function index(){
        return view('orders', [
            "orders" => Order::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get()
        ]);
    }

    public function orderDetails($id) {
        return view('order_details', [
            "order" => Order::find($id),
            "ordered_products" => OrderedProduct::where("order_id", $id)->get()
        ]);
    }

    public function cancelOrder($id) {
        Order::findOrFail($id)->deleteOrFail();
        return redirect()->route('orders');
    }
}
