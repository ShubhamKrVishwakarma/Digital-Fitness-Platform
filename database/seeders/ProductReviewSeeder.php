<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $reviews = ["Impressive product! Sleek design, intuitive interface, and exceptional performance. It's transformed my daily tasks into a breeze", "Highly recommended! The quality of this product surpasses my expectations. Durable construction, efficient functionality, and excellent value for money.", "Outstanding purchase! This product has become an essential part of my routine. Its versatility, reliability, and user-friendly features make it a standout in its category.", "Fantastic addition to my life! From its stylish appearance to its seamless operation, this product has exceeded all my needs. I couldn't be happier with my investment.", "Top-notch product! I've tried many similar items, but none compare to this one. Its innovative design, superior performance, and hassle-free maintenance set it apart from the rest."];

        for ($i=1;$i<=10;$i++) {
            $rating = rand(3, 5);

            ProductReview::create([
                "user_id" => $i,
                "rating" => $rating,
                "review" => $reviews[rand(0, count($reviews) - 1)],
                "product_id" => $i
            ]);

            $product = Product::find($i);

            $product->rating = $rating;

            $product->update();
        }
    }
}
