<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'type', 'equipment'];

    public function workouts() {
        return $this->hasMany(Workout::class);
    }

    public function getExerciseGif() {
        return url('storage/exercises/' . $this->image);
    }
}
