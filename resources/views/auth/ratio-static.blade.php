@extends('layouts.dashboard')
@section('title', 'Rapports & Statistiques')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js" />
<style>
    .report-card {
        background-color: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
        margin-left: 50px;
    }

    .stat-box {
        background: #f8f8f8;
        border-radius: 16px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 0 8px rgba(0,0,0,0.05);
        transition: 0.3s;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: flex-start;
        margin-bottom: 30px;
    }

    .stat-box:hover {
        transform: translateY(-3px);
    }

    .stat-value {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .stat-label {
        font-size: 14px;
        color: #888;
    }

    .filter-section {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
        flex-wrap: wrap;
        align-items: center;
    }

    .filter-section select, .filter-section input {
        padding: 8px 14px;
        border-radius: 20px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    canvas {
        max-width: 100%;
    }
</style>
@endpush

@section('content')
<div class="report-card">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h5">Rapports & Statistiques</h2>
    </div>

    <!-- Filtres -->
    <div class="filter-section">
        <select>
            <option>7 derniers jours</option>
            <option>30 derniers jours</option>
            <option>Cette année</option>
            <option>Personnalisé</option>
        </select>
        <input type="date">
        <input type="date">
    </div>

    <!-- Statistiques principales -->
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="stat-box">
                <div class="stat-value">4 200</div>
                <div class="stat-label">Vues</div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="stat-box">
                <div class="stat-value">18</div>
                <div class="stat-label">Nouveaux clients</div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="stat-box">
                <div class="stat-value">320 000 DZD</div>
                <div class="stat-label">Revenus</div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="stat-box">
                <div class="stat-value">92%</div>
                <div class="stat-label">Satisfaction client</div>
            </div>
        </div>
    </div>

    <!-- Graphiques -->
    <div class="mt-4">
        <h6 class="mb-3">Évolution des ventes</h6>
        <canvas id="salesChart" height="120"></canvas>
    </div>

    <div class="mt-5">
        <h6 class="mb-3">Sources de trafic</h6>
        <canvas id="trafficChart" height="120"></canvas>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Graphique des ventes
    const ctx = document.getElementById('salesChart');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
            datasets: [{
                label: 'Ventes',
                data: [12000, 15000, 10000, 18000, 22000, 25000, 20000],
                borderColor: '#FF0000',
                backgroundColor: 'rgba(255,0,0,0.1)',
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Graphique de trafic
    const ctx2 = document.getElementById('trafficChart');
    new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['Recherche Google', 'Facebook', 'Direct', 'Références externes'],
            datasets: [{
                label: 'Sources',
                data: [40, 25, 20, 15],
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#66bb6a'],
                hoverOffset: 8
            }]
        }
    });
</script>
@endpush
