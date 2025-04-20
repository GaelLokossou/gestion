@extends('layouts.dashboard')
@section('title', 'Aide et Support')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .help-card {
        background-color: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
        margin-bottom: 20px;
    }

    .faq-item {
        padding: 10px 0;
        border-bottom: 1px solid #f1f1f1;
    }

    .faq-item:last-child {
        border-bottom: none;
    }

    .faq-question {
        font-weight: 600;
        cursor: pointer;
        color: #333;
    }

    .faq-answer {
        padding-left: 20px;
        color: #666;
        display: none;
    }

    .faq-question:hover {
        color: #ff0000;
    }

    .contact-form input, .contact-form textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    .contact-form button {
        background-color: #ff0000;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .contact-form button:hover {
        background-color: #cc0000;
    }

    .support-info {
        background-color: #f9f9f9;
        padding: 15px;
        border-radius: 8px;
        margin-top: 20px;
    }

    .support-info h5 {
        font-weight: 600;
    }
</style>
@endpush

@section('content')
<div class="help-card">
    <h2 class="h5">Aide et Support</h2>

    <!-- Section FAQ -->
    <div class="faq-section">
        <h4>Questions Fréquemment Posées (FAQ)</h4>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(1)">Comment puis-je créer une transaction ?</div>
            <div class="faq-answer" id="faq-answer-1">
                Pour créer une transaction, allez dans la section "Transactions" et cliquez sur "Ajouter une transaction". Remplissez les informations nécessaires et cliquez sur "Enregistrer".
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(2)">Comment consulter l'historique des transactions ?</div>
            <div class="faq-answer" id="faq-answer-2">
                Vous pouvez consulter l'historique des transactions dans la section "Historique des Transactions". Chaque transaction est listée avec son détail.
            </div>
        </div>

        <div class="faq-item">
            <div class="faq-question" onclick="toggleAnswer(3)">Quel est le mode de paiement accepté ?</div>
            <div class="faq-answer" id="faq-answer-3">
                Nous acceptons plusieurs modes de paiement, y compris les cartes bancaires, les paiements en espèces et les virements bancaires.
            </div>
        </div>
    </div>

    <!-- Formulaire de Contact -->
    <div class="contact-section mt-5">
        <h4>Demander de l'aide</h4>
        <p>Si vous ne trouvez pas la réponse à votre question, n'hésitez pas à nous contacter via le formulaire ci-dessous.</p>

        <form class="contact-form" action="#" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Votre nom" required>
            <input type="email" name="email" placeholder="Votre email" required>
            <textarea name="message" placeholder="Décrivez votre problème ou question" rows="5" required></textarea>
            <button type="submit">Envoyer le message</button>
        </form>
    </div>

    <!-- Informations de Support -->
    <div class="support-info">
        <h5>Informations de Support</h5>
        <p>Si vous avez besoin d'aide urgente, vous pouvez nous contacter via :</p>
        <ul>
            <li><strong>Email :</strong> support@example.com</li>
            <li><strong>Téléphone :</strong> +123 456 7890</li>
            <li><strong>Heures d'ouverture :</strong> Lundi - Vendredi, 9h00 - 18h00</li>
        </ul>
    </div>
</div>

@endsection

@push('scripts')
<script>
    // Fonction pour afficher/masquer les réponses des FAQ
    function toggleAnswer(faqId) {
        const answerElement = document.getElementById(`faq-answer-${faqId}`);
        if (answerElement.style.display === "none" || answerElement.style.display === "") {
            answerElement.style.display = "block";
        } else {
            answerElement.style.display = "none";
        }
    }
</script>
@endpush
