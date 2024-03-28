<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [];

        for ($i=1;$i<=2;$i++) {
            $messages[] = [
                "chat_id" => 1,
                "sender_id" => 2,
                "reciever_id" => 21,
                "message" => fake()->text(),
                "created_at" => now(),
                "updated_at" => now()
            ];
        }

        Message::insert($messages);
        
        $messages = [];
        
        for ($i=1;$i<=2;$i++) {
            $messages[] = [
                "chat_id" => 1,
                "sender_id" => 21,
                "reciever_id" => 2,
                "message" => fake()->text(),
                "created_at" => now(),
                "updated_at" => now()
            ];
        }

        Message::insert($messages);

        $messages = [];
        
        for ($i=1;$i<=1;$i++) {
            $messages[] = [
                "chat_id" => 1,
                "sender_id" => 2,
                "reciever_id" => 21,
                "message" => fake()->text(),
                "created_at" => now(),
                "updated_at" => now()
            ];
        }

        Message::insert($messages);

        $messages = [];
        
        for ($i=1;$i<=4;$i++) {
            $messages[] = [
                "chat_id" => 1,
                "sender_id" => 21,
                "reciever_id" => 2,
                "message" => fake()->text(),
                "created_at" => now(),
                "updated_at" => now()
            ];
        }

        Message::insert($messages);
    }
}
