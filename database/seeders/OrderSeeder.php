<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderedProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            "product_image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "product_name" => "Optimum Nutrition (ON) Gold Standard 100% Whey (2 lbs/907 g) (Double Rich Chocolate) Protein Powder",
            "product_price" => 1299,
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
            "product_image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "product_name" => "Lifelong Protein Shaker|Stylish Protein Shaker Bottle|Sipper Bottle|Gym Bottle for Protein- 700ml",
            "product_price" => 150,
            "quantity" => 4
        ]);

        OrderedProduct::create([
            "order_id" => $order2->id,
            "product_image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "product_name" => "FitBox Sports Intruder 20 Kg Adjustable PVC Dumbbells Weights With Dumbbells Rods For Home Gym & Strength Training, 10 Kg X 2 (Black)",
            "product_price" => 725,
            "quantity" => 4
        ]);

        OrderedProduct::create([
            "order_id" => $order2->id,
            "product_image" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "product_name" => "Boldfit Cotton Wrist Band for Men & Women, Wrist Supporter for Gym Wrist Wrap/Straps Gym Accessories for Men for Hand Grip & Wrist Support While Workout & Muscle Relaxation",
            "product_price" => 199,
            "quantity" => 1
        ]);
    }
}
