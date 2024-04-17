<?php

namespace Database\Seeders;

use App\Models\ProductReview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [];

        for ($i=1;$i<=17;$i++) {
            ProductReview::create([
                "user_id" => $i,
                "rating" => rand(1, 5),
                "review" => fake()->name(),
                "product_id" => rand(1, 10)
            ]);
        }

        ProductReview::insert($reviews);
    }
}
