<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id' ,'user_role', 'status' ,'total_price', 'address', 'phone', 'state', 'city', 'zip_code' ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
