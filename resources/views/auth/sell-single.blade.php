@extends('layouts.dashboard')
@section('title', 'Détail de la Vente')

@push('css')
<style>
  .vente-detail-container {
    padding: 30px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    margin-left: 25px;
    align-items: center;
    gap: 20px;
  }

  .vente-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
  }

  .vente-header h2 {
    font-size: 20px;
    margin: 0;
  }

  .vente-header .small-button {
    background-color: #cc0000;
    color: #fff;
    padding: 6px 12px;
    font-size: 14px;
    border-radius: 4px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
  }

  .vente-info {
    margin-bottom: 20px;
  }

  .vente-info p {
    margin: 6px 0;
    font-size: 15px;
  }

  .produits-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  .produits-table th, .produits-table td {
    border: 1px solid #ddd;
    padding: 10px;
    font-size: 14px;
  }

  .produits-table th {
    background-color: #f5f5f5;
    font-weight: bold;
  }

  .total-section {
    margin-top: 20px;
    text-align: right;
    font-size: 16px;
    font-weight: bold;
  }
</style>
@endpush

@section('content')

<div class="vente-detail-container">
  <div class="vente-header">
    <h2>Détail de la Vente #VNT-000145</h2>
    <a href="#" class="small-button">
      <i class="fas fa-print"></i> Imprimer
    </a>
  </div>

  <div class="vente-info">
    <p><strong>Date :</strong> 20 Avril 2025</p>
    <p><strong>Client :</strong> Yao Kossi</p>
    <p><strong>Contact :</strong> +228 90 00 00 00</p>
    <p><strong>Mode de Paiement :</strong> Espèces</p>
  </div>

  <table class="produits-table">
    <thead>
      <tr>
        <th>Produit</th>
        <th>Quantité</th>
        <th>Prix Unitaire</th>
        <th>Sous-total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Sacs de ciment</td>
        <td>10</td>
        <td>3 500 FCFA</td>
        <td>35 000 FCFA</td>
      </tr>
      <tr>
        <td>Fer à béton</td>
        <td>5</td>
        <td>8 000 FCFA</td>
        <td>40 000 FCFA</td>
      </tr>
    </tbody>
  </table>

  <div class="total-section">
    Total : 75 000 FCFA
  </div>
</div>

@endsection
