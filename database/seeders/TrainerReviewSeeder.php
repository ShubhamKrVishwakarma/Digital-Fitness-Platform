<?php

namespace Database\Seeders;

use App\Models\TrainerReview;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainerReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = ["Exceptional trainer! Engaging, knowledgeable, and truly passionate about their subject matter. Every session leaves me feeling motivated and equipped with practical skills.", "Highly recommended! The trainer's ability to simplify complex concepts makes learning enjoyable and effective. Their enthusiasm is contagious, creating a positive and dynamic learning environment.", "Outstanding trainer! Patient, approachable, and skilled at tailoring sessions to individual needs. Their real-world examples bring theory to life, fostering deep understanding and application.", "Fantastic experience! The trainer's expertise shines through in every session, offering invaluable insights and strategies. Their commitment to student success is evident, making learning both rewarding and fun.", "Top-notch trainer! Professional, organized, and dedicated to helping learners reach their goals. Their supportive approach fosters confidence and growth, making each session a worthwhile investment in personal development."];

        $trainer_id = 11;

        for ($i=1;$i<=7;$i++) {
            $rating = rand(3, 5);

            TrainerReview::create([
                "user_id" => $i,
                "rating" => $rating,
                "review" => $reviews[rand(0, count($reviews) - 1)],
                "trainer_id" => $trainer_id,
            ]);
            
            $trainer = User::find($trainer_id);
            
            $trainer->rating = $rating;
            
            $trainer->update();

            $trainer_id++;
        }
    }
}
