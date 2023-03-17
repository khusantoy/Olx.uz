<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::insert([
            [
                'title'=>'product_show'
            ],
            [
                'title'=>'product_add'
            ],
            [
                'title'=>'product_delete'
            ]
        ]);
    }
}
