<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserWorkoutLog;
use Illuminate\Http\Request;

class UserWorkoutLogController extends Controller
{
    public function store( $plan_id){
        UserWorkoutLog::create([
            'user_id' => auth()->user()->id,
            'plan_id' => $plan_id
        ]);

        return redirect()->route('workout.plans');
    }
}
