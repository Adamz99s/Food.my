<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin= User::create([
            'name'=> 'Adminfoodmy@hq',
            'email'=> 'adminfoodmyhq@gmail.com',
            'password'=> bcrypt('admin123'),
        ]);
    }
}
