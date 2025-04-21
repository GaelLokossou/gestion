@extends('layouts.dashboard')
@section('title', 'Abonnement')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .subscription-card {
        background-color: #fff;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .subscription-details {
        background-color: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
        margin-bottom: 20px;
        color: #333;
    }

    .subscription-details .section-title {
        font-size: 1.5em;
        font-weight: 600;
        margin-bottom: 20px;
        color: #007bff;
    }

    .subscription-status {
        display: flex;
        flex-direction: column;
    }

    .subscription-status .status-item {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #f1f1f1;
    }

    .subscription-status .status-item:last-child {
        border-bottom: none;
    }

    .subscription-status .status-label {
        font-size: 14px;
        font-weight: 500;
        color: #555;
    }

    .subscription-status .status-value {
        font-size: 14px;
        font-weight: 600;
        color: #333;
    }

    .subscription-status .status {
        padding: 10px 20px;
        font-size: 14px;
        border: none;
        height: 40px;
        width: 100px;
        text-align: center;
        border-radius: 30px;
        font-weight: 700;
        text-transform: capitalize;
        background: linear-gradient(135deg, #28a745, #34c759);
        color: #fff;
        display: inline-block;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .subscription-status .status:hover {
        background: linear-gradient(135deg, #218838, #32a852);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        transform: scale(1.05);
    }

    .subscription-status .status.expired {
        background: linear-gradient(135deg, #ff0000, #ff4d4d);
    }

    .subscription-status .status.expired:hover {
        background: linear-gradient(135deg, #e60000, #ff1a1a);
    }


    .subscription-status .status.active {
        background-color: #28a745;
    }

    .subscription-status .status.expired {
        background-color: #ff0000;
    }


    .renew-button {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    .renew-button:hover {
        background-color: #218838;
    }

    .subscription-info {
        margin-top: 20px;
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 12px;
        border: 1px solid #ddd;
    }

    .subscription-info h5 {
        font-weight: 600;
    }

    .subscription-info p {
        color: #666;
    }

    .subscription-history {
        margin-top: 30px;
    }

    .subscription-history table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
    }

    .subscription-history th, .subscription-history td {
        padding: 12px 16px;
        text-align: left;
    }

    .subscription-history th {
        background-color: #f9f9f9;
        color: #555;
        font-weight: 600;
        border-bottom: 2px solid #eee;
    }

    .subscription-history tr {
        border-bottom: 1px solid #f1f1f1;
    }

    .subscription-history tr:hover {
        background-color: #f9f9f9;
    }
</style>
@endpush

@section('content')
<div class="subscription-card">
    <h2 class="h5">Mon Abonnement</h2>

    <div class="subscription-details">
        <h3 class="section-title">Détails de l'Abonnement</h3>
        <div class="subscription-status">
            <div class="status-item">
                <p class="status-label">Statut de l'abonnement : </p>
                <span class="status active">Actif</span>
            </div>
            <div class="status-item">
                <p class="status-label">Date de début : </p>
                <span class="status-value">01/01/2025</span>
            </div>
            <div class="status-item">
                <p class="status-label">Date de fin : </p>
                <span class="status-value">01/01/2026</span>
            </div>
        </div>
    </div>


    <!-- Bouton de renouvellement -->
    <form action="#" method="POST">
        @csrf
        <button type="submit" class="renew-button">
            Renouveler mon abonnement
        </button>
    </form>

    <!-- Informations supplémentaires sur l'abonnement -->
    <div class="subscription-info">
        <h5>Informations sur l'abonnement</h5>
        <p>Votre abonnement vous donne accès à toutes les fonctionnalités premium du système pendant la période indiquée ci-dessus. N'oubliez pas de renouveler avant la date d'expiration pour éviter toute interruption de service.</p>
    </div>

    <!-- Historique des abonnements -->
    <div class="subscription-history">
        <h5>Historique des Abonnements</h5>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Montant</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>01/01/2025</td>
                    <td>01/01/2026</td>
                    <td>1000 DZD</td>
                    <td><span class="status">Actif</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>01/01/2024</td>
                    <td>01/01/2025</td>
                    <td>1000 DZD</td>
                    <td><span class="status">Expiré</span></td>
                </tr>
                <!-- Ajoute d'autres abonnements historiques ici -->
            </tbody>
        </table>
    </div>
</div>
@endsection
