<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Collège Privé Euphrate')</title>
    <meta name="description" content="@yield('description', 'Collège Privé Euphrate - Grand-Lahou, Côte d\'Ivoire')">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="{{ asset('assets/images/fav.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menus.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/elegant-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">

    @stack('styles')
</head>
<body class="@yield('body_class', 'profile-page')">

    {{-- Preloader --}}
    <div id="react__preloader">
        <div id="react__circle_loader"></div>
        <div class="react__loader_logo">
            <img src="{{ asset('assets/images/preload-1.jpeg') }}" alt="Preload">
        </div>
    </div>

    {{-- Header --}}
    <header id="react-header" class="react-header">
        <div class="topbar-area style1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="topbar-contact">
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    <a href="tel:+2250707791174"> (+225) 07 07 79 11 74</a>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    <a href="mailto:cpeuphrate@gmail.com">cpeuphrate@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="toolbar-sl-share">
                            <ul class="social-links">
                                <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                                <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Menu --}}
        <div class="menu-part">
            <div class="container">
                <div class="react-main-menu">
                    <nav>
                        <div class="menu-toggle">
                            <div class="logo">
                                <a href="{{ route('home') }}" class="logo-text">
                                    <img src="{{ asset('assets/images/logo-euphrate.jpeg') }}" height="80px" alt="logo">
                                </a>
                            </div>
                            <button type="button" id="menu-btn">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="react-inner-menus">
                            <ul id="backmenu" class="react-menus home react-sub-shadow">
                                <li class="{{ request()->routeIs('home') ? 'menu-active' : '' }}">
                                    <a href="{{ route('home') }}">Accueil</a>
                                </li>
                                <li class="{{ request()->routeIs('about') ? 'menu-active' : '' }}">
                                    <a href="{{ route('about') }}">À propos</a>
                                </li>
                                <li>
                                    <a href="#">Informations</a>
                                    <ul>
                                        <li><a href="{{ route('vie-scolaire') }}">Vie scolaire</a></li>
                                        <li><a href="{{ route('enseignements') }}">Enseignements</a></li>
                                        <li><a href="#">Inscriptions</a></li>
                                        <li><a href="#">Résultats</a></li>
                                    </ul>
                                </li>
                                <li class="{{ request()->routeIs('cours') ? 'menu-active' : '' }}">
                                    <a href="{{ route('cours') }}">Cours en ligne</a>
                                </li>
                                <li class="{{ request()->routeIs('actualite') ? 'menu-active' : '' }}">
                                    <a href="{{ route('actualite') }}">Actualités</a>
                                </li>
                                <li class="{{ request()->routeIs('contact') ? 'menu-active' : '' }}">
                                    <a href="{{ route('contact') }}">Contacts</a>
                                </li>
                            </ul>
                            <div class="searchbar-part">
                                <div class="react-login">
                                    @auth
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                            {{ Auth::user()->name }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
                                    @else
                                        <a href="{{ route('login') }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                            Connexion
                                        </a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    {{-- Page Content --}}
    <div class="react-wrapper">
        <div class="react-wrapper-inner">
            @yield('content')
        </div>
    </div>

    {{-- Footer --}}
    <footer id="react-footer" class="react-footer home-main">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 md-mb-30">
                        <div class="footer-widget footer-widget-1">
                            <div class="footer-logo white">
                                <a href="{{ route('home') }}" class="logo-text">
                                    <img src="{{ asset('assets/images/logo_cpe_3d.png') }}" alt="Collège Privé Euphrate">
                                </a>
                            </div>
                            <h5 class="footer-subtitle">
                                Le Collège Privé Euphrate est un établissement secondaire situé à Grand-Lahou,
                                engagé dans la discipline, l'excellence et la réussite scolaire.
                            </h5>
                            <ul class="footer-address">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 1 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    Grand-Lahou, Côte d'Ivoire
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                    <a href="tel:+2250707791174">+225 07 07 79 11 74</a>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    <a href="mailto:cpeuphrate@gmail.com">cpeuphrate@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 md-mb-30">
                        <div class="footer-widget footer-widget-2">
                            <h3 class="footer-title">Navigation</h3>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{ route('home') }}">Accueil</a></li>
                                    <li><a href="{{ route('about') }}">À propos</a></li>
                                    <li><a href="{{ route('vie-scolaire') }}">Vie scolaire</a></li>
                                    <li><a href="{{ route('enseignements') }}">Enseignements</a></li>
                                    <li><a href="{{ route('cours') }}">Cours en ligne</a></li>
                                    <li><a href="{{ route('actualite') }}">Actualités</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="footer-widget footer-widget-3">
                            <h3 class="footer-title">Horaires</h3>
                            <ul class="footer-address">
                                <li>Lundi – Vendredi : 7h30 – 17h00</li>
                                <li>Samedi : 8h00 – 12h00</li>
                                <li>Dimanche : Fermé</li>
                            </ul>
                            <h3 class="footer-title mt-4">Devise</h3>
                            <p>Discipline – Excellence – Réussite</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="react-copy-left">© {{ date('Y') }} <a href="#">CP Euphrate</a> Tous droits réservés</div>
                <div class="react-copy-right">
                    <ul class="social-links">
                        <li class="follow">Follow us</li>
                        <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                        <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                        <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div id="backscrollUp" class="home">
        <span aria-hidden="true" class="arrow_carrot-up"></span>
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/menus.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>
