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

    public function store(Request $req , $total_price ){
        $req->validate([
            'name' => "required|min:2|max:100",
            'phone' => "required|min:10",
            'state' => "required|min:2",
            'zip_code' => "required|min:6",
            'city'=> "required|min:2"
        ]);

        $cart = Cart::where('user_id' , auth()->user()->id)->get();
        
        $order = Order::create([
            'user_id' => auth()->user()->id ,
            'user_role' =>auth()->user()->role,
            'status' => 'pending' ,
            'total_price' => $total_price
        ]);

        foreach ($cart as $item) {
            OrderedProduct::create([
                'order_id'=> $order->id,
                'product_id'=>$item->product_id,
                'product_name'=>$item->product->name,
                'product_price'=>$item->product->price,
                'quantity'=>$item->quantity
            ]);
        }
        Cart::where('user_id' , auth()->user()->id)->delete();
        
        return redirect()->route('cart')->with('success','order successfull');

    }

}
