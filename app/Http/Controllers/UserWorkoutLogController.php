<?php

namespace App\Http\Controllers;

use App\Models\UserWorkoutLog;

class UserWorkoutLogController extends Controller
{
    /**
     * Store User Workout Details
     * @return redirect
     */
    public function store($plan_id)
    {
        UserWorkoutLog::create([
            'user_id' => auth()->user()->id,
            'plan_id' => $plan_id
        ]);

        return redirect()->route('workout.plans')->with('alert', 'Workout Done!');
    }
}
