<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chat::create([
            "user_id" => 2,
            "trainer_id" => 11
        ]);

        Chat::create([
            "user_id" => 2,
            "trainer_id" => 12
        ]);

        Chat::create([
            "user_id" => 2,
            "trainer_id" => 13
        ]);
    }
}
