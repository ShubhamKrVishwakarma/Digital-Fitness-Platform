<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['user_id', 'follower_id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function follower() {
        return $this->belongsTo(User::class, 'follower_id', 'id');
    }
}
