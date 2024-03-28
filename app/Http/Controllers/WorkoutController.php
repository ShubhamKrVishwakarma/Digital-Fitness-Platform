<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function index($plan_id){
        return view('workout',['workouts'=>Workout::where('plan_id' , $plan_id )->get() , "plan_id" => $plan_id]);
    }
}
