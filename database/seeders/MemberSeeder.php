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
<<<<<<< HEAD
        $userData = [];

        for ($i = 1; $i < 20; $i++) {
            $userData[] = [
                "name" => fake()->name(),
                "email" => fake()->unique()->email(),
                "phone" => fake()->numerify('##########'),
                "password" => password_hash("ssssssss", PASSWORD_DEFAULT),
                "gender" => fake()->randomElement(['M', 'F', 'O']),
                "dob" => fake()->date(),
                "address" => fake()->address(),
                "city" => fake()->city(),
                "zip_code" => fake()->countryCode(),
                "created_at" => now(),
                "updated_at" => now(),
            ];
        }

        User::insert($userData);
=======
        $members = [];
        for ($i=1 ; $i<20 ; $i++) {
            $members[] = [
                "name" => fake()->name(),
                "email" => fake()->unique()->email(),
                "password" => password_hash("ssssssss", PASSWORD_DEFAULT),
                "gender" => fake()->randomElement(['M', 'F', 'O']),
                "dob" => fake()->date(),
                "created_at" => now(),
                "updated_at" => now()
            ];
        }
        User::insert($members);
>>>>>>> 4b3ff30f75b97bc38050d928ffeceaad6f42846b
    }
}
