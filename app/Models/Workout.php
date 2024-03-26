<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['plan_id', 'exercise_id', 'sets', 'reps'];

    public function plan() {
        return $this->belongsTo(WorkoutPlan::class);
    }

    public function exercises() {
        return $this->belongsToMany(Exercise::class);
    }
}
