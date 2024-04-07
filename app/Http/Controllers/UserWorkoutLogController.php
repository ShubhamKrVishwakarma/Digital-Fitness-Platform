<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserWorkoutLog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserWorkoutLogController extends Controller
{
    public function store(Request $request , $plan_id){
        // $startDate = Carbon::now()->subDays(7);
        // $endDate = Carbon::now();
        // $randomTimestamp = Carbon::createFromTimestamp(rand($startDate->timestamp, $endDate->timestamp));
        UserWorkoutLog::create([
            'user_id' => auth()->user()->id,
            'plan_id' => $plan_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            // 'created_at' => $randomTimestamp,
            // 'updated_at' => $randomTimestamp
        ]);

        return redirect()->route('workout.plans');
    }
}
