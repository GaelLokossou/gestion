<!DOCTYPE html>
<html lang="en">
<head>
    <title>FactuStockDashboard - @yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('assets/css/auth/styles.css') }}" />
    @stack('css')
    <script src="script.js" defer></script>
</head>
<body>
    <header class="header">
    <button class="menu-icon-btn" data-menu-icon-btn>
        <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="menu-icon"><g ><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></g></svg>
    </button>
    </header>
    <div class="container">
    <aside class="sidebar open" data-sidebar>
        <div class="top-sidebar">
        <a href="#" class="channel-logo"><img src="/logo.jpg" alt="Channel Logo"></a>
        <div class="hidden-sidebar your-channel">Votre Entreprise</div>
        <div class="hidden-sidebar channel-name">FactuStock Koffi</div>
        </div>
        <div class="middle-sidebar">
        <ul class="sidebar-list">
            <li class="sidebar-list-item">
            <a href="{{Route ('auth.dashboard')}}" class="sidebar-link">
                <svg class="sidebar-icon" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" ><g ><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"></path></g></svg>
                <div class="hidden-sidebar">Dashboard</div>
            </a>
            </li>
            <li class="sidebar-list-item">
            <a href="{{Route ('dashboard.profil')}}" class="sidebar-link">
                <!-- Icône de profil (buste) -->
                <svg viewBox="0 0 24 24" class="sidebar-icon" preserveAspectRatio="xMidYMid meet" focusable="false">
                <g>
                    <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
                </g>
                </svg>
                <div class="hidden-sidebar">Profil</div>
            </a>
            </li>
            <li class="sidebar-list-item">
            <a href="{{Route ('dashboard.clients')}}" class="sidebar-link">
            <!-- Icône groupe de personnes -->
            <svg class="sidebar-icon" viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false">
                <g>
                <path d="M16 11c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 3-1.34 3-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5C15 14.17 10.33 13 8 13zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 2.01 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                </g>
            </svg>
            <div class="hidden-sidebar">Liste des clients</div>
            </a>

            </li>
            <li class="sidebar-list-item">
            <a href="{{Route ('dashboard.fournisseurs')}}" class="sidebar-link">
            <!-- Icône représentant un entrepôt / fournisseur -->
            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="sidebar-icon">
                <g>
                <path d="M20 8V6H4v2H2v12h20V8h-2zm-2 10H6v-6h12v6zm0-10H6V6h12v2z"/>
                </g>
            </svg>
            <div class="hidden-sidebar">Liste des Fournisseurs</div>
            </a>

            </li>
            <li class="sidebar-list-item">
            <a href="{{Route ('dashboard.sells')}}" class="sidebar-link">
            <!-- Icône représentant une facture ou une liste -->
            <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="sidebar-icon">
                <g>
                <path d="M3 3v18h18V3H3zm16 16H5V5h14v14zm-3-2H8v-2h8v2zm0-4H8v-2h8v2zm0-4H8V7h8v2z"/>
                </g>
            </svg>
            <div class="hidden-sidebar">Liste des ventes</div>
            </a>

            </li>
            <li class="sidebar-list-item">
            <a href="{{Route ('dashboard.subscription')}}" class="sidebar-link">
                <!-- Icône représentant un badge ou carte d’abonnement -->
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="sidebar-icon">
                <g>
                    <path d="M20 4H4c-1.1 0-2 .9-2 2v3h20V6c0-1.1-.9-2-2-2zm0 5H2v9c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V9zm-6 7H6v-2h8v2z"/>
                </g>
                </svg>
                <div class="hidden-sidebar">Abonnement</div>
            </a>

            </li>
            <li class="sidebar-list-item">
            <a href="#" class="sidebar-link">
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="sidebar-icon"><g><path d="M0 0h24v24H0z" fill="none"></path><path d="M7.5 5.6L10 7 8.6 4.5 10 2 7.5 3.4 5 2l1.4 2.5L5 7zm12 9.8L17 14l1.4 2.5L17 19l2.5-1.4L22 19l-1.4-2.5L22 14zM22 2l-2.5 1.4L17 2l1.4 2.5L17 7l2.5-1.4L22 7l-1.4-2.5zm-7.63 5.29c-.39-.39-1.02-.39-1.41 0L1.29 18.96c-.39.39-.39 1.02 0 1.41l2.34 2.34c.39.39 1.02.39 1.41 0L16.7 11.05c.39-.39.39-1.02 0-1.41l-2.33-2.35zm-1.03 5.49l-2.12-2.12 2.44-2.44 2.12 2.12-2.44 2.44z"></path></g></svg>
                <div class="hidden-sidebar">Personnalisation</div>
            </a>
            </li>
            <li class="sidebar-list-item">
            <a href="{{Route ('dashboard.ratio-static')}}" class="sidebar-link">
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="sidebar-icon"><g><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"></path></g></svg>
                <div class="hidden-sidebar">Statistiques</div>
            </a>
            </li>
        </ul>
        </div>
        <div class="bottom-sidebar">
        <ul class="sidebar-list">
            <li class="sidebar-list-item">
            <a href="{{Route ('dashboard.setting')}}" class="sidebar-link">
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="sidebar-icon"><g><path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z"></path></g></svg>
                <div class="hidden-sidebar">Parametres</div>
            </a>
            </li>
            <li class="sidebar-list-item">
            <a href="{{Route ('dashboard.help-support')}}" class="sidebar-link">
                <!-- Icône d'aide : point d'interrogation dans un cercle -->
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="sidebar-icon">
                <g>
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10
                            10-4.48 10-10S17.52 2 12 2zm0 17
                            c-.83 0-1.5-.67-1.5-1.5S11.17 16 12 16
                            s1.5.67 1.5 1.5S12.83 19 12 19zm1-4
                            h-2v-1c0-1.1.9-2 2-2s2-.9 2-2
                            -.9-2-2-2-2 .9-2 2H8c0-2.21
                            1.79-4 4-4s4 1.79 4 4
                            -1.79 4-4 4v1z"/>
                </g>
                </svg>
                <div class="hidden-sidebar">Aide et Support</div>
            </a>
            </li>

            <li class="sidebar-list-item">
            <a href="#" class="sidebar-link">
                <svg viewBox="0 0 24 24" preserveAspectRatio="xMidYMid meet" focusable="false" class="sidebar-icon"><g><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z"></path></g></svg>
                <div class="hidden-sidebar">Envoyer des commentaires</div>
            </a>
            </li>

        </ul>
        </div>
    </aside>
    <main>
        @yield('content') <!-- Contenu spécifique à chaque page -->
    </main>
    </div>

     @stack('scripts') <!-- Définir une stack pour les scripts -->
</body>
<script>
    const menuIconButton = document.querySelector("[data-menu-icon-btn]")
    const sidebar = document.querySelector("[data-sidebar]")

    menuIconButton.addEventListener("click", () => {
    sidebar.classList.toggle("open")
    });

    const sidebarItems = document.querySelectorAll(".sidebar-list-item");

    sidebarItems.forEach(item => {
        item.addEventListener("click", () => {
            // Retire 'active' de tous les éléments
            sidebarItems.forEach(i => i.classList.remove("active"));

            // Ajoute 'active' à celui cliqué
            item.classList.add("active");
        });
    });
</script>
</html>
