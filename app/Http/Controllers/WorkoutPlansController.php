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
        $todayComplete = false;

        if ($user) {
            $weeklyRecords = UserWorkoutLog::where('user_id', $user->id)->whereBetween('created_at', [$startOfweek, $endOfweek])->get();
            $completed = UserWorkoutLog::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->first();
            if($completed && $completed->created_at->format('Y-m-d') === Carbon::now()->format('Y-m-d') ){
                $todayComplete = true;
            }
        }

        // dd($completed->created_at->format('Y-m-d'));
        // dd(Carbon::now()->format('Y-m-d') === $completed->created_at->format('Y-m-d') );

        return view('workout_plans', [
            'beginners' => WorkoutPlan::where('level', 'beginner')->get(),
            'intermediate' => WorkoutPlan::where('level', 'intermediate')->get(),
            'advanced' => WorkoutPlan::where('level', 'advanced')->get(),
            'completed' => $completed,
            'weeklyRecords' => $weeklyRecords,
            'todayComplete' => $todayComplete
        ]);
    }
}