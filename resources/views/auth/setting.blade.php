@extends('layouts.dashboard')
@section('title', 'Paramètres')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .settings-card {
        background-color: #fff;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 30px;
        margin-left: 25px;
    }

    .settings-section {
        margin-bottom: 30px;
    }

    .settings-section h5 {
        font-size: 18px;
        margin-bottom: 15px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
        font-size: 14px;
    }

    .form-group input, .form-group select {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 14px;
    }

    .form-group input[type="checkbox"] {
        width: 700px;
    }

    .form-button {
        background-color: #FF0000;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        border: none;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    .form-button:hover {
        background-color: #cc0000;
    }
</style>
@endpush

@section('content')
<div class="settings-card">
    <h2 class="h5">Paramètres du Système</h2>

    <!-- Paramètres de Facturation -->
    <div class="settings-section">
        <h5>Options de Facturation</h5>
        <form action="#" method="POST">
            @csrf

            <div class="form-group">
                <label for="invoice-template">Modèle de Facture</label>
                <select id="invoice-template" name="invoice_template">
                    <option value="template1">Modèle 1</option>
                    <option value="template2">Modèle 2</option>
                    <option value="template3">Modèle 3</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tax-rate">Taux de TVA (%)</label>
                <input type="number" id="tax-rate" name="tax_rate" placeholder="Exemple : 20" required>
            </div>

            <div class="form-group">
                <label for="currency">Monnaie utilisée</label>
                <select id="currency" name="currency">
                    <option value="DZD">DZD (Dinar Algérien)</option>
                    <option value="USD">USD (Dollar)</option>
                    <option value="EUR">EUR (Euro)</option>
                </select>
            </div>

            <button type="submit" class="form-button">Enregistrer Paramètres</button>
        </form>
    </div>

    <!-- Paramètres des Utilisateurs -->
    <div class="settings-section">
        <h5>Gestion des Utilisateurs</h5>
        <form action="#" method="POST">
            @csrf

            <div class="form-group">
                <label for="role-select">Rôle de l'utilisateur</label>
                <select id="role-select" name="user_role">
                    <option value="admin">Administrateur</option>
                    <option value="manager">Manager</option>
                    <option value="editor">Éditeur</option>
                    <option value="viewer">Visiteur</option>
                </select>
            </div>

            <div class="form-group">
                <label for="permissions">Permissions</label>
                <div>
                    <input type="checkbox" id="can-create" name="permissions[]" value="create">
                    <label for="can-create">Créer des articles</label>
                </div>
                <div>
                    <input type="checkbox" id="can-edit" name="permissions[]" value="edit">
                    <label for="can-edit">Modifier des articles</label>
                </div>
                <div>
                    <input type="checkbox" id="can-delete" name="permissions[]" value="delete">
                    <label for="can-delete">Supprimer des articles</label>
                </div>
                <div>
                    <input type="checkbox" id="can-view" name="permissions[]" value="view">
                    <label for="can-view">Voir les articles</label>
                </div>
            </div>

            <button type="submit" class="form-button">Mettre à Jour les Rôles</button>
        </form>
    </div>
</div>
@endsection
