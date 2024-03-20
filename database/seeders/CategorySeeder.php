<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ["name" => "Protien"],
            ["name" => "GYM Equipments"],
            ["name" => "T-shirt"],
            ["name" => "Bottle"],
        ];

        Category::insert($categories);
    }
}
