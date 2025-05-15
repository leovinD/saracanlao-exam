<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shoes')->insert([
            ['name' => 'Air Max 90', 'brand_id' => 1, 'category_id' => 1, 'price' => 120.00, 'stock' => 50],
            ['name' => 'Ultra Boost', 'brand_id' => 2, 'category_id' => 1, 'price' => 180.00, 'stock' => 30],
            ['name' => 'Suede Classic', 'brand_id' => 3, 'category_id' => 3, 'price' => 80.00, 'stock' => 20],
            ['name' => '574 Core', 'brand_id' => 4, 'category_id' => 3, 'price' => 85.00, 'stock' => 40],
            ['name' => 'Club C 85', 'brand_id' => 5, 'category_id' => 3, 'price' => 70.00, 'stock' => 35],
            ['name' => 'Old Skool', 'brand_id' => 6, 'category_id' => 5, 'price' => 65.00, 'stock' => 60],
            ['name' => 'Chuck Taylor', 'brand_id' => 7, 'category_id' => 5, 'price' => 55.00, 'stock' => 25],
            ['name' => 'Gel Kayano', 'brand_id' => 8, 'category_id' => 1, 'price' => 150.00, 'stock' => 22],
            ['name' => 'HOVR Phantom', 'brand_id' => 9, 'category_id' => 4, 'price' => 130.00, 'stock' => 18],
            ['name' => 'Disruptor II', 'brand_id' => 10, 'category_id' => 9, 'price' => 75.00, 'stock' => 28],
        ]);
    }
}
