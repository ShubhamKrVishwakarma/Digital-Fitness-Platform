<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderedProduct;

class OrderController extends Controller
{
    /**
     * Orders Page
     * @return view
     */
    public function index()
    {
        return view('orders', [
            "orders" => Order::where('user_id', auth()->user()->id)->latest()->paginate(4)
        ]);
    }

    /**
     * Bill Page (Ordered Products)
     * @return view
     */
    public function viewBill($id)
    {
        return view('bill',[
            "order" => Order::findOrFail($id)
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

        return redirect()->route('orders')->with('alert', 'Order Cancelled');
    }
}
