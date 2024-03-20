<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('cart', [
            "cart"=>Cart::where("user_id", auth()->user()->id)->get(),
        ]);
    }
    public function destroy($id){
        Cart::where("product_id", $id)->where("user_id", auth()->user()->id)->delete();
        return redirect()->route('cart');
    }
    public function update(Request $request, $id){
        Cart::where("product_id", $id)->where("user_id", auth()->user()->id)->update([
            "quantity"=>$request->quantity
        ]);
        return redirect()->route('cart');
    }
    public function delete(){
        Cart::where("user_id", auth()->user()->id)->delete();
        return redirect()->route('cart');
    }
}
