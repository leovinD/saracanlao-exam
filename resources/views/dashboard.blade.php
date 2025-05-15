@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-5 text-center fw-bold">Saracanlao - Shoe Inventory Management</h1>

    {{-- Shoe Data Cards --}}
    <div class="row g-4 mb-5">
        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Total Brands</h5>
                    <p class="display-6 fw-bold text-primary">{{ $totalBrands }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Total Shoes</h5>
                    <p class="display-6 fw-bold text-success">{{ $totalShoes }}</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Total Sales</h5>
                    <p class="display-6 fw-bold text-info">{{ $totalSales }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Charts --}}
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-transparent fw-bold">Shoe Sales Per Month</div>
                <div class="card-body">
                    <canvas id="salesPerMonthChart" width="auto" height="220"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-4">Stock Quantity Per Brand</h5>
                    <div style="position: relative; height:300px; width:100%;">
                        <canvas id="stockPerBrandChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>

{{-- Charts JS --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Shoe Sales Per Month Line Chart
    const salesPerMonthCtx = document.getElementById('salesPerMonthChart').getContext('2d');
    new Chart(salesPerMonthCtx, {
        type: 'line',
        data: {
            labels: {!! json_encode($months) !!},
            datasets: [
                {
                    label: 'Shoes Sold',
                    data: {!! json_encode($salesPerMonthData) !!},  // Use salesPerMonthData here
                    borderColor: 'rgba(54, 162, 235, 1)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    fill: false,
                    tension: 0.3,
                    pointRadius: 5,
                    pointBackgroundColor: 'rgba(54, 162, 235, 1)'
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            },
            plugins: {
                legend: { position: 'top' },
                tooltip: { mode: 'index', intersect: false }
            }
        }
    });

    // Stock Quantity Per Brand Doughnut Chart
    const stockPerBrandCtx = document.getElementById('stockPerBrandChart').getContext('2d');
    new Chart(stockPerBrandCtx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($stockPerBrand->pluck('brand_name')) !!},
            datasets: [{
                data: {!! json_encode($stockPerBrand->pluck('total_stock')) !!},
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)',
                    'rgba(153, 102, 255, 0.8)',
                    'rgba(255, 159, 64, 0.8)',
                    'rgba(199, 199, 199, 0.8)',
                    'rgba(83, 102, 255, 0.8)',
                    'rgba(255, 102, 153, 0.8)',
                    'rgba(60, 179, 113, 0.8)'
                ],
                borderColor: 'rgba(255, 255, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom' },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let label = context.label || '';
                            if (context.parsed !== null) {
                                label += ': ' + context.parsed;
                            }
                            return label;
                        }
                    }
                }
            }
        }
    });
</script>

@endsection
