@extends('layouts.dashboard')
@section('title', 'Gestion des Fournisseurs')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .card-box {
        background-color: #fff;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        margin-left: 25px;
    }

    .search-input {
        width: 300px;
        padding: 8px;
        font-size: 14px;
        border: 1px solid #ddd;
        border-radius: 20px;
        margin-bottom: 20px;
    }

    .search-input::placeholder {
        color: #aaa;
    }

    .add-button {
        background-color: #FF0000;
        color: white;
        border: none;
        padding: 8px 18px;
        border-radius: 20px;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 20px;
    }

    .add-button:hover {
        background-color: #cc0000;
    }

    .fournisseur-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
    }

    .fournisseur-table th, .fournisseur-table td {
        padding: 12px 16px;
        text-align: left;
    }

    .fournisseur-table th {
        background-color: #f9f9f9;
        color: #555;
        font-weight: 600;
        border-bottom: 2px solid #eee;
    }

    .fournisseur-table tr {
        border-bottom: 1px solid #f1f1f1;
    }

    .fournisseur-table tr:hover {
        background-color: #f9f9f9;
    }

    .action-button {
        background-color: #e5e5e5;
        border: none;
        padding: 6px 12px;
        font-size: 13px;
        border-radius: 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .action-button:hover {
        background-color: #d0d0d0;
    }

    .pagination {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin-top: 20px;
    }

    .pagination .page-item {
        margin: 0 5px;
    }

    .pagination .page-link {
        display: inline-block;
        padding: 8px 14px;
        border-radius: 50px;
        font-size: 14px;
        background-color: #f5f5f5;
        color: #555;
        text-decoration: none;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .pagination .page-link:hover {
        background-color: #ff0000;
        color: white;
    }

    .pagination .page-item.active .page-link {
        background-color: #ff0000;
        color: white;
    }

    .pagination .page-item.disabled .page-link {
        background-color: #e0e0e0;
        color: #b0b0b0;
        pointer-events: none;
    }
</style>
@endpush

@section('content')
<div class="card-box">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h5">Liste des Fournisseurs</h2>

        <input type="text" class="search-input" placeholder="Rechercher un fournisseur..." id="search-fournisseur">

        <a href="#" class="add-button">
            <i class="fas fa-user-plus"></i> Nouveau Fournisseur
        </a>
    </div>

    <table class="fournisseur-table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Entreprise</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="fournisseur-list">
            <tr>
                <td>Abdou Karim</td>
                <td>Karim Matériaux</td>
                <td>karim@example.com</td>
                <td>+228 90 12 34 56</td>
                <td>Lomé, Togo</td>
                <td>
                    <button class="action-button" title="Modifier"><i class="fas fa-edit"></i></button>
                    <button class="action-button" title="Supprimer"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            <tr>
                <td>Fatima Diallo</td>
                <td>Diallo Construction</td>
                <td>fatima@example.com</td>
                <td>+228 98 76 54 32</td>
                <td>Sokodé, Togo</td>
                <td>
                    <button class="action-button" title="Modifier"><i class="fas fa-edit"></i></button>
                    <button class="action-button" title="Supprimer"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="#">Précédent</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
        </ul>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Recherche dynamique dans la table fournisseurs
    document.getElementById('search-fournisseur').addEventListener('input', function () {
        let filter = this.value.toUpperCase();
        let rows = document.getElementById('fournisseur-list').getElementsByTagName('tr');

        for (let i = 0; i < rows.length; i++) {
            let cells = rows[i].getElementsByTagName('td');
            let nom = cells[0].textContent.toUpperCase();
            let entreprise = cells[1].textContent.toUpperCase();
            let email = cells[2].textContent.toUpperCase();

            if (nom.includes(filter) || entreprise.includes(filter) || email.includes(filter)) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    });
</script>
@endpush
