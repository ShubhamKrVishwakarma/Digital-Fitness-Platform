<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderedProduct;
use Razorpay\Api\Api;

class CheckoutController extends Controller
{
    public function index() {
        return view('checkout',['cart'=>Cart::where('user_id', auth()->user()->id)->get()]);
    }

    public function store(Request $request , $total_price){
        $request->validate([
            'name' => "required|min:2|max:100",
            'phone' => "required|min:10|max:12",
            'address' => "required",
            'state' => "required|min:2|max:100",
            'zip_code' => "required|min:6|max:12",
            'city'=> "required|min:2|max:100",
            'paymentType' => "required|in:online,cod",
        ]);

        $cart = Cart::where('user_id' , auth()->user()->id)->get();
            
        $order = Order::create([
            'user_id' => auth()->user()->id ,
            'phone' => $request->phone,
            'address' => $request->address ,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'amount' => $total_price,
            'status' => 'pending',
            'payment_mode' => 'offline'
        ]);
    
        foreach ($cart as $item) {
            OrderedProduct::create([
                'order_id' => $order->id,
                'product_image' => $item->product->image,
                'product_name' => $item->product->name,
                'product_price' => $item->product->price,
                'category' => $item->product->category->name,
                'quantity' => $item->quantity
            ]);
        }
    
        Cart::where('user_id' , auth()->user()->id)->delete();

        if ($request->paymentType === "online") {
            $api = new Api(env("RAZORPAY_API_KEY"), env("RAZORPAY_SECRET_KEY"));

            $order = Order::orderBy('id', 'DESC')->first();
            $order_id = $order->id + 1;

            $orderData = [
                'receipt' => `rcptid_$order_id`,
                'amount' => ($total_price * 100),
                'currency' => 'INR',
                'notes' => [
                    'order_id' => $order_id,
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone
                ]
            ];
    
            $razorpayOrder = $api->order->create($orderData);

            return view('order_payment', [
                "order_id" => $order_id,
                "order" => $razorpayOrder
            ]);
        } else {
            return redirect()->route('orders');
        }
    }

    public function paymentInfo(Request $request) {
        $api = new Api(env("RAZORPAY_API_KEY"), env("RAZORPAY_SECRET_KEY"));

        $status = $api->payment->fetch($request->payment_id);
        
        if ($status->captured) {
            return redirect()->route('orders')->with('alert', 'Payment completed Successfully!');
        } else {
            return redirect()->route('cart')->with('alert', 'Payment Failed');
        }
    }
}
