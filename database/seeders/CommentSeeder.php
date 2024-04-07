<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [];
        
        for ($i=1;$i<=7;$i++) {
            $comments[] = [
                "post_id" => $i,
                "user_id" => $i + 1,
                "comment" => fake()->randomElement(['Well Done', 'Good Job Keep it Up', 'Nice']),
                "created_at" => now(),
                "updated_at" => now()
            ];
        }
        
        Comment::insert($comments);

        $comments = [];

        for ($i=1;$i<=7;$i++) {
            $comments[] = [
                "post_id" => $i,
                "user_id" => $i + 10,
                "comment" => fake()->randomElement(['Well Done', 'Good Job Keep it Up', 'Nice']),
                "created_at" => now(),
                "updated_at" => now()
            ];
        }

        Comment::insert($comments);
    }
}
