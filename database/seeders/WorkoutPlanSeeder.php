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
        // Begineers
        $plan = WorkoutPlan::create([
            "name" => "Begineer's Chest Workout",
            "level" => "begineer",
            "duration" => 30,
            "calories" => 450
        ]);
        
        $workouts = [];
        
        for ($i=1;$i<=6;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 3,
                "reps" => 8,
            ];
        }

        Workout::insert($workouts);
        
        $plan = WorkoutPlan::create([
            "name" => "Begineer's Shoulder Workout",
            "level" => "begineer",
            "duration" => 30,
            "calories" => 336
        ]);
        
        $workouts = [];
        
        for ($i=11;$i<=16;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 3,
                "reps" => 8,
            ];
        }
        
        Workout::insert($workouts);
        
        $plan3 = WorkoutPlan::create([
            "name" => "Begineer's Back Workout",
            "level" => "begineer",
            "duration" => 30,
            "calories" => 412
        ]);

        $workouts = [];

        for ($i=41;$i<=46;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 3,
                "reps" => 8,
            ];
        }

        Workout::insert($workouts);

        // Intermediate
        $plan = WorkoutPlan::create([
            "name" => "Intermediate Chest Workout",
            "level" => "intermediate",
            "duration" => 40,
            "calories" => 450
        ]);
        
        $workouts = [];
        
        for ($i=1;$i<=10;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 3,
                "reps" => 10,
            ];
        }

        Workout::insert($workouts);
        
        $plan = WorkoutPlan::create([
            "name" => "Intermediate Shoulder Workout",
            "level" => "intermediate",
            "duration" => 40,
            "calories" => 436
        ]);
        
        $workouts = [];
        
        for ($i=11;$i<=20;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 3,
                "reps" => 10,
            ];
        }
        
        Workout::insert($workouts);
        
        $plan4 = WorkoutPlan::create([
            "name" => "Intermedaite Back Workout",
            "level" => "intermediate",
            "duration" => 40,
            "calories" => 412
        ]);

        $workouts = [];

        for ($i=41;$i<=50;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 10,
                "reps" => 8,
            ];
        }

        Workout::insert($workouts);

        // Advanced
        $plan = WorkoutPlan::create([
            "name" => "Advanced Chest Workout",
            "level" => "advanced",
            "duration" => 50,
            "calories" => 500
        ]);
        
        $workouts = [];
        
        for ($i=1;$i<=16;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 4,
                "reps" => 12,
            ];
        }

        Workout::insert($workouts);
        
        $plan = WorkoutPlan::create([
            "name" => "Advanced Shoulder Workout",
            "level" => "advanced",
            "duration" => 50,
            "calories" => 523
        ]);
        
        $workouts = [];
        
        for ($i=11;$i<=26;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 4,
                "reps" => 12,
            ];
        }
        
        Workout::insert($workouts);
        
        $plan4 = WorkoutPlan::create([
            "name" => "Advanced Back Workout",
            "level" => "advanced",
            "duration" => 50,
            "calories" => 512
        ]);

        $workouts = [];

        for ($i=41;$i<=56;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 4,
                "reps" => 12,
            ];
        }

        Workout::insert($workouts);
    }
}
