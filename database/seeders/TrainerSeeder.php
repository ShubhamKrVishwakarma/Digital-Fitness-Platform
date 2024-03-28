<?php

namespace Database\Seeders;

use App\Models\TrainerDetail;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $user = User::create([
                "name" => fake()->name(),
                "email" => fake()->unique()->email(),
                "phone" => fake()->numerify('##########'),
                "password" => password_hash("ssssssss", PASSWORD_DEFAULT),
                "gender" => fake()->randomElement(['M', 'F', 'O']),
                "dob" => fake()->date(),
                "address" => fake()->address(),
                "city" => fake()->city(),
                "zip_code" => fake()->countryCode(),
                "role" => "trainer"
            ]);

            TrainerDetail::create([
                "user_id" => $user->id,
                "occupation" => fake()->jobTitle(),
                "certificate_id" => fake()->randomElement(),
                "issue_date" => fake()->date(),
                "expiry_date" => fake()->date(),
                "issued_authority" => "West Bengal"
            ]);
        }
    }
}
