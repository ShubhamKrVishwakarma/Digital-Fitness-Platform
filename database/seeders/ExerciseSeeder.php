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
                "image" => "chest-1.gif",
                "type" => "chest",
                "equipment" => "Exercise Ball",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING MEDICINE BALL CHEST PASS",
                "image" => "chest-2.gif",
                "type" => "chest",
                "equipment" => "Exercise Ball",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ARM SCISSORS",
                "image" => "chest-3.gif",
                "type" => "chest",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "INCLINE CHEST FLY MACHINE",
                "image" => "chest-4.gif",
                "type" => "chest",
                "equipment" => "Fly Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BENCH PRESS",
                "image" => "chest-5.gif",
                "type" => "chest",
                "equipment" => "Barbell, Bench",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "PEC DECK FLY",
                "image" => "chest-6.gif",
                "type" => "chest",
                "equipment" => "Fly Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL PULLOVER",
                "image" => "chest-7.gif",
                "type" => "chest",
                "equipment" => "Bench, Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LOW CABLE CROSSOVER",
                "image" => "chest-8.gif",
                "type" => "chest",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "HIGH CABLE CROSSOVER",
                "image" => "chest-9.gif",
                "type" => "chest",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE UPPER CHEST CROSSOVERS",
                "image" => "chest-10.gif",
                "type" => "chest",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "INCLINE BARBELL BENCH PRESS",
                "image" => "chest-11.gif",
                "type" => "chest",
                "equipment" => "Barbell, Bench",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL FLY",
                "image" => "chest-12.gif",
                "type" => "chest",
                "equipment" => "Bench, Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL BENCH PRESS",
                "image" => "chest-13.gif",
                "type" => "chest",
                "equipment" => "Bench, Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE CROSSOVER",
                "image" => "chest-14.gif",
                "type" => "chest",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ONE-ARM CABLE CHEST PRESS",
                "image" => "chest-15.gif",
                "type" => "chest",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Shoulder
            [
                "name" => "MEDICINE BALL OVERHEAD THROW",
                "image" => "shoulder-1.gif",
                "type" => "shoulder",
                "equipment" => "Exercise Ball",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL PUSH PRESS",
                "image" => "shoulder-2.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING DUMBBELL SHOULDER PRESS",
                "image" => "shoulder-3.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ARM SCISSORS",
                "image" => "shoulder-4.gif",
                "type" => "shoulder",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SIDE ARM RAISES",
                "image" => "shoulder-5.gif",
                "type" => "shoulder",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ARM CIRCLES",
                "image" => "shoulder-6.gif",
                "type" => "shoulder",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL LATERAL RAISE",
                "image" => "shoulder-7.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL SHOULDER PRESS",
                "image" => "shoulder-8.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SMITH MACHINE BEHIND NECK PRESS",
                "image" => "shoulder-9.gif",
                "type" => "shoulder",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SMITH MACHINE SHOULDER PRESS",
                "image" => "shoulder-10.gif",
                "type" => "shoulder",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE LATERAL RAISE",
                "image" => "shoulder-11.gif",
                "type" => "shoulder",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "45 DEGREE INCLINE ROW",
                "image" => "shoulder-12.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells, Bench",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEVER SHOULDER PRESS",
                "image" => "shoulder-13.gif",
                "type" => "shoulder",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SEATED BARBELL SHOULDER PRESS",
                "image" => "shoulder-14.gif",
                "type" => "shoulder",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING CLOSE GRIP MILITARY PRESS",
                "image" => "shoulder-15.gif",
                "type" => "shoulder",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Back
            [
                "name" => "ROWING MACHINE",
                "image" => "back-1.gif",
                "type" => "back",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEVER FRONT PULLDOWN",
                "image" => "back-2.gif",
                "type" => "back",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "PULL-UP",
                "image" => "back-3.gif",
                "type" => "back",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE REAR PULLDOWN",
                "image" => "back-4.gif",
                "type" => "back",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LAT PULLDOWN",
                "image" => "back-5.gif",
                "type" => "back",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SEATED CABLE ROW",
                "image" => "back-6.gif",
                "type" => "back",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BARBELL BENT OVER ROW",
                "image" => "back-7.gif",
                "type" => "back",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE STRAIGHT ARM PULLDOWN",
                "image" => "back-8.gif",
                "type" => "back",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEGLESS ROPE CLIMB",
                "image" => "back-9.gif",
                "type" => "back",
                "equipment" => "Pole, Rope",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEVER T-BAR ROW",
                "image" => "back-10.gif",
                "type" => "back",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL ROW",
                "image" => "back-11.gif",
                "type" => "back",
                "equipment" => "Dumbbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BENT OVER DUMBBELL ROW",
                "image" => "back-12.gif",
                "type" => "back",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL BENT OVER REVERSE GRIP ROW",
                "image" => "back-13.gif",
                "type" => "back",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "REVERSE LAT-PULLDOWN",
                "image" => "back-14.gif",
                "type" => "back",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "MUSCLE-UP",
                "image" => "back-15.gif",
                "type" => "back",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Arms
            [
                "name" => "SEATED ZOTTMAN CURL",
                "image" => "biceps-1.gif",
                "type" => "biceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING BARBELL CONCENTRATION CURL",
                "image" => "biceps-2.gif",
                "type" => "biceps",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "WAITER CURL",
                "image" => "biceps-3.gif",
                "type" => "biceps",
                "equipment" => "Dumbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DOUBLE ARM DUMBBELL CURL",
                "image" => "biceps-4.gif",
                "type" => "biceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DDUMBBELL CURL",
                "image" => "biceps-5.gif",
                "type" => "biceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BARBELL CURL",
                "image" => "biceps-6.gif",
                "type" => "biceps",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CONCENTRATION CURL",
                "image" => "biceps-7.gif",
                "type" => "biceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL PREACHER CURL",
                "image" => "biceps-8.gif",
                "type" => "biceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "EZ BAR PREACHER CURL",
                "image" => "biceps-9.gif",
                "type" => "biceps",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "HAMMER CURL",
                "image" => "biceps-10.gif",
                "type" => "biceps",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SEATED INCLINE DUMBBELL CURL",
                "image" => "biceps-11.gif",
                "type" => "biceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEVER PREACHER CURL",
                "image" => "biceps-12.gif",
                "type" => "biceps",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "HIGH CABLE SINGLE ARM BICEP CURL",
                "image" => "biceps-13.gif",
                "type" => "biceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ONE ARM CABLE CURL",
                "image" => "biceps-14.gif",
                "type" => "biceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LYING CABLE CURL",
                "image" => "biceps-15.gif",
                "type" => "biceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Triceps
            [
                "name" => "MEDICINE BALL OVERHEAD THROW",
                "image" => "triceps-1.gif",
                "type" => "triceps",
                "equipment" => "Exercise Ball",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ONE ARM TRICEPS PUSHDOWN",
                "image" => "triceps-2.gif",
                "type" => "triceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL KICKBACK",
                "image" => "triceps-3.gif",
                "type" => "triceps",
                "equipment" => "Dumbbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ONE ARM REVERSE PUSHDOWN",
                "image" => "triceps-4.gif",
                "type" => "triceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "PUSH-DOWN",
                "image" => "triceps-5.gif",
                "type" => "triceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BENCH DIPS",
                "image" => "triceps-6.gif",
                "type" => "triceps",
                "equipment" => "Bench, No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "TRICEPS DIPS",
                "image" => "triceps-7.gif",
                "type" => "triceps",
                "equipment" => "Machine, No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ONE ARM LYING TRICEPS EXTENSION",
                "image" => "triceps-8.gif",
                "type" => "triceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE ROPE OVERHEAD TRICEPS EXTENSION",
                "image" => "triceps-9.gif",
                "type" => "triceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEVER TRICEPS DIP",
                "image" => "triceps-10.gif",
                "type" => "triceps",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LYING BARBELL TRICEPS EXTENSION",
                "image" => "triceps-11.gif",
                "type" => "triceps",
                "equipment" => "Barbell, Bench",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE TRICEP KICKBACK",
                "image" => "triceps-12.gif",
                "type" => "triceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "TRICEPS DIPS ON FLOOR",
                "image" => "triceps-13.gif",
                "type" => "triceps",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL SEATED FRONT AND BACK TATE PRESS",
                "image" => "triceps-14.gif",
                "type" => "triceps",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "KNEELING CABLE TRICEPS EXTENSION",
                "image" => "triceps-15.gif",
                "type" => "triceps",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Abs/Core
            [
                "name" => "MEDICINE BALL ROTATIONAL THROW",
                "image" => "abs-1.gif",
                "type" => "abs",
                "equipment" => "Exercise Ball",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DRAGON FLAG",
                "image" => "abs-2.gif",
                "type" => "abs",
                "equipment" => "Bench, No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "AB COASTER MACHINE",
                "image" => "abs-3.gif",
                "type" => "abs",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CROSS CRUNCH",
                "image" => "abs-4.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING CABLE CRUNCH",
                "image" => "abs-5.gif",
                "type" => "abs",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SEATED BENCH LEG PULL-IN",
                "image" => "abs-6.gif",
                "type" => "abs",
                "equipment" => "Bench, No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CROSS BODY MOUNTAIN CLIMBER",
                "image" => "abs-7.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ALTERNATE LEG RAISES",
                "image" => "abs-8.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CRUNCHES",
                "image" => "abs-9.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "MOUNTAIN CLIMBER",
                "image" => "abs-10.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BICYCLE CRUNCH",
                "image" => "abs-11.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LYING SCISSOR KICK",
                "image" => "abs-12.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEG RAISE",
                "image" => "abs-13.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "OBLIQUE FLOOR CRUNCHES",
                "image" => "abs-14.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "T-CROSS SIT-UP",
                "image" => "abs-15.gif",
                "type" => "abs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            // Legs
            [
                "name" => "CURTSY LUNGE",
                "image" => "legs-1.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "5 DOT DRILLS",
                "image" => "legs-2.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "HIGH KNEE LUNGE ON BOSU BALL",
                "image" => "legs-3.gif",
                "type" => "legs",
                "equipment" => "Exercise Ball, No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING LEG CIRCLES",
                "image" => "legs-4.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STATIC LUNGE",
                "image" => "legs-5.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL WALKING LUNGE",
                "image" => "legs-6.gif",
                "type" => "legs",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL GOOD MORNING",
                "image" => "legs-7.gif",
                "type" => "legs",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL SQUAT",
                "image" => "legs-8.gif",
                "type" => "legs",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DEPTH JUMP TO HURDLE HOP",
                "image" => "legs-9.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "POWER LUNGE",
                "image" => "legs-10.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL DEADLIFT",
                "image" => "legs-11.gif",
                "type" => "legs",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL SUMO DEADLIFT",
                "image" => "legs-12.gif",
                "type" => "legs",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BODYWEIGHT LUNGE",
                "image" => "legs-13.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BULGARIAN SPLIT SQUAT JUMP",
                "image" => "legs-14.gif",
                "type" => "legs",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SQUAT",
                "image" => "legs-15.gif",
                "type" => "legs",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

        Exercise::insert($exercises);
    }
}
