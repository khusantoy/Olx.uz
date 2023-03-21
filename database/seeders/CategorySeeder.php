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
                'title'=>"Transport",
                'image'=>''
            ],
            [
                'title'=>"Ko'chmas mulk",
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
            [
                'title'=>"Hayvonlar",
                'image'=>''
            ],
            [
                'title'=>"Xizmatlar",
                'image'=>''
            ],
            [
                'title'=>"Bepul",
                'image'=>''
            ],
        ]);
    }
}
