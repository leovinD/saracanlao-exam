<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sales')->insert([
    ['shoe_id' => 1, 'quantity' => 2, 'total_price' => 240.00, 'sale_date' => '2025-05-01'],
    ['shoe_id' => 2, 'quantity' => 1, 'total_price' => 180.00, 'sale_date' => '2025-05-02'],
    ['shoe_id' => 3, 'quantity' => 3, 'total_price' => 240.00, 'sale_date' => '2025-05-03'],
    ['shoe_id' => 4, 'quantity' => 1, 'total_price' => 85.00, 'sale_date' => '2025-05-04'],
    ['shoe_id' => 5, 'quantity' => 2, 'total_price' => 140.00, 'sale_date' => '2025-05-05'],
    ['shoe_id' => 6, 'quantity' => 5, 'total_price' => 325.00, 'sale_date' => '2025-05-06'],
    ['shoe_id' => 7, 'quantity' => 1, 'total_price' => 55.00, 'sale_date' => '2025-05-07'],
    ['shoe_id' => 8, 'quantity' => 2, 'total_price' => 300.00, 'sale_date' => '2025-05-08'],
    ['shoe_id' => 9, 'quantity' => 1, 'total_price' => 130.00, 'sale_date' => '2025-05-09'],
    ['shoe_id' => 10, 'quantity' => 3, 'total_price' => 225.00, 'sale_date' => '2025-05-10'],
    ['shoe_id' => 5, 'quantity' => 2, 'total_price' => 140.00, 'sale_date' => '2025-06-05'],
    ['shoe_id' => 6, 'quantity' => 5, 'total_price' => 325.00, 'sale_date' => '2025-06-06'],
    ['shoe_id' => 7, 'quantity' => 1, 'total_price' => 55.00, 'sale_date' => '2025-06-07'],
    ['shoe_id' => 8, 'quantity' => 2, 'total_price' => 300.00, 'sale_date' => '2025-06-08'],
    ['shoe_id' => 9, 'quantity' => 1, 'total_price' => 130.00, 'sale_date' => '2025-06-09'],
    ['shoe_id' => 10, 'quantity' => 3, 'total_price' => 225.00, 'sale_date' => '2025-07-10'],
    ['shoe_id' => 3, 'quantity' => 3, 'total_price' => 240.00, 'sale_date' => '2025-07-03'],
    ['shoe_id' => 4, 'quantity' => 1, 'total_price' => 85.00, 'sale_date' => '2025-07-04'],
    ['shoe_id' => 5, 'quantity' => 2, 'total_price' => 140.00, 'sale_date' => '2025-07-05'],
    ['shoe_id' => 6, 'quantity' => 5, 'total_price' => 325.00, 'sale_date' => '2025-07-06'],
    ['shoe_id' => 10, 'quantity' => 3, 'total_price' => 225.00, 'sale_date' => '2025-07-10'],
    ['shoe_id' => 3, 'quantity' => 3, 'total_price' => 240.00, 'sale_date' => '2025-07-03'],
    ['shoe_id' => 4, 'quantity' => 1, 'total_price' => 85.00, 'sale_date' => '2025-07-04'],
    ['shoe_id' => 5, 'quantity' => 2, 'total_price' => 140.00, 'sale_date' => '2025-07-05'],
    ['shoe_id' => 6, 'quantity' => 5, 'total_price' => 325.00, 'sale_date' => '2025-08-06'],
    ['shoe_id' => 10, 'quantity' => 3, 'total_price' => 225.00, 'sale_date' => '2025-08-10'],
    ['shoe_id' => 3, 'quantity' => 3, 'total_price' => 240.00, 'sale_date' => '2025-08-03'],
    ['shoe_id' => 4, 'quantity' => 1, 'total_price' => 85.00, 'sale_date' => '2025-09-04'],
    ['shoe_id' => 5, 'quantity' => 2, 'total_price' => 140.00, 'sale_date' => '2025-09-05'],
    ['shoe_id' => 6, 'quantity' => 5, 'total_price' => 325.00, 'sale_date' => '2025-09-06'],
    ['shoe_id' => 2, 'quantity' => 1, 'total_price' => 180.00, 'sale_date' => '2025-09-02'],
    ['shoe_id' => 3, 'quantity' => 3, 'total_price' => 240.00, 'sale_date' => '2025-09-03'],
    ['shoe_id' => 4, 'quantity' => 1, 'total_price' => 85.00, 'sale_date' => '2025-10-04'],
    ['shoe_id' => 5, 'quantity' => 2, 'total_price' => 140.00, 'sale_date' => '2025-010-05'],
    ['shoe_id' => 8, 'quantity' => 2, 'total_price' => 300.00, 'sale_date' => '2025-10-08'],
    ['shoe_id' => 9, 'quantity' => 1, 'total_price' => 130.00, 'sale_date' => '2025-10-09'],
    ['shoe_id' => 10, 'quantity' => 3, 'total_price' => 225.00, 'sale_date' => '2025-10-10'],
    ['shoe_id' => 5, 'quantity' => 2, 'total_price' => 140.00, 'sale_date' => '2025-10-05'],
    ['shoe_id' => 6, 'quantity' => 5, 'total_price' => 325.00, 'sale_date' => '2025-10-06'],
    ['shoe_id' => 7, 'quantity' => 1, 'total_price' => 55.00, 'sale_date' => '2025-11-07'],
    ['shoe_id' => 10, 'quantity' => 3, 'total_price' => 225.00, 'sale_date' => '2025-11-10'],
    ['shoe_id' => 5, 'quantity' => 2, 'total_price' => 140.00, 'sale_date' => '2025-11-05'],
    ['shoe_id' => 6, 'quantity' => 5, 'total_price' => 325.00, 'sale_date' => '2025-11-06'],
    ['shoe_id' => 7, 'quantity' => 1, 'total_price' => 55.00, 'sale_date' => '2025-11-07'],
    ['shoe_id' => 8, 'quantity' => 2, 'total_price' => 300.00, 'sale_date' => '2025-12-08'],
    ['shoe_id' => 9, 'quantity' => 1, 'total_price' => 130.00, 'sale_date' => '2025-12-09'],
    ['shoe_id' => 8, 'quantity' => 2, 'total_price' => 300.00, 'sale_date' => '2025-12-08'],
    ['shoe_id' => 9, 'quantity' => 1, 'total_price' => 130.00, 'sale_date' => '2025-12-09'],
    ['shoe_id' => 10, 'quantity' => 3, 'total_price' => 225.00, 'sale_date' => '2025-12-10'],
    ['shoe_id' => 3, 'quantity' => 3, 'total_price' => 240.00, 'sale_date' => '2025-01-03'],
    ['shoe_id' => 4, 'quantity' => 1, 'total_price' => 85.00, 'sale_date' => '2025-01-04'],
    ['shoe_id' => 5, 'quantity' => 2, 'total_price' => 140.00, 'sale_date' => '2025-01-05'],
    ['shoe_id' => 3, 'quantity' => 3, 'total_price' => 240.00, 'sale_date' => '2025-01-03'],
    ['shoe_id' => 4, 'quantity' => 1, 'total_price' => 85.00, 'sale_date' => '2025-01-04'],
    ['shoe_id' => 5, 'quantity' => 2, 'total_price' => 140.00, 'sale_date' => '2025-01-05'],
    ['shoe_id' => 3, 'quantity' => 3, 'total_price' => 240.00, 'sale_date' => '2025-01-03'],
    ['shoe_id' => 4, 'quantity' => 1, 'total_price' => 85.00, 'sale_date' => '2025-01-04'],
    ['shoe_id' => 5, 'quantity' => 2, 'total_price' => 140.00, 'sale_date' => '2025-01-05'],
    ['shoe_id' => 1, 'quantity' => 2, 'total_price' => 240.00, 'sale_date' => '2025-02-01'],
    ['shoe_id' => 2, 'quantity' => 1, 'total_price' => 180.00, 'sale_date' => '2025-02-02'],
    ['shoe_id' => 3, 'quantity' => 3, 'total_price' => 240.00, 'sale_date' => '2025-02-03'],
    ['shoe_id' => 4, 'quantity' => 1, 'total_price' => 85.00, 'sale_date' => '2025-02-04'],
    ['shoe_id' => 5, 'quantity' => 2, 'total_price' => 140.00, 'sale_date' => '2025-02-05'],
    ['shoe_id' => 6, 'quantity' => 5, 'total_price' => 325.00, 'sale_date' => '2025-03-06'],
    ['shoe_id' => 7, 'quantity' => 1, 'total_price' => 55.00, 'sale_date' => '2025-03-07'],
    ['shoe_id' => 8, 'quantity' => 2, 'total_price' => 300.00, 'sale_date' => '2025-03-08'],
    ['shoe_id' => 9, 'quantity' => 1, 'total_price' => 130.00, 'sale_date' => '2025-03-09'],
    ['shoe_id' => 8, 'quantity' => 2, 'total_price' => 300.00, 'sale_date' => '2025-03-08'],
    ['shoe_id' => 9, 'quantity' => 1, 'total_price' => 130.00, 'sale_date' => '2025-03-09'],
    ['shoe_id' => 10, 'quantity' => 3, 'total_price' => 225.00, 'sale_date' => '2025-03-10'],
    ['shoe_id' => 3, 'quantity' => 3, 'total_price' => 240.00, 'sale_date' => '2025-04-03'],
    ['shoe_id' => 4, 'quantity' => 1, 'total_price' => 85.00, 'sale_date' => '2025-04-04'],
    ['shoe_id' => 8, 'quantity' => 2, 'total_price' => 300.00, 'sale_date' => '2025-04-08'],
    ['shoe_id' => 9, 'quantity' => 1, 'total_price' => 130.00, 'sale_date' => '2025-04-09'],
    ['shoe_id' => 10, 'quantity' => 3, 'total_price' => 225.00, 'sale_date' => '2025-04-10'],
    ['shoe_id' => 3, 'quantity' => 3, 'total_price' => 240.00, 'sale_date' => '2025-04-03'],
    ['shoe_id' => 4, 'quantity' => 1, 'total_price' => 85.00, 'sale_date' => '2025-04-04'],

]);

    }
}
