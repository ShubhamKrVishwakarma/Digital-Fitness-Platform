<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserWorkoutLog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'plan_id','created_at','updated_at'];

    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
    
    public function plan() {
        return $this->belongsTo(WorkoutPlan::class , "plan_id" , "id");
    }
}
