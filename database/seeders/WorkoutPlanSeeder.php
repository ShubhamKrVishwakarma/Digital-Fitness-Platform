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
            "level" => "begineer",
            "duration" => 40,
            "calories" => 450
        ]);
        
        $workouts = [];
        
        for ($i=1;$i<=6;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 10,
                "reps" => 8,
            ];
        }

        Workout::insert($workouts);
        
        $plan2 = WorkoutPlan::create([
            "name" => "Begineer's Shoulder Workout",
            "level" => "begineer",
            "duration" => 30,
            "calories" => 336
        ]);
        
        $workouts2 = [];
        
        for ($i=11;$i<=16;$i++) {
            $workouts2[] = [
                "plan_id" => $plan2->id,
                "exercise_id" => $i,
                "sets" => 10,
                "reps" => 8,
            ];
        }
        
        Workout::insert($workouts2);
        
        $plan3 = WorkoutPlan::create([
            "name" => "Begineer's Back Workout",
            "level" => "begineer",
            "duration" => 30,
            "calories" => 412
        ]);

        $workouts3 = [];

        for ($i=41;$i<=46;$i++) {
            $workouts3[] = [
                "plan_id" => $plan3->id,
                "exercise_id" => $i,
                "sets" => 10,
                "reps" => 8,
            ];
        }

        Workout::insert($workouts3);
    }
}
