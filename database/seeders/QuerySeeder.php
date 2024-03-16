<?php

namespace Database\Seeders;

use App\Models\Query;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = [];

        for($i=1;$i<=100;$i++){
            $query[] = [
                "name"=>fake()->name(),
                "email"=>fake()->email(),
                "phone" => fake()->numerify('##########'),
                "message"=> fake()->text(),
                "created_at"=> now(),
                "updated_at"=> now()
            ];
        }
        
        Query::insert($query);
    }
}
