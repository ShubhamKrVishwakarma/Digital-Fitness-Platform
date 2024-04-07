<?php

namespace Database\Seeders;

use App\Models\PostLike;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostLikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $i = 1;
        
        while($i <= 7) {
            $likes = [];

            for ($j=1;$j<=rand(6, 15);$j++) {
                $likes[] = [
                    "post_id" => $i,
                    "user_id" => $j,
                    "created_at" => now(),
                    "updated_at" => now()
                ];
            }

            PostLike::insert($likes);
            
            $i++;
        }
    }
}
