<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\WorkoutPlan;
use App\Models\UserWorkoutLog;
use App\Http\Controllers\Controller;

class WorkoutPlansController extends Controller
{
    /**
     * Workouts Plan Page
     * @return view
     */
    public function index()
    {
        $user = auth()->user();

        $startOfweek = Carbon::now()->startOfWeek();
        $endOfweek = Carbon::now()->endOfWeek();
        $completed = null;
        $weeklyRecords = null;

        if ($user) {
            $weeklyRecords = UserWorkoutLog::where('user_id', $user->id)->whereBetween('created_at', [$startOfweek, $endOfweek])->get();
            $completed = UserWorkoutLog::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->first();
        }

        return view('workout_plans', [
            'begineers' => WorkoutPlan::where('level', 'begineer')->get(),
            'intermediate' => WorkoutPlan::where('level', 'intermediate')->get(),
            'advanced' => WorkoutPlan::where('level', 'advanced')->get(),
            'completed' => $completed,
            'weeklyRecords' => $weeklyRecords
        ]);
    }
}