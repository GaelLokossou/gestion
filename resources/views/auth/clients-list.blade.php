@extends('layouts.dashboard')
@section('title', 'Liste des Clients')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .youtube-card {
        background-color: #fff;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        margin-left: 25px;
    }

    .youtube-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
    }

    .youtube-table th, .youtube-table td {
        padding: 12px 16px;
        text-align: left;
    }

    .youtube-table th {
        background-color: #f9f9f9;
        color: #555;
        font-weight: 600;
        border-bottom: 2px solid #eee;
    }

    .youtube-table tr {
        border-bottom: 1px solid #f1f1f1;
    }

    .youtube-table tr:hover {
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

    /* Pagination */
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

    .pagination .page-link:first-child {
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;
    }

    .pagination .page-link:last-child {
        border-top-right-radius: 50px;
        border-bottom-right-radius: 50px;
    }
</style>
@endpush

@section('content')
<div class="youtube-card">
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <h2 class="h5">Liste des Clients</h2>

        <!-- Barre de Recherche -->
        <input type="text" class="search-input" placeholder="Rechercher un client..." id="search-bar">

        <a href="#" class="add-button">
            <i class="fas fa-user-plus"></i> Nouveau Client
        </a>
    </div>

    <table class="youtube-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Entreprise</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="client-list">
            <tr>
                <td>1</td>
                <td>Jean Dupont</td>
                <td>jean.dupont@example.com</td>
                <td>+123456789</td>
                <td>Dupont SARL</td>
                <td>
                    <a href="#" class="action-button">
                        <i class="fas fa-pen"></i>
                    </a>
                    <button class="action-button">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Alice Martin</td>
                <td>alice.martin@example.com</td>
                <td>+987654321</td>
                <td>Martin & Co</td>
                <td>
                    <a href="#" class="action-button">
                        <i class="fas fa-pen"></i>
                    </a>
                    <button class="action-button">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
            <!-- Ajoute d'autres clients statiques ici -->
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#">Précédent</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">Suivant</a>
            </li>
        </ul>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // Fonction de recherche
    document.getElementById('search-bar').addEventListener('input', function() {
        let filter = this.value.toUpperCase();
        let rows = document.getElementById('client-list').getElementsByTagName('tr');

        for (let i = 0; i < rows.length; i++) {
            let cells = rows[i].getElementsByTagName('td');
            let name = cells[1].textContent.toUpperCase();
            let email = cells[2].textContent.toUpperCase();
            let phone = cells[3].textContent.toUpperCase();

            if (name.includes(filter) || email.includes(filter) || phone.includes(filter)) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    });
</script>
@endpush
