<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['user_id','trainer_id'];

    public function member(){
        return $this->belongsTo(User::class, "user_id","id");
    }
    public function trainer(){
        return $this->belongsTo(User::class, "trainer_id","id");
    }
}
