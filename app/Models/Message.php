<?php

namespace App\Models;

use Database\Seeders\ChatSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['chat_id','sender_id','receiver_id','message'];

    public function chats() {
        return $this->belongsTo(ChatSeeder::class);
    }
}
