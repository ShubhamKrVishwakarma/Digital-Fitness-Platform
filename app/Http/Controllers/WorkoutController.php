<?php

namespace App\Http\Controllers;

use App\Models\Workout;

class WorkoutController extends Controller
{
    /**
     * Workouts Page
     * @return view
     */
    public function index($plan_id)
    {
        return view('workout', [
            'workouts' => Workout::where('plan_id', $plan_id)->get(),
            "plan_id" => $plan_id
        ]);
    }
}
