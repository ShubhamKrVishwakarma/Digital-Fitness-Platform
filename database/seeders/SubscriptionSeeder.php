<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscription::create([
            "user_id" => 2,
            "trainer_id" => 11,
            "type" => "monthly",
            "expiry_date" => now()->addMonth(),
            "created_at" => now(),
            "updated_at" => now(),
        ]);
        
        Subscription::create([
            "user_id" => 2,
            "trainer_id" => 12,
            "type" => "monthly",
            "expiry_date" => now()->addMonth(),
            "created_at" => now(),
            "updated_at" => now(),
        ]);
        
        Subscription::create([
            "user_id" => 2,
            "trainer_id" => 13,
            "type" => "monthly",
            "expiry_date" => now()->addMonth(),
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
