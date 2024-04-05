<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderedProduct;

class CheckoutController extends Controller
{
    public function index() {
        return view('checkout',['cart'=>Cart::where('user_id', auth()->user()->id)->get()]);
    }

    public function store(Request $req , $total_price){
        $req->validate([
            'name' => "required|min:2|max:100",
            'phone' => "required|min:10|max:12",
            'address' => "required",
            'state' => "required|min:2|max:100",
            'zip_code' => "required|min:6|max:12",
            'city'=> "required|min:2|max:100"
        ]);

        $cart = Cart::where('user_id' , auth()->user()->id)->get();
        
        $order = Order::create([
            'user_id' => auth()->user()->id ,
            'phone' => $req->phone,
            'address' => $req->address ,
            'city' => $req->city,
            'state' => $req->state,
            'zip_code' => $req->zip_code,
            'amount' => $total_price,
            'status' => 'pending'
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
        
        return redirect()->route('orders');
    }
}
