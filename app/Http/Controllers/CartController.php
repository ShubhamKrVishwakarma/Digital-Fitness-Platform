<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Cart Page
     * @return view
     */
    public function index()
    {
        return view('cart', [
            "cart" => Cart::where("user_id", auth()->user()->id)->get()
        ]);
    }

    /**
     * Update product quantity in Cart
     * @return redirect
     */
    public function update(Request $request, $id)
    {
        Cart::where("product_id", $id)->where("user_id", auth()->user()->id)->update([
            "quantity" => $request->quantity
        ]);

        return redirect()->route('cart')->with('alert', 'Quantity Updated Successfully!');
    }

    /**
     * Delete Single product from Cart
     * @return redirect
     */
    public function delete($id)
    {
        Cart::where("product_id", $id)->where("user_id", auth()->user()->id)->delete();

        return redirect()->route('cart')->with('alert', 'Product Removed Successfully!');
    }

    /**
     * Delete All products from Cart
     * @return redirect
     */
    public function deleteAll()
    {
        Cart::where("user_id", auth()->user()->id)->delete();

        return redirect()->route('cart')->with('alert', 'All Products Removed Successfully!');
    }
}
