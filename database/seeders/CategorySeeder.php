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
            ["name" => "Dumbell"],
            ["name" => "T-shirt"],
            ["name" => "Cap"],
            ["name" => "Bottles"],
        ];

        Category::insert($categories);
    }
}
