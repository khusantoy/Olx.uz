<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SupCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([

            'name' => "Sardor",
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $this->call([
            RoleSeeder::class,
            PermissionsSeeder::class,
            CategorySeeder::class,
            SupCategorySeeder::class,
            AnnouncementSeeder::class
        ]);
    }
}
