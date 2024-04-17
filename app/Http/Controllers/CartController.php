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
        return redirect()->route('cart')->with('alert', 'Product Removed Successfully!');
    }

    public function update(Request $request, $id){
        Cart::where("product_id", $id)->where("user_id", auth()->user()->id)->update([
            "quantity"=>$request->quantity
        ]);
        return redirect()->route('cart')->with('alert', 'Quantity Updated Successfully!');
    }

    public function delete(){
        Cart::where("user_id", auth()->user()->id)->delete();
        return redirect()->route('cart')->with('alert', 'All Products Removed Successfully!');
    }
}
