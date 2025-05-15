<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
    ['name' => 'Running'],
    ['name' => 'Basketball'],
    ['name' => 'Casual'],
    ['name' => 'Training'],
    ['name' => 'Skate'],
    ['name' => 'Soccer'],
    ['name' => 'Hiking'],
    ['name' => 'Tennis'],
    ['name' => 'Walking'],
    ['name' => 'Lifestyle'],
]);

    }
}
