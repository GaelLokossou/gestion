@extends('layouts.dashboard')
@section('title', 'Ajouter / Modifier un Produit')

@push('css')
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-/1rptqrX5q..." crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

    .form-container {
      width: 100%;
      max-width: 100%;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      align-items: center;
    }

    .form-title {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
    }

    .form-title h2 {
      font-size: 22px;
      font-weight: bold;
      color: #333;
    }

    .form-title a {
      color: #555;
      text-decoration: none;
      font-size: 14px;
    }

    label {
      display: block;
      font-weight: 500;
      margin-bottom: 6px;
      color: #333;
    }

    input[type="text"],
    input[type="number"],
    input[type="file"],
    textarea {
      width: 100%;
      padding: 10px 15px;
      border: 1px solid #ccc;
      border-radius: 10px;
      margin-bottom: 20px;
      font-size: 16px;
    }

    input[type="file"] {
      padding: 8px;
    }

    textarea {
      resize: vertical;
    }

    .submit-button {
      background-color: #ff0000;
      color: white;
      border: none;
      padding: 12px 25px;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 4px;
    }

    .submit-button i {
      margin-right: 8px;
    }

    .submit-button:hover {
      background-color: #cc0000;
    }
  </style>
@endpush

@section('content')
<div class="form-container">
    <div class="form-title">
      <h2>Ajouter / Modifier un Produit</h2>
      <a href="#"><i class="fas fa-arrow-left"></i> Retour</a>
    </div>

    <form>
      <label for="nom">Nom du produit</label>
      <input type="text" id="nom" placeholder="Ex: Sable, Ciment...">

      <label for="categorie">Catégorie</label>
      <input type="text" id="categorie" placeholder="Matériaux, Location...">

      <label for="prix">Prix unitaire</label>
      <input type="number" id="prix" placeholder="Ex: 15000">

      <label for="stock">Quantité en stock</label>
      <input type="number" id="stock" placeholder="Ex: 100">

      <label for="description">Description</label>
      <textarea id="description" rows="4" placeholder="Décrivez le produit..."></textarea>

      <label for="image">Image du produit</label>
      <input type="file" id="image" accept="image/*">

      <button type="submit" class="submit-button">
        <i class="fas fa-save"></i> Enregistrer
      </button>
    </form>
  </div>
@endsection
