<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\Review;
use App\Models\ReviewType;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProductController extends Controller
{
    public function index(){
        return view('shop' , [
            "products" => Product::all()
        ]);
    }

    public function product_details($id){
        return view('product_details', [
            "product" => Product::findOrFail($id)
        ]);
    }
    
    public function addToCart($id){
        $cart = Cart::where("product_id", $id)->first();

        if (!$cart){
            $product=Product::find($id);
            Cart::create([
                "user_id"=>auth()->user()->id,
                "product_id"=>$id,
                "quantity"=>1,
                "price"=>$product->price
            ]);
        }

        return redirect()->route('shop')->with('success', 'Product Added to Cart!');
    }

    public function reviewProduct(Request $request){
        $request->validate([
            "product-rating" => "required",
            "product-id" => "required",
            "product-review" => "required"
        ]);

        ProductReview::create([
            "user_id" => auth()->user()->id,
            "rating" => $request["product-rating"],
            "review" => $request["product-review"],
            "product_id" => $request["product-id"]
        ]);
        
        $total_no_of_reviews = ProductReview::where("product_id" , $request['product-id'])->count();

        $product = Product::findOrFail($request["product-id"]);

        $product->rating = ($product->rating +  $request["product-rating"])/$total_no_of_reviews;

        $product->update();

        return redirect()->route("product.details",$request["product-id"]);
    }
}