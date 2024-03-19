<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = ['price', 'quantity', 'user_id', 'product_id'];
    public function product(){
        return $this->belongsToMany(Product::class);
    }
}
