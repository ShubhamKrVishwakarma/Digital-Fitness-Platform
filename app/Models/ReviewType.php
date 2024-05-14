<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewType extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['review_id', 'trainer_id','product_id','type'];

    public function trainer(){
        return $this->belongsTo(User::class,'trainer_id' , 'id');
    }
    public function product(){
        return $this->belongsTo(Product::class,'product_id' , 'id');
    }
    public function review(){
        return $this->belongsTo(Review::class,'review_id' , 'id');
    }
}
