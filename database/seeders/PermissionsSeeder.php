<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::insert([

            [
                'title' => 'users_access'
            ],
            [
                'title' => 'users_edit'
            ],
            [
                'title' => 'users_show'
            ],
            [
                'title' => 'users_delete'
            ],
            [
                'title' => 'users_create'
            ],
            [
                'title' => 'roles_access'
            ],
            [
                'title' => 'roles_edit'
            ],
            [
                'title' => 'roles_show'
            ],
            [
                'title' => 'roles_delete'
            ],
            [
                'title' => 'roles_create'
            ], [
                'title' => 'permissions_access'
            ],
            [
                'title' => 'permissions_edit'
            ],
            [
                'title' => 'permissions_show'
            ],
            [
                'title' => 'permissions_delete'
            ],
            [
                'title' => 'permissions_create'
            ],
        ]);
    }
}
