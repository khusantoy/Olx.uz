<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\Category;
use App\Models\SupCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $count=1;
        $elonlar_data = [];
        foreach (Category::all() as  $category) {
            for ($i = 0; $i < 15; $i++) {
                $data[] = [
                    'title' => 'title  Category' . $category->id,
                    'image' => '',
                    'category_id' => $category->id
                ];


                for ($j = 0; $j < 10; $j++) {
                    $elonlar_data[] = [
                        'title'=>"elon title sub_id".$count,
                        'description'=>"elon description sub_id".$count,

                        'type'=>"1",
                        'view'=>0,
                        'price'=>1000,
                        'user_id'=>1,
                        'category_id'=>$category->id,
                    ];
                }
                $count++;
            }
        }
        SupCategory::insert($data);
        Announcement::insert($elonlar_data);
    }
}
