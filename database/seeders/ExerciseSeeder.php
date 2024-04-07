<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exercises = [
            // Chest Exercises
            [
                "name" => "MEDICINE BALL OVERHEAD THROW",
                "image" => "exercises/chest-1.gif",
                "type" => "chest",
                "equipment" => "Exercise Ball",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING MEDICINE BALL CHEST PASS",
                "image" => "exercises/chest-2.gif",
                "type" => "chest",
                "equipment" => "Exercise Ball",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ARM SCISSORS",
                "image" => "exercises/chest-3.gif",
                "type" => "chest",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "INCLINE CHEST FLY MACHINE",
                "image" => "exercises/chest-4.gif",
                "type" => "chest",
                "equipment" => "Fly Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BENCH PRESS",
                "image" => "exercises/chest-5.gif",
                "type" => "chest",
                "equipment" => "Barbell, Bench",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "PEC DECK FLY",
                "image" => "exercises/chest-6.gif",
                "type" => "chest",
                "equipment" => "Fly Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL PULLOVER",
                "image" => "exercises/chest-7.gif",
                "type" => "chest",
                "equipment" => "Bench, Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LOW CABLE CROSSOVER",
                "image" => "exercises/chest-8.gif",
                "type" => "chest",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "HIGH CABLE CROSSOVER",
                "image" => "exercises/chest-9.gif",
                "type" => "chest",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE UPPER CHEST CROSSOVERS",
                "image" => "exercises/chest-10.gif",
                "type" => "chest",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "INCLINE BARBELL BENCH PRESS",
                "image" => "exercises/chest-11.gif",
                "type" => "chest",
                "equipment" => "Barbell, Bench",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL FLY",
                "image" => "exercises/chest-12.gif",
                "type" => "chest",
                "equipment" => "Bench, Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL BENCH PRESS",
                "image" => "exercises/chest-13.gif",
                "type" => "chest",
                "equipment" => "Bench, Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE CROSSOVER",
                "image" => "exercises/chest-14.gif",
                "type" => "chest",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ONE-ARM CABLE CHEST PRESS",
                "image" => "exercises/chest-15.gif",
                "type" => "chest",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Shoulder
            [
                "name" => "MEDICINE BALL OVERHEAD THROW",
                "image" => "exercises/shoulder-1.gif",
                "type" => "shoulder",
                "equipment" => "Exercise Ball",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL PUSH PRESS",
                "image" => "exercises/shoulder-2.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING DUMBBELL SHOULDER PRESS",
                "image" => "exercises/shoulder-3.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ARM SCISSORS",
                "image" => "exercises/shoulder-4.gif",
                "type" => "shoulder",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SIDE ARM RAISES",
                "image" => "exercises/shoulder-5.gif",
                "type" => "shoulder",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ARM CIRCLES",
                "image" => "exercises/shoulder-6.gif",
                "type" => "shoulder",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL LATERAL RAISE",
                "image" => "exercises/shoulder-7.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL SHOULDER PRESS",
                "image" => "exercises/shoulder-8.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SMITH MACHINE BEHIND NECK PRESS",
                "image" => "exercises/shoulder-9.gif",
                "type" => "shoulder",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SMITH MACHINE SHOULDER PRESS",
                "image" => "exercises/shoulder-10.gif",
                "type" => "shoulder",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE LATERAL RAISE",
                "image" => "exercises/shoulder-11.gif",
                "type" => "shoulder",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "45 DEGREE INCLINE ROW",
                "image" => "exercises/shoulder-12.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells, Bench",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEVER SHOULDER PRESS",
                "image" => "exercises/shoulder-13.gif",
                "type" => "shoulder",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SEATED BARBELL SHOULDER PRESS",
                "image" => "exercises/shoulder-14.gif",
                "type" => "shoulder",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING CLOSE GRIP MILITARY PRESS",
                "image" => "exercises/shoulder-15.gif",
                "type" => "shoulder",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Back
            [
                "name" => "ROWING MACHINE",
                "image" => "exercises/back-1.gif",
                "type" => "back",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEVER FRONT PULLDOWN",
                "image" => "exercises/back-2.gif",
                "type" => "back",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "PULL-UP",
                "image" => "exercises/back-3.gif",
                "type" => "back",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE REAR PULLDOWN",
                "image" => "exercises/back-4.gif",
                "type" => "back",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LAT PULLDOWN",
                "image" => "exercises/back-5.gif",
                "type" => "back",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SEATED CABLE ROW",
                "image" => "exercises/back-6.gif",
                "type" => "back",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BARBELL BENT OVER ROW",
                "image" => "exercises/back-7.gif",
                "type" => "back",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE STRAIGHT ARM PULLDOWN",
                "image" => "exercises/back-8.gif",
                "type" => "back",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEGLESS ROPE CLIMB",
                "image" => "exercises/back-9.gif",
                "type" => "back",
                "equipment" => "Pole, Rope",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEVER T-BAR ROW",
                "image" => "exercises/back-10.gif",
                "type" => "back",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL ROW",
                "image" => "exercises/back-11.gif",
                "type" => "back",
                "equipment" => "Dumbbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BENT OVER DUMBBELL ROW",
                "image" => "exercises/back-12.gif",
                "type" => "back",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL BENT OVER REVERSE GRIP ROW",
                "image" => "exercises/back-13.gif",
                "type" => "back",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "REVERSE LAT-PULLDOWN",
                "image" => "exercises/back-14.gif",
                "type" => "back",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "MUSCLE-UP",
                "image" => "exercises/back-15.gif",
                "type" => "back",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Arms
            [
                "name" => "SEATED ZOTTMAN CURL",
                "image" => "exercises/biceps-1.gif",
                "type" => "biceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING BARBELL CONCENTRATION CURL",
                "image" => "exercises/biceps-2.gif",
                "type" => "biceps",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "WAITER CURL",
                "image" => "exercises/biceps-3.gif",
                "type" => "biceps",
                "equipment" => "Dumbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DOUBLE ARM DUMBBELL CURL",
                "image" => "exercises/biceps-4.gif",
                "type" => "biceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DDUMBBELL CURL",
                "image" => "exercises/biceps-5.gif",
                "type" => "biceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BARBELL CURL",
                "image" => "exercises/biceps-6.gif",
                "type" => "biceps",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CONCENTRATION CURL",
                "image" => "exercises/biceps-7.gif",
                "type" => "biceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL PREACHER CURL",
                "image" => "exercises/biceps-8.gif",
                "type" => "biceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "EZ BAR PREACHER CURL",
                "image" => "exercises/biceps-9.gif",
                "type" => "biceps",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "HAMMER CURL",
                "image" => "exercises/biceps-10.gif",
                "type" => "biceps",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SEATED INCLINE DUMBBELL CURL",
                "image" => "exercises/biceps-11.gif",
                "type" => "biceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEVER PREACHER CURL",
                "image" => "exercises/biceps-12.gif",
                "type" => "biceps",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "HIGH CABLE SINGLE ARM BICEP CURL",
                "image" => "exercises/biceps-13.gif",
                "type" => "biceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ONE ARM CABLE CURL",
                "image" => "exercises/biceps-14.gif",
                "type" => "biceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LYING CABLE CURL",
                "image" => "exercises/biceps-15.gif",
                "type" => "biceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Triceps
            [
                "name" => "MEDICINE BALL OVERHEAD THROW",
                "image" => "exercises/triceps-1.gif",
                "type" => "triceps",
                "equipment" => "Exercise Ball",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ONE ARM TRICEPS PUSHDOWN",
                "image" => "exercises/triceps-2.gif",
                "type" => "triceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL KICKBACK",
                "image" => "exercises/triceps-3.gif",
                "type" => "triceps",
                "equipment" => "Dumbbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ONE ARM REVERSE PUSHDOWN",
                "image" => "exercises/triceps-4.gif",
                "type" => "triceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "PUSH-DOWN",
                "image" => "exercises/triceps-5.gif",
                "type" => "triceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BENCH DIPS",
                "image" => "exercises/triceps-6.gif",
                "type" => "triceps",
                "equipment" => "Bench, No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "TRICEPS DIPS",
                "image" => "exercises/triceps-7.gif",
                "type" => "triceps",
                "equipment" => "Machine, No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ONE ARM LYING TRICEPS EXTENSION",
                "image" => "exercises/triceps-8.gif",
                "type" => "triceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE ROPE OVERHEAD TRICEPS EXTENSION",
                "image" => "exercises/triceps-9.gif",
                "type" => "triceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEVER TRICEPS DIP",
                "image" => "exercises/triceps-10.gif",
                "type" => "triceps",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LYING BARBELL TRICEPS EXTENSION",
                "image" => "exercises/triceps-11.gif",
                "type" => "triceps",
                "equipment" => "Barbell, Bench",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE TRICEP KICKBACK",
                "image" => "exercises/triceps-12.gif",
                "type" => "triceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "TRICEPS DIPS ON FLOOR",
                "image" => "exercises/triceps-13.gif",
                "type" => "triceps",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL SEATED FRONT AND BACK TATE PRESS",
                "image" => "exercises/triceps-14.gif",
                "type" => "triceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "KNEELING CABLE TRICEPS EXTENSION",
                "image" => "exercises/triceps-15.gif",
                "type" => "triceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Abs/Core
            [
                "name" => "MEDICINE BALL ROTATIONAL THROW",
                "image" => "exercises/abs-1.gif",
                "type" => "abs",
                "equipment" => "Exercise Ball",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DRAGON FLAG",
                "image" => "exercises/abs-2.gif",
                "type" => "abs",
                "equipment" => "Bench, No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "AB COASTER MACHINE",
                "image" => "exercises/abs-3.gif",
                "type" => "abs",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CROSS CRUNCH",
                "image" => "exercises/abs-4.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING CABLE CRUNCH",
                "image" => "exercises/abs-5.gif",
                "type" => "abs",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SEATED BENCH LEG PULL-IN",
                "image" => "exercises/abs-6.gif",
                "type" => "abs",
                "equipment" => "Bench, No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CROSS BODY MOUNTAIN CLIMBER",
                "image" => "exercises/abs-7.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ALTERNATE LEG RAISES",
                "image" => "exercises/abs-8.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CRUNCHES",
                "image" => "exercises/abs-9.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "MOUNTAIN CLIMBER",
                "image" => "exercises/abs-10.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BICYCLE CRUNCH",
                "image" => "exercises/abs-11.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LYING SCISSOR KICK",
                "image" => "exercises/abs-12.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEG RAISE",
                "image" => "exercises/abs-13.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "OBLIQUE FLOOR CRUNCHES",
                "image" => "exercises/abs-14.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "T-CROSS SIT-UP",
                "image" => "exercises/abs-15.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Legs
            [
                "name" => "CURTSY LUNGE",
                "image" => "exercises/legs-1.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "5 DOT DRILLS",
                "image" => "exercises/legs-2.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "HIGH KNEE LUNGE ON BOSU BALL",
                "image" => "exercises/legs-3.gif",
                "type" => "legs",
                "equipment" => "Exercise Ball, No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING LEG CIRCLES",
                "image" => "exercises/legs-4.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STATIC LUNGE",
                "image" => "exercises/legs-5.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL WALKING LUNGE",
                "image" => "exercises/legs-6.gif",
                "type" => "legs",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL GOOD MORNING",
                "image" => "exercises/legs-7.gif",
                "type" => "legs",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL SQUAT",
                "image" => "exercises/legs-8.gif",
                "type" => "legs",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DEPTH JUMP TO HURDLE HOP",
                "image" => "exercises/legs-9.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "POWER LUNGE",
                "image" => "exercises/legs-10.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL DEADLIFT",
                "image" => "exercises/legs-11.gif",
                "type" => "legs",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL SUMO DEADLIFT",
                "image" => "exercises/legs-12.gif",
                "type" => "legs",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BODYWEIGHT LUNGE",
                "image" => "exercises/legs-13.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BULGARIAN SPLIT SQUAT JUMP",
                "image" => "exercises/legs-14.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SQUAT",
                "image" => "exercises/legs-15.gif",
                "type" => "legs",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

        Exercise::insert($exercises);
    }
}
