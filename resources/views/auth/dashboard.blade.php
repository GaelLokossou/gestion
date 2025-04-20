@extends('layouts.dashboard')
@section('title', 'Tableau de Bord')

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Style général */
        .container-dashboard {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            margin-left: 50px;
        }

        /* Tableau de bord : section en bas des filtres et horizontale */
        .dashboard-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: flex-start;
            margin-bottom: 30px;
        }

        .dashboard-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            /*flex: 1 1 200px;  Cela permet aux cartes de s'ajuster automatiquement */
        }

        .dashboard-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }

        .card-icon {
            font-size: 40px;
            color: #ff5722;
        }

        .card-title {
            font-size: 20px;
            font-weight: 600;
            margin-top: 10px;
        }

        .card-value {
            font-size: 30px;
            font-weight: 700;
            color: #333;
        }

        .card-footer {
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }

        /* Graphique : section en bas du tableau de bord */
        .chart-container {
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        /* Activités récentes : section en bas du graphique */
        .recent-activity {
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .recent-activity h3 {
            margin-bottom: 15px;
        }

        .activity-item {
            border-bottom: 1px solid #f1f1f1;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        /* Style pour la section du tableau de bord */
        .d-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .h5 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
        }

        .search-input {
            width: 300px;
            padding: 10px 15px;
            border-radius: 25px;
            border: 1px solid #ddd;
            font-size: 1rem;
            background-color: #f9f9f9;
            transition: background-color 0.3s ease;
        }

        .search-input:focus {
            background-color: #fff;
            border-color: #aaa;
        }

        .add-button {
            background-color: #ff4d4d;
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 1rem;
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .add-button i {
            margin-right: 10px;
            font-size: 1.1rem;
        }

        .add-button:hover {
            background-color: #e60000;
        }

        .add-button:active {
            background-color: #b30000;
        }

        /* Animation d'effet au focus sur la barre de recherche */
        .search-input:focus {
            outline: none;
            border: 1px solid #ff4d4d;
            box-shadow: 0 0 5px rgba(255, 77, 77, 0.5);
        }



    </style>
@endpush

@section('content')
    <div class="container-dashboard">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h5">Tableau de Bord</h2>

            <!-- Barre de Recherche -->
            <input type="text" class="search-input" placeholder="Rechercher dans le tableau de bord..." id="search-bar">

            <!-- Bouton Ajouter une action -->
            <a href="#" class="add-button">
                <i class="fas fa-plus"></i> Ajouter une action
            </a>
        </div>

        <!-- Tableau de bord -->
        <div class="dashboard-container">

            <!-- Card 1: Ventes Récentes -->
            <div class="dashboard-card">
                <i class="fas fa-dollar-sign card-icon"></i>
                <div class="card-title">Ventes Récentes</div>
                <div class="card-value">1245 DZD</div>
                <div class="card-footer">Aujourd'hui</div>
            </div>

            <!-- Card 2: Stock Disponible -->
            <div class="dashboard-card">
                <i class="fas fa-cogs card-icon"></i>
                <div class="card-title">Stock Disponible</div>
                <div class="card-value">325 Articles</div>
                <div class="card-footer">Mise à jour récente</div>
            </div>

            <!-- Card 3: Clients -->
            <div class="dashboard-card">
                <i class="fas fa-users card-icon"></i>
                <div class="card-title">Clients</div>
                <div class="card-value">456 Clients</div>
                <div class="card-footer">Clients totaux</div>
            </div>

            <!-- Card 4: Factures -->
            <div class="dashboard-card">
                <i class="fas fa-file-invoice-dollar card-icon"></i>
                <div class="card-title">Factures</div>
                <div class="card-value">5 en attente</div>
                <div class="card-footer">Vérifier les paiements</div>
            </div>

            <!-- Card 5: Commandes en Attente -->
            <div class="dashboard-card">
                <i class="fas fa-clock card-icon"></i>
                <div class="card-title">Commandes en Attente</div>
                <div class="card-value">7 en attente</div>
                <div class="card-footer">Vérifiez les commandes</div>
            </div>

        </div>

        <!-- Graphique des Ventes -->
        <div class="chart-container">
            <h3>Graphique des Ventes - Ce mois-ci</h3>
            <canvas id="salesChart" height="100"></canvas>
        </div>

        <!-- Activités Récentes -->
        <div class="recent-activity">
            <h3>Activités Récentes</h3>
            <div class="activity-item">
                <div>Commande #001 : 2 Articles achetés</div>
                <div>10 min</div>
            </div>
            <div class="activity-item">
                <div>Commande #002 : 1 Article acheté</div>
                <div>30 min</div>
            </div>
            <div class="activity-item">
                <div>Commande #003 : 5 Articles achetés</div>
                <div>1 heure</div>
            </div>
        </div>

    </div>

    @push('scripts')
        <!-- Chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Graphique des Ventes
            var ctx = document.getElementById('salesChart').getContext('2d');
            var salesChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
                    datasets: [{
                        label: 'Ventes',
                        data: [12, 19, 3, 5, 2, 3, 7],
                        borderColor: '#ff5722',
                        borderWidth: 2,
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: { beginAtZero: true },
                        y: { beginAtZero: true }
                    }
                }
            });

            // Fonction de filtrage
            document.getElementById('filter-period').addEventListener('change', function () {
                // Ajoutez votre logique pour filtrer les données en fonction de la période
                console.log('Filtre période:', this.value);
            });

            document.getElementById('filter-type').addEventListener('change', function () {
                // Ajoutez votre logique pour filtrer les données en fonction du type
                console.log('Filtre type:', this.value);
            });
        </script>
    @endpush
@endsection
