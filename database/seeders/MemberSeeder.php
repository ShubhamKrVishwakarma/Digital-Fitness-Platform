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
        $userData = [];

        for ($i = 1; $i < 20; $i++) {
            $userData[] = [
                "name" => fake()->name(),
                "email" => fake()->unique()->email(),
                "phone" => fake()->numerify('##########'),
                "password" => password_hash("ssssssss", PASSWORD_DEFAULT),
                "gender" => fake()->randomElement(['M', 'F', 'O']),
                "dob" => "2005-10-10",
                "address" => fake()->address(),
                "city" => fake()->city(),
                "zip_code" => "98765432",
                "state" => "Delhi",
                "created_at" => now(),
                "updated_at" => now(),
            ];
        }

        User::insert($userData);
    }
}
