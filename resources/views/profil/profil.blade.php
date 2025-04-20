@extends('layouts.dashboard')
@section('title', 'Profil')

@push('css')
<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-/1rptqrX5q..." crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Bootstrap CSS -->
<style>
    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1rem;
        border-bottom: 2px solid #e5e5e5;
        padding-bottom: 0.5rem;
        color: #222;
    }

    .form-section {
        background: #fff;
        border-radius: 12px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }

    label.form-label {
        font-weight: 500;
        margin-top: 1rem;
    }

    input, textarea {
        width: 100%;
        padding: 0.6rem 1rem;
        border: 1px solid #ccc;
        border-radius: 8px;
        margin-top: 0.5rem;
    }

    .standard-button {
        background-color: #cc0000;
        color: #fff;
        border: none;
        padding: 0.8rem 2rem;
        font-weight: bold;
        border-radius: 25px;
        margin-top: 1.5rem;
        transition: background-color 0.3s ease;
    }

    .standard-button:hover {
        background-color: #b30000;
    }

    .input-group {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .input-group input {
        flex-grow: 1;
    }

    .input-group-text {
        background-color: #f0f0f0;
        border-radius: 8px;
        padding: 0.6rem 1rem;
    }

    .text-muted {
        font-size: 0.85rem;
        color: #666;
    }

.youtube-button {
        background-color: #FF0000;
        color: white;
        border: none;
        padding: 8px 18px;
        margin-left: 35px;
        font-size: 14px;
        font-weight: 500;
        border-radius: 20px;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .youtube-button i {
        font-size: 14px;
    }

    .youtube-button:hover {
        background-color: #CC0000;
        transform: scale(1.02);
    }

</style>
@endpush

@section('content')

<form method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Identité visuelle -->
    <div class="form-section">
        <h2 class="section-title">Identité visuelle</h2>
        <label for="avatar" class="form-label">Photo de profil</label>
        <input type="file" name="avatar" accept="image/*">
        <p class="text-muted">Format recommandé : 800x800 px (JPG, PNG)</p>
    </div>

    <!-- Informations publiques -->
    <div class="form-section">
        <h2 class="section-title">Informations publiques</h2>
        <label class="form-label">Nom de l'entreprise</label>
        <input type="text" name="name">

        <label class="form-label">Description</label>
        <textarea name="description" rows="4" maxlength="5000"></textarea>
        <p class="text-muted">Utilisez des mots-clés pertinents pour améliorer la découvrabilité</p>
    </div>

    <!-- Informations complémentaires -->
    <div class="form-section">
        <h2 class="section-title">Informations complémentaires</h2>
        <label class="form-label">Email de contact</label>
        <input type="email" name="email">

        <label class="form-label">Téléphone de contact</label>
        <input type="tel" name="contact_phone">

        <label class="form-label">Site web</label>
        <input type="url" name="website">

        <label class="form-label">Localisation</label>
        <input type="text" name="location">

        <label class="form-label">Informations complémentaires</label>
        <textarea name="additional_info" rows="3"></textarea>
    </div>

    <!-- Informations fiscales -->
    <div class="form-section">
        <h2 class="section-title">Informations Fiscales et Juridiques</h2>
        <label class="form-label">ID Fiscale</label>
        <input type="text" name="tax_id">

        <label class="form-label">Numéro AI</label>
        <input type="text" name="ai_number">

        <label class="form-label">NIS</label>
        <input type="text" name="nis">

        <label class="form-label">RC</label>
        <input type="text" name="rc">

        <label class="form-label">Capitale Sociale</label>
        <div class="input-group">
            <input type="number" name="capital">
            <span class="input-group-text">DZD</span>
        </div>

        <label class="form-label">Domaine d'Activité</label>
        <input type="text" name="activity_domain">

        <label class="form-label">RIB</label>
        <textarea name="rib" rows="2" maxlength="24" class="font-monospace" placeholder="007 99999 000000000000 99"></textarea>

        <label class="form-label">Date d'immatriculation</label>
        <input type="date" name="registration_date">
    </div>

    <div class="text-center">
        <button type="submit" class="youtube-button">
            <i class="fas fa-save"></i>
            Sauvegarder
        </button>
    </div>


</form>

@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('r/js/jquery.themepunch.tools.min.js') }}"></script>
@endpush
