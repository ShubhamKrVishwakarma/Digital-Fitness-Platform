<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutPlan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'level', 'duration','calories'];

    public function workouts() {
        return $this->hasMany(Workout::class);
    }

    public function workoutLogs() {
        return $this->hasMany(UserWorkoutLog::class);
    }
}
