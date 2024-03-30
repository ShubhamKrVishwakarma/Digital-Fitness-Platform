<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'message', 'file', 'likes'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
