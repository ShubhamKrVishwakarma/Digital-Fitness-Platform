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
        // Beginners Chest Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Beginner's Chest Workout Plan",
            "level" => "beginner",
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
        
        // Beginners Shoulder Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Beginner's Shoulder Workout Plan",
            "level" => "beginner",
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
        
        // Beginner Back Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Beginner's Back Workout Plan",
            "level" => "beginner",
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

        // Beginner Arms Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Beginner's Arms Workout Plan",
            "level" => "beginner",
            "duration" => 30,
            "calories" => 412
        ]);

        $workouts = [];

        // For Biceps
        for ($i=46;$i<=48;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 3,
                "reps" => 8,
            ];
        }

        // For Triceps
        for ($i=61;$i<=63;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 3,
                "reps" => 8,
            ];
        }

        Workout::insert($workouts);

        // Beginner Abs Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Beginner's Abs Workout Plan",
            "level" => "beginner",
            "duration" => 30,
            "calories" => 310
        ]);
        
        $workouts = [];
        
        for ($i=76;$i<=81;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 3,
                "reps" => 8,
            ];
        }

        Workout::insert($workouts);

        // Beginners Legs Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "beginner's Legs Workout Plan",
            "level" => "beginner",
            "duration" => 30,
            "calories" => 310
        ]);
        
        $workouts = [];
        
        for ($i=91;$i<=96;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 3,
                "reps" => 8,
            ];
        }

        Workout::insert($workouts);

        // Intermediate Chest Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Intermediate Chest Workout Plan",
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
        
        // Intermediate Shoulder Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Intermediate Shoulder Workout Plan",
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
        
        // Intermediate Back Workout Plan
        $plan = WorkoutPlan::create([
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

        // Intermediate Arms Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Intermedaite Arms Workout Plan",
            "level" => "intermediate",
            "duration" => 40,
            "calories" => 400
        ]);

        $workouts = [];

        // For Biceps
        for ($i=46;$i<=50;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 3,
                "reps" => 8,
            ];
        }

        // For Triceps
        for ($i=61;$i<=65;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 3,
                "reps" => 8,
            ];
        }

        Workout::insert($workouts);

        // Intermediate Abs Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Intermedaite Abs Workout Plan",
            "level" => "intermediate",
            "duration" => 40,
            "calories" => 450
        ]);

        $workouts = [];

        for ($i=76;$i<=85;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 10,
                "reps" => 8,
            ];
        }

        Workout::insert($workouts);

        // Intermediate Legs Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Intermedaite Legs Workout Plan",
            "level" => "intermediate",
            "duration" => 40,
            "calories" => 460
        ]);

        $workouts = [];

        for ($i=91;$i<=100;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 10,
                "reps" => 8,
            ];
        }

        Workout::insert($workouts);

        // Advanced Chest Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Advanced Chest Workout Plan",
            "level" => "advanced",
            "duration" => 50,
            "calories" => 500
        ]);
        
        $workouts = [];
        
        for ($i=1;$i<=15;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 4,
                "reps" => 12,
            ];
        }

        Workout::insert($workouts);
        
        // Advanced Shoulder Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Advanced Shoulder Workout Plan",
            "level" => "advanced",
            "duration" => 50,
            "calories" => 523
        ]);
        
        $workouts = [];
        
        for ($i=16;$i<=30;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 4,
                "reps" => 12,
            ];
        }
        
        Workout::insert($workouts);
        
        // Advanced Back Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Advanced Back Workout Plan",
            "level" => "advanced",
            "duration" => 50,
            "calories" => 512
        ]);

        $workouts = [];

        for ($i=31;$i<=45;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 4,
                "reps" => 12,
            ];
        }

        Workout::insert($workouts);

        // Advanced Arms Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Advanced Arms Workout Plan",
            "level" => "advanced",
            "duration" => 50,
            "calories" => 504
        ]);

        $workouts = [];

        // For Biceps
        for ($i=46;$i<=53;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 4,
                "reps" => 12,
            ];
        }

        // For Triceps
        for ($i=61;$i<=68;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 4,
                "reps" => 12,
            ];
        }

        Workout::insert($workouts);

        // Advanced Abs Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Advanced Abs Workout Plan",
            "level" => "advanced",
            "duration" => 50,
            "calories" => 528
        ]);

        $workouts = [];

        for ($i=76;$i<=90;$i++) {
            $workouts[] = [
                "plan_id" => $plan->id,
                "exercise_id" => $i,
                "sets" => 4,
                "reps" => 12,
            ];
        }

        Workout::insert($workouts);

        // Advanced Legs Workout Plan
        $plan = WorkoutPlan::create([
            "name" => "Advanced Legs Workout Plan",
            "level" => "advanced",
            "duration" => 50,
            "calories" => 541
        ]);

        $workouts = [];

        for ($i=91;$i<=105;$i++) {
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
