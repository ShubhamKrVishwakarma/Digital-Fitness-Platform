<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductReview;

use function Laravel\Prompts\alert;

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
        if(Product::where("id", $id)->exists())
        {
            $cart = Cart::where("product_id", $id)->first();

            if (!$cart) 
            {
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
        return redirect()->route("shop")->with("error", "Something Went Wrong!!");
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

        if(Product::where("id", $request["product-id"])->exists())
        {
            if(!ProductReview::where("product_id", $request["product-id"])->where("user_id", auth()->user()->id)->exists())
            {
                ProductReview::create([
                    "user_id" => auth()->user()->id,
                    "rating" => $request["product-rating"],
                    "review" => $request["product-review"],
                    "product_id" => $request["product-id"]
                ]);
        
                $total_no_of_reviews = ProductReview::where("product_id", $request['product-id'])->count();

                $total_ratings_sum = ProductReview::where("product_id", $request["product-id"])->sum('rating');
    
                $new_average_rating = $total_ratings_sum / $total_no_of_reviews;
        
                $product = Product::findOrFail($request["product-id"]);
        
                $product->rating = $new_average_rating;
        
                $product->update();
            }
            return redirect()->route("product.details", $request["product-id"])->with("alert", "Product Reviewed Successfully!");
        }

        return redirect()->route("shop")->with("error", "Something Went Wrong!!");
    }
}
