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
}
