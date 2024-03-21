<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mikerpizza_menu')->insert(
        [
            'Menu_name' => 'Mushroom Soup',
            'Menu_desc' => 'Ordered 1 Mushroom Soup',
            'Menu_price' => 'RM 6.50'
        ],
        [
            'Menu_name' => 'Garlic Bread',
            'Menu_desc' => 'Ordered 1 Garlic Bread',
            'Menu_price' => 'RM 10.00'
        ],
        [
            'Menu_name' => 'Chicken Wings',
            'Menu_desc' => 'Ordered 1 Chicken Wings',
            'Menu_price' => 'RM 10.00'
        ]
    
    
    
    
    );
    }
}
