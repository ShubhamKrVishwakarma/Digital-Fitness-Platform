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
                "equipment" => "Bench, Dumbells",
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
                "equipment" => "Bench, Dumbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL BENCH PRESS",
                "image" => "exercises/chest-13.gif",
                "type" => "chest",
                "equipment" => "Bench, Dumbells",
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
                "equipment" => "Dumbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "INCLINE DUMBBELL PRESS",
                "image" => "exercises/chest-18.gif",
                "type" => "chest",
                "equipment" => "Dumbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "REVERSE GRIP INCLINE DUMBBELL PRESS",
                "image" => "exercises/chest-19.gif",
                "type" => "chest",
                "equipment" => "Dumbells",
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
                "image" => "exercises/shoulder-21.gif",
                "type" => "shoulder",
                "equipment" => "Exercise Ball",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL PUSH PRESS",
                "image" => "exercises/shoulder-22.gif",
                "type" => "shoulder",
                "equipment" => "Dumbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING DUMBBELL SHOULDER PRESS",
                "image" => "exercises/shoulder-23.gif",
                "type" => "shoulder",
                "equipment" => "Dumbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ARM SCISSORS",
                "image" => "exercises/shoulder-24.gif",
                "type" => "shoulder",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SIDE ARM RAISES",
                "image" => "exercises/shoulder-25.gif",
                "type" => "shoulder",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ARM CIRCLES",
                "image" => "exercises/shoulder-26.gif",
                "type" => "shoulder",
                "equipment" => "No Equipment",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL LATERAL RAISE",
                "image" => "exercises/shoulder-27.gif",
                "type" => "shoulder",
                "equipment" => "Dumbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL SHOULDER PRESS",
                "image" => "exercises/shoulder-28.gif",
                "type" => "shoulder",
                "equipment" => "Dumbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SMITH MACHINE BEHIND NECK PRESS",
                "image" => "exercises/shoulder-29.gif",
                "type" => "shoulder",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SMITH MACHINE SHOULDER PRESS",
                "image" => "exercises/shoulder-30.gif",
                "type" => "shoulder",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "CABLE LATERAL RAISE",
                "image" => "exercises/shoulder-31.gif",
                "type" => "shoulder",
                "equipment" => "Cable, Resistance Band",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "45 DEGREE INCLINE ROW",
                "image" => "exercises/shoulder-32.gif",
                "type" => "shoulder",
                "equipment" => "Dumbell, Bench",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "LEVER SHOULDER PRESS",
                "image" => "exercises/shoulder-33.gif",
                "type" => "shoulder",
                "equipment" => "Machine",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "SEATED BARBELL SHOULDER PRESS",
                "image" => "exercises/shoulder-34.gif",
                "type" => "shoulder",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "STANDING CLOSE GRIP MILITARY PRESS",
                "image" => "exercises/shoulder-35.gif",
                "type" => "shoulder",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "BARBELL MILITARY PRESS (OVERHEAD PRESS)",
                "image" => "exercises/shoulder-36.gif",
                "type" => "shoulder",
                "equipment" => "Barbell",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL CHEST SUPPORTED LATERAL RAISES",
                "image" => "exercises/shoulder-37.gif",
                "type" => "shoulder",
                "equipment" => "Dumbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL 6 WAY RAISE",
                "image" => "exercises/shoulder-38.gif",
                "type" => "shoulder",
                "equipment" => "Dumbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "DUMBBELL 4 WAY LATERAL RAISE",
                "image" => "exercises/shoulder-39.gif",
                "type" => "shoulder",
                "equipment" => "Dumbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "name" => "ALTERNATING DUMBBELL FRONT RAISE",
                "image" => "exercises/shoulder-40.gif",
                "type" => "shoulder",
                "equipment" => "Dumbells",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ];

        // Exercise::insert($exercises);
    }
}
