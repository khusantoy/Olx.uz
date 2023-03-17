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
        Category::insert([
            [
                'title'=>"Avto",
                'image'=>''
            ],
            [
                'title'=>"Uy-joy",
                'image'=>''
            ],
            [
                'title'=>"Bolalar dunyosi",
                'image'=>''
            ],
            [
                'title'=>"Elektronika",
                'image'=>''
            ],
            [
                'title'=>"Kitoblar",
                'image'=>''
            ],
        ]);
    }
}
