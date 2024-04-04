<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedProduct extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'product_image', 'product_name', 'product_price', 'category', 'quantity'];

    public $timestamps = false;

    public function order() {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
}
