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
            "trainer_id" => 21
        ]);

        Chat::create([
            "user_id" => 2,
            "trainer_id" => 22
        ]);

        Chat::create([
            "user_id" => 2,
            "trainer_id" => 24
        ]);
    }
}
