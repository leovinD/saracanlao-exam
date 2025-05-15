<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            ['name' => 'Nike'],
            ['name' => 'Adidas'],
            ['name' => 'Puma'],
            ['name' => 'New Balance'],
            ['name' => 'Reebok'],
            ['name' => 'Vans'],
            ['name' => 'Converse'],
            ['name' => 'Asics'],
            ['name' => 'Under Armour'],
            ['name' => 'Fila'],
        ]);
    }
}
