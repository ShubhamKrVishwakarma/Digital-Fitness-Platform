<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                "user_id" => 11,
                "title" => "Done Morning Running Routine",
                "type" => "image",
                "content" => "1.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "user_id" => 12,
                "title" => "Consistency",
                "type" => "image",
                "content" => "2.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "user_id" => 13,
                "title" => "Eat Healty! Live Happily!",
                "type" => "image",
                "content" => "3.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "user_id" => 14,
                "title" => "Back Day Sorted!!",
                "type" => "image",
                "content" => "4.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "user_id" => 15,
                "title" => "!!YOGA DAY!!",
                "type" => "video",
                "content" => "1.mp4",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "user_id" => 16,
                "title" => "!! DEADLIFT !!",
                "type" => "video",
                "content" => "2.mp4",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "user_id" => 13,
                "title" => "Before After",
                "type" => "image",
                "content" => "5.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
        ];

        Post::insert($posts);
    }
}
