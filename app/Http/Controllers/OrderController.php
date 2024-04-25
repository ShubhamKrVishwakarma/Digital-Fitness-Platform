<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Orders Page
     * @return view
     */
    public function index()
    {
        return view('orders', [
            "orders" => Order::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get()
        ]);
    }

    /**
     * Orders Details Page (Ordered Products)
     * @return view
     */
    public function orderDetails($id)
    {
        return view('order_details', [
            "order" => Order::find($id),
        ]);
    }

    /**
     * Cancel Pending Order
     * @return redirect
     */
    public function cancelOrder($id)
    {
        $order = Order::findOrFail($id);

        $order->status = "cancelled";

        $order->update();

        return redirect()->route('orders');
    }
}
