<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderedProduct;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = Order::create([
            "user_id" => 2,
            "phone" => fake()->numerify('##########'),
            "address" => fake()->address(),
            "city" => fake()->city(),
            "state" => "Delhi",
            "zip_code" => fake()->countryCode(),
            "amount" => 2598,
            "status" => "pending",
        ]);

        OrderedProduct::create([
            "order_id" => $order->id,
            "product_name" => "Protien",
            "product_image" => "product-1.jpg",
            "product_price" => 1299,
            "category" => "Protien",
            "quantity" => 2
        ]);

        $order2 = Order::create([
            "user_id" => 3,
            "phone" => fake()->numerify('##########'),
            "address" => fake()->address(),
            "city" => fake()->city(),
            "zip_code" => fake()->countryCode(),
            "state" => "Odisha",
            "amount" => 1524,
            "status" => "pending",
        ]);

        OrderedProduct::create([
            "order_id" => $order2->id,
            "product_image" => "product-2.jpg",
            "product_name" => "Lifelong Protein Shaker|Stylish Protein Shaker Bottle|Sipper Bottle|Gym Bottle for Protein- 700ml",
            "product_price" => 150,
            "category" => "Protien",
            "quantity" => 4
        ]);

        OrderedProduct::create([
            "order_id" => $order2->id,
            "product_image" => "product-3.jpg",
            "product_name" => "FitBox Sports Intruder 20 Kg Adjustable PVC Dumbbells Weights With Dumbbells Rods For Home Gym & Strength Training, 10 Kg X 2 (Black)",
            "product_price" => 725,
            "category" => "Dumbell",
            "quantity" => 4
        ]);

        OrderedProduct::create([
            "order_id" => $order2->id,
            "product_image" => "product-4.jpg",
            "product_name" => "Boldfit Cotton Wrist Band for Men & Women, Wrist Supporter for Gym Wrist Wrap/Straps Gym Accessories for Men for Hand Grip & Wrist Support While Workout & Muscle Relaxation",
            "product_price" => 199,
            "category" => "Band",
            "quantity" => 1
        ]);
    }
}
