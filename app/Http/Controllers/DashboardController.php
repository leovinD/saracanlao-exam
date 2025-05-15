<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Shoe;
use App\Models\Sale;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBrands = Brand::count();
        $totalShoes = Shoe::sum('stock');  // Assuming 'stock' column holds shoe quantity
        $totalSales = Sale::sum('quantity');

        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        // Aggregate sales quantity grouped by month (1 to 12) based on sale_date
        $salesPerMonth = Sale::selectRaw('MONTH(sale_date) as month, SUM(quantity) as total')
            ->groupBy('month')
            ->pluck('total', 'month');

        // Prepare an array of 12 elements (one for each month), fill with 0 if no sales
        $salesPerMonthData = [];
        for ($i = 1; $i <= 12; $i++) {
            $salesPerMonthData[] = $salesPerMonth[$i] ?? 0;
        }

        // Get brand names and total shoe stock per brand
        $stockPerBrand = Brand::select('name as brand_name')
            ->withSum('shoes as total_stock', 'stock')
            ->get();

        $shoesList = Shoe::with('brand', 'category')->get();

        return view('dashboard', compact(
            'totalBrands',
            'totalShoes',
            'totalSales',
            'months',
            'salesPerMonthData',
            'stockPerBrand',
            'shoesList'
        ));
    }
}
