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
        return $this->hasMany(ReviewType::class);
    }

    public function getProductUrl() {
        if ($this->image) {
            return url('storage/' . $this->image);
        }
        return asset('./images/profile/profile.jpg');
    }
}
