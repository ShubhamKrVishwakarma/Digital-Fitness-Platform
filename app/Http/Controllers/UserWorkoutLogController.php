<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserWorkoutLog;
use Illuminate\Http\Request;

class UserWorkoutLogController extends Controller
{
    public function store(Request $request , $plan_id){
    
        UserWorkoutLog::create([
            'user_id' => auth()->user()->id,
            'plan_id' => $plan_id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('workout.plans');
    }
}
