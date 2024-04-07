<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserWorkoutLog;
use App\Models\WorkoutPlan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutPlansController extends Controller
{
    public function index(){
        $user = Auth::user();

        $startOfweek = Carbon::now()->startOfWeek();
        $endOfweek = Carbon::now()->endOfWeek();
        $completed =null;
        $weeklyRecords =null;
        if($user){
            $weeklyRecords = UserWorkoutLog::where('user_id', $user->id)->whereBetween('created_at',[$startOfweek , $endOfweek])->get();
            $completed = UserWorkoutLog::where('user_id' , auth()->user()->id)->orderBy('created_at', 'DESC')->first();
        }

        // dd($weeklyRecords);
        return view('workout_plans' , [
            'begineers' => WorkoutPlan::where('level','begineer')->get(),
            'intermediate' => WorkoutPlan::where('level','intermediate')->get(),
            'advanced' => WorkoutPlan::where('level','advanced')->get(),
            'completed' => $completed,
            'weeklyRecords' => $weeklyRecords
        ]);
    }
}
