<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'user_id'];

    public function post() {
        return $this->belongsTo(User::class, "post_id", "id");
    }

    public function user() {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
