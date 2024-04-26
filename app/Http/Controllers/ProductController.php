<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductReview;

class ProductController extends Controller
{
    /**
     * Shop Page
     * @return view
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $search = strtolower($request->search);

            return view('shop', [
                "products" => Product::where("keywords", "like", "%{$search}%")->paginate(12),
                "search" => $search
            ]);
        } else {
            return view('shop', [
                "products" => Product::latest()->paginate(12)
            ]);
        }
    }

    /**
     * Product Details Page
     * @return view
     */
    public function product_details($id)
    {
        return view("product_details", [
            "product" => Product::findOrFail($id),
            "id" => $id
        ]);
    }


    /**
     * Add Product to Cart
     * @return redirect
     */
    public function addToCart($id)
    {
        $cart = Cart::where("product_id", $id)->first();

        if (!$cart) {
            $product = Product::find($id);
            Cart::create([
                "user_id" => auth()->user()->id,
                "product_id" => $id,
                "quantity" => 1,
                "price" => $product->price
            ]);
        }

        return back()->with('alert', 'Product Added to Cart!');
    }

    /**
     * Review a Product
     * @return redirect
     */
    public function reviewProduct(Request $request)
    {
        $request->validate([
            "product-rating" => "required",
            "product-id" => "required"
        ]);

        ProductReview::create([
            "user_id" => auth()->user()->id,
            "rating" => $request["product-rating"],
            "review" => $request["product-review"],
            "product_id" => $request["product-id"]
        ]);

        $total_no_of_reviews = ProductReview::where("product_id", $request['product-id'])->count();

        $product = Product::findOrFail($request["product-id"]);

        $product->rating = ($product->rating +  $request["product-rating"]) / $total_no_of_reviews;

        $product->update();

        return redirect()->route("product.details", $request["product-id"]);
    }
}
