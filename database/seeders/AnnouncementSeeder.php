<?php

namespace Database\Seeders;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $elonlar_data = [];
        $count=1;
        foreach (Category::all() as  $category) {
            for ($j = 0; $j < 5; $j++) {
                $elonlar_data[] = [
                    'title'=>"elon title sub_id".$count,
                    'description'=>"elon description sub_id".$count,
                    'type'=>"1",
                    'view'=>0,
                    'price'=>1000,
                    'user_id'=>1,
                    'category_id'=>$category->id,
                ];
                $count++;
            }
        }
        Announcement::insert($elonlar_data);
    }
}
