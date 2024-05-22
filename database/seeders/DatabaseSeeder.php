<?php

namespace Database\Seeders;

use App\Models\Workout;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            MemberSeeder::class,
            TrainerSeeder::class,
            QuerySeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            ExerciseSeeder::class,
            WorkoutPlanSeeder::class,
            OrderSeeder::class,
            SubscriptionSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            LikeSeeder::class,
            TrainerReviewSeeder::class,
            ProductReviewSeeder::class
        ]);
    }
}
