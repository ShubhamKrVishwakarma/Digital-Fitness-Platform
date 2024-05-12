<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Admin",
            "email" => "web@admin.com",
            "phone" => "9999999999",
            "password" => "admin123",
            "profile_pic" => "1.png",
            "role" => "admin",
        ]);
    }
}
