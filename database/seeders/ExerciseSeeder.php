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
                "equipment" => "FLY Machine",
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
                "equipment" => "Cable",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "HIGH CABLE CROSSOVER",
                "image" => "exercises/chest-9.gif",
                "type" => "chest",
                "equipment" => "Cable",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE UPPER CHEST CROSSOVERS",
                "image" => "exercises/chest-10.gif",
                "type" => "chest",
                "equipment" => "Cable",
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
                "equipment" => "Cable",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ONE-ARM CABLE CHEST PRESS",
                "image" => "exercises/chest-15.gif",
                "type" => "chest",
                "equipment" => "Cable",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SINGLE-ARM CABLE CROSSOVER",
                "image" => "exercises/chest-16.gif",
                "type" => "chest",
                "equipment" => "Cable",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "INCLINE DUMBBELL FLY",
                "image" => "exercises/chest-17.gif",
                "type" => "chest",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "INCLINE DUMBBELL PRESS",
                "image" => "exercises/chest-18.gif",
                "type" => "chest",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "REVERSE GRIP INCLINE DUMBBELL PRESS",
                "image" => "exercises/chest-19.gif",
                "type" => "chest",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "MACHINE FLY",
                "image" => "exercises/chest-20.gif",
                "type" => "chest",
                "equipment" => "FLY Machine",
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
                "equipment" => "Dumbbell, Bench",
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
            [
                "name" => "BARBELL MILITARY PRESS (OVERHEAD PRESS)",
                "image" => "exercises/shoulder-16.gif",
                "type" => "shoulder",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL CHEST SUPPORTED LATERAL RAISES",
                "image" => "exercises/shoulder-17.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL 6 WAY RAISE",
                "image" => "exercises/shoulder-18.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL 4 WAY LATERAL RAISE",
                "image" => "exercises/shoulder-19.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ALTERNATING DUMBBELL FRONT RAISE",
                "image" => "exercises/shoulder-20.gif",
                "type" => "shoulder",
                "equipment" => "Dumbbells",
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
                "equipment" => "Cable",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LAT PULLDOWN",
                "image" => "exercises/back-5.gif",
                "type" => "back",
                "equipment" => "Cable",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SEATED CABLE ROW",
                "image" => "exercises/back-6.gif",
                "type" => "back",
                "equipment" => "Cable",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BARBELL BENT OVER ROW",
                "image" => "exercises/back-7.gif",
                "type" => "back",
                "equipment" => "Cable",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE STRAIGHT ARM PULLDOWN",
                "image" => "exercises/back-8.gif",
                "type" => "back",
                "equipment" => "Cable",
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
                "type" => "cable",
                "equipment" => "Cable",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "MUSCLE-UP",
                "image" => "exercises/back-15.gif",
                "type" => "cable",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SEATED ROW MACHINE",
                "image" => "exercises/back-16.gif",
                "type" => "cable",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ONE ARM CABLE ROW",
                "image" => "exercises/back-17.gif",
                "type" => "cable",
                "equipment" => "Cable",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "REVERSE GRIP BARBELL ROW",
                "image" => "exercises/back-18.gif",
                "type" => "cable",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DEADLIFT",
                "image" => "exercises/back-19.gif",
                "type" => "cable",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ROMANIAN DEADLIFT",
                "image" => "exercises/back-20.gif",
                "type" => "cable",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

        Exercise::insert($exercises);
    }
}
