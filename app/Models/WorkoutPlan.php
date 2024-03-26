<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutPlan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'level'];

    public function workouts() {
        return $this->hasMany(Workout::class);
    }
}
