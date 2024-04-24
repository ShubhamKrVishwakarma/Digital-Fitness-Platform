<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'trainer_id', 'type', 'expiry_date'];

    public function member(){
        return $this->belongsTo(User::class, "user_id", "id");
    }
    
    public function trainer(){
        return $this->belongsTo(User::class, "trainer_id", "id");
    }
}
