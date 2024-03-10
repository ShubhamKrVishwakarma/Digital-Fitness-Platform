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
        for ($i=1 ; $i<10 ; $i++) {
            User::create([
                "name" => fake()->name(),
                "email" => fake()->unique()->email(),
                "password" => "ssssssss",
                "gender" => fake()->randomElement(['M', 'F']),
                "dob" => fake()->date()
            ]);
        }
    }
}
