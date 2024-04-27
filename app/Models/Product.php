<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'keywords', 'image', 'price', 'quantity', 'rating', 'category_id'];
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function cart() {
        return $this->hasMany(Cart::class);
    }

    public function reviews() {
        return $this->hasMany(ProductReview::class);
    }

    public function isAlreadyInCart($product_id) {
        return Cart::where("product_id", $product_id)->where("user_id", $this->id)->exists();
    }

    public function getProductUrl() {
        return url('storage/products/' . $this->image);
    }
}
