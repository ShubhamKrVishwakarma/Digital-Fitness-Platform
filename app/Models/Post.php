<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'type', 'content', 'likes'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function likes() {
        return $this->hasMany(PostLike::class);
    }

    public function postLiked(Post $post) {
        return $this->likes()->where('post_id', $post->id)->exists();
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
