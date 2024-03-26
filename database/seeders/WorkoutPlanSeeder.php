<?php

namespace Database\Seeders;

use App\Models\Workout;
use App\Models\WorkoutPlan;
use Illuminate\Database\Seeder;

class WorkoutPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plan = WorkoutPlan::create([
            "name" => "Begineer's Chest Workout",
            "level" => "begineer"
        ]);

        $workouts = [];

        for ($i=1;$i<=10;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 10,
                "reps" => 8,
            ];
        }

        Workout::insert($workouts);
    }
}
