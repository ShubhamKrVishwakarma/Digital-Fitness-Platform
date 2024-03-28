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
                "dob" => "2004-01-10",
                "address" => fake()->address(),
                "city" => fake()->city(),
                "zip_code" => "123456",
                "state" => "West Bengal",
                "role" => "trainer"
            ]);

            TrainerDetail::create([
                "user_id" => $user->id,
                "occupation" => "GYM Trainer",
                "certificate_id" => "CSGW325HF",
                "issue_date" => "2014-10-05",
                "expiry_date" => "2020-11-12",
                "issued_authority" => "West Bengal"
            ]);
        }
    }
}
