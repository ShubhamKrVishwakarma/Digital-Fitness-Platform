<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserWorkoutLog;
use App\Models\WorkoutPlan;
use Illuminate\Http\Request;

class WorkoutPlansController extends Controller
{
    public function index(){
        return view('workout_plans' , [
            'begineers' => WorkoutPlan::where('level','begineer')->get(),
            'intermediate' => WorkoutPlan::where('level','intermediate')->get(),
            'advanced' => WorkoutPlan::where('level','advanced')->get(),
            'completed' => UserWorkoutLog::where('user_id' , auth()->user()->id)->orderBy('created_at', 'DESC')->first()
        ]);
    }
}
