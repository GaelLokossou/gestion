<!doctype html>
<html class="no-js" lang="fr">

    <head>
        <title>FactuStock - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" >
        <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}" >
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}" >
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}" >
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- slider revolution CSS files -->
        <link rel="stylesheet" type="text/css" href="{{ asset('r/css/settings.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('r/css/layers.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('r/css/navigation.css') }}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
        @livewireStyles
        @stack('css')
        <link rel="stylesheet" href="{{ asset('css/real-estate.css') }}" />
        <style>
            .text-shadow{
                text-shadow: 0.5px 0.5px 20px black;
            }
            .separator {
                width: 20px; /* Ajustez la largeur selon vos besoins */
                height: 1px; /* Ajustez la hauteur selon vos besoins */
                background-color: #ccc; /* Ajustez la couleur selon vos besoins */
                margin: 0 auto; /* Pour centrer le séparateur */
            }
        </style>

    </head>

    <body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#242E45">
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light bg-white border-bottom border-color-extra-medium-gray header-reverse" data-header-hover="light">
                <div class="container-fluid">
                    <div class="col-auto">
                        <a class="navbar-brand" href="#">
                            <img src="images/demo-real-estate-logo-black.png" data-at2x="images/demo-real-estate-logo-black@2x.png" alt="" class="default-logo">
                            <img src="images/demo-real-estate-logo-black.png" data-at2x="images/demo-real-estate-logo-black@2x.png" alt="" class="alt-logo">
                            <img src="images/demo-real-estate-logo-black.png" data-at2x="images/demo-real-estate-logo-black@2x.png" alt="" class="mobile-logo">
                        </a>
                    </div>
                    <div class="col-auto menu-order left-nav ps-60px lg-ps-20px">

                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item"><a href="#" class="nav-link">Accueil</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">A propos</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">S'inscrire</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-xl-3 col-lg-2 text-end md-pe-0">
                        <div class="col-auto ms-auto ps-lg-0 d-none d-sm-flex">
                            <div class="d-none d-xl-flex me-25px">
                                <div class="d-flex align-items-center widget-text fw-600 alt-font"><a href="tel:+22896986875" class="d-inline-block"><span class="d-inline-block align-middle me-10px bg-base-color-transparent h-45px w-45px text-center rounded-circle fs-16 lh-46 text-base-color"><i class="feather icon-feather-phone-outgoing"></i></span><span class="d-none d-xxl-inline-block">+22896986875</span></a></div>
                            </div>
                            <div class="header-icon">
                                <div class="header-button">
                                    <a href="#" class="btn btn-base-color btn-small btn-round-edge btn-hover-animation-switch">
                                        <span>
                                            <span class="btn-text">Se connecter</span>
                                            <span class="btn-icon"><i class="feather icon-feather-arrow-right icon-very-small"></i></span>
                                            <span class="btn-icon"><i class="feather icon-feather-arrow-right icon-very-small"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="separator"></div>
                            <div class="header-icon">
                                <div class="header-button">
                                    <a href="#" class="btn btn-base-color btn-small btn-round-edge btn-hover-animation-switch">
                                        <span>
                                            <span class="btn-text">S'inscrire</span>
                                            <span class="btn-icon"><i class="feather icon-feather-arrow-right icon-very-small"></i></span>
                                            <span class="btn-icon"><i class="feather icon-feather-arrow-right icon-very-small"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-auto ms-auto ps-lg-0 d-none d-sm-flex">
                            <div class="header-icon">
                                <div class="header-search-icon icon">
                                    <a href="#" class=""   data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<span class=tooltip-title>Connexion (Administrateur)</span>"><span>
                                        <span class="" ><i class="fa fa-sign-in"></i></span>
                                    </span></a>

                                </div>

                            </div>
                        </div> --}}
                    </div>

                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
        <div>
            @yield('content') <!-- Contenu spécifique à chaque page -->
        </div>

        <!-- start footer -->
        <footer class="footer-light bg-gradient-very-light-gray pb-0">
            <div class="container position-relative pt-3 pb-3 overlap-section md-mb-15px">
                <div class="position-absolute left-0px top-0px background-no-repeat background-size-100 h-100 w-100 animation-float" style="background-image: url('https://via.placeholder.com/1190x262')"></div>
            </div>
            <div class="container">
                <div class="row justify-content-center mt-5 mb-4 sm-mb-35px">
                    <!-- start footer column -->
                    <div class="col-lg-3 last-paragraph-no-margin md-mb-35px text-center text-lg-start">
                        <a href="#" class="footer-logo mb-10px d-inline-block"><img src="images/demo-real-estate-logo-black.png" data-at2x="images/demo-real-estate-logo-black@2x.png" alt=""></a>
                        <p class="w-85 lg-w-100">Lorem ipsum text adipiscing eiusmod elit incididunt enim.</p>
                        <div class="elements-social social-icon-style-02 mt-15px">
                            <ul class="small-icon dark">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3 sm-mb-25px">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Entreprise</span>
                        <ul>
                            <li><a href="#">A propos de nous</a></li>
                            <li><a href="#">Nos agents</a></li>
                            <li><a href="#">Dernièrs blog</a></li>
                            <li><a href="#">Contact </a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3 sm-mb-25px">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Ressources</span>
                        <ul>
                            <li><a href="#">Louez une maison</a></li>
                            <li><a href="#">Vendre une maison</a></li>
                            <li><a href="#">Prêt a faire le pas</a></li>
                            <li><a href="#">Budgets</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Client</span>
                        <ul>
                            <li><a href="#">Support client</a></li>
                            <li><a href="#">Centre d'aide</a></li>
                            <li><a href="#">Status</a></li>
                            <li><a href="#">Retour</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-10px">Faire un coucou</span>
                        <span class="d-block lh-normal">Besoin de support?</span>
                        <a href="mailto:info@domain.com" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block mb-20px">info@domain.com</a>
                        <span class="d-block lh-normal">Assurance client</span>
                        <a href="tel:12345678910" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block">+1 234 567 8910</a>
                    </div>
                    <!-- end footer column -->
                </div>
                <!-- start footer content -->
                <div class="border-top border-color-extra-medium-gray pt-35px pb-35px text-center">
                    <span class="fs-13 w-60 lg-w-70 md-w-90 sm-w-100 d-block mx-auto lh-22">This site is protected by reCAPTCHA and the Google <a href="#" class="text-dark-gray text-decoration-line-bottom">privacy policy</a> and <a href="#" class="text-dark-gray text-decoration-line-bottom">terms of service</a> apply. You must not use this website if you disagree with any of these website standard terms and conditions.</span>
                </div>
                <!-- end footer content -->
            </div>
        </footer>
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->

        <!-- javascript libraries -->
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>

        @stack('scripts') <!-- Définir une stack pour les scripts -->

        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    </body>

</html>
