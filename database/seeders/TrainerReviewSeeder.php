<?php

namespace Database\Seeders;

use App\Models\TrainerReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainerReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [];

        for ($i=1;$i<=10;$i++) {
            TrainerReview::create([
                "user_id" => $i,
                "rating" => rand(1, 5),
                "review" => fake()->name(),
                "trainer_id" => rand(11, 17)
            ]);
        }

        TrainerReview::insert($reviews);
    }
}
