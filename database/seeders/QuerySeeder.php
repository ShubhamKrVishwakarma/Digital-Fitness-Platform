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
<<<<<<< HEAD
        $query=[];
=======
        $query = [];

<<<<<<< HEAD
>>>>>>> a61be399a3bdbaff9e1b538c509ab3611d002fea
        for($i=1;$i<=100;$i++){
=======
        for($i=1;$i<=20;$i++){
>>>>>>> 4b3ff30f75b97bc38050d928ffeceaad6f42846b
            $query[] = [
                "name"=>fake()->name(),
                "email"=>fake()->email(),
                "phone" => fake()->numerify('##########'),
                "message"=> fake()->text(),
                "created_at"=> now(),
                "updated_at"=> now()
            ];
        }
<<<<<<< HEAD
=======
        
>>>>>>> a61be399a3bdbaff9e1b538c509ab3611d002fea
        Query::insert($query);
    }
}
