<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('shop' , [
            "products" => Product::all()
        ]);
    }
    
    public function addToCart($id){
        $cart=Cart::where("product_id", $id)->first();
        if (!$cart){
            $product=Product::find($id);
            Cart::create([
                "user_id"=>auth()->user()->id,
                "product_id"=>$id,
                "quantity"=>1,
                "price"=>$product->price
            ]);
        }
        return redirect()->route('cart');
    }
}