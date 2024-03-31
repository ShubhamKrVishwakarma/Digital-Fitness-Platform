<?php

namespace Database\Seeders;

use App\Models\Community;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [];

        for ($i=2;$i<=11;$i++) {
            $posts[] = [
                "user_id" => $i,
                "title" => fake()->title(),
                "message" => fake()->text(),
                "created_at" => now(),
                "updated_at" => now()
            ];
        }

        Community::insert($posts);
    }
}
