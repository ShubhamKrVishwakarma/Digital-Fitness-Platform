<?php

namespace App\Http\Middleware;

use App\Models\UserWorkoutLog;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfDailyWorkoutLimitExceeds
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $completed = UserWorkoutLog::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
        if($completed && $completed->created_at->format('Y-m-d') === Carbon::now()->format('Y-m-d')){
            return redirect()->route('workout.plans');
        }
        return $next($request);
    }
}
