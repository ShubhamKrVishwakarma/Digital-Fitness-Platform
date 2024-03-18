<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [];
        for ($i=1 ; $i<20 ; $i++) {
            $members[] = [
                "name" => fake()->name(),
                "email" => fake()->unique()->email(),
                "password" => "ssssssss",
                "gender" => fake()->randomElement(['M', 'F', 'O']),
                "dob" => fake()->date(),
                "created_at" => now(),
                "updated_at" => now()
            ];
        }
        User::insert($members);
    }
}
