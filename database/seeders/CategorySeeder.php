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
                'image'=>'new-car.png'
            ],
            [
                'title'=>"Ko'chmas mulk",
                'image'=>'house.png'
            ],
            [
                'title'=>"Bolalar dunyosi",
                'image'=>'toys.png'
            ],
            [
                'title'=>"Elektronika",
                'image'=>'gadgets.png'
            ],
            [
                'title'=>"Kitoblar",
                'image'=>'book.png'
            ],
            [
                'title'=>"Hayvonlar",
                'image'=>'paw.png'
            ],
            [
                'title'=>"Xizmatlar",
                'image'=>'customer-service.png'
            ],
            [
                'title'=>"Bepul",
                'image'=>'free.png'
            ],
        ]);
    }
}
