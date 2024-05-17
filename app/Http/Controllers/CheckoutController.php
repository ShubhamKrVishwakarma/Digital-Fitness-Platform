<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Razorpay\Api\Api;
use Illuminate\Http\Request;
use App\Models\OrderedProduct;

class CheckoutController extends Controller
{
    /**
     * Checkout Page
     * @return view
     */
    public function index()
    {
        if(Cart::where('user_id', auth()->user()->id)->exists()){
            return view('checkout', [
            'cart' => Cart::where('user_id', auth()->user()->id)->get()
            ]);
        }
        else{
            return back()->with('error', "Cart is empty!");
        }
    }

    /**
     * Stores Order Details in Orders and OrderDetails Table
     * @return redirect if paymeny mode is offline
     * @return view if paymeny mode is online
     */
    public function store(Request $request, $total_price)
    {
        $request->validate([
            'name' => "required|min:2|max:100",
            'phone' => "required|min:10|max:12",
            'address' => "required",
            'state' => "required|min:2|max:100",
            'zip_code' => "required|min:6|max:12",
            'city' => "required|min:2|max:100",
            'paymentType' => "required|in:online,cod",
        ]);

        $cart = Cart::where('user_id', auth()->user()->id)->get();

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'phone' => $request->phone,
            'address' => $request->address,
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

        Cart::where('user_id', auth()->user()->id)->delete();

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
            return redirect()->route('orders')->with('alert', 'Order Placed Successfully');
        }
    }

    /**
     * Checks Payment Status if payment mode is online
     * @return redirect
     */
    public function paymentInfo(Request $request)
    {
        $api = new Api(env("RAZORPAY_API_KEY"), env("RAZORPAY_SECRET_KEY"));

        $status = $api->payment->fetch($request->payment_id);

        if ($status->captured) {
            return redirect()->route('orders')->with('alert', 'Payment completed Successfully!');
        }
        
        return redirect()->route('cart')->with('alert', 'Payment Failed');
    }
}
