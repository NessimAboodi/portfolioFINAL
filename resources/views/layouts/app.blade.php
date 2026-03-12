<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>@yield('title', 'Portfolio | BTS SIO SLAM')</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    @yield('extra-css')
</head>
<body>
<a href="#maincontent" class="skip">Passer au contenu</a>

<header class="container" role="banner">
    <div class="nav">
        <div class="brand">
            <div class="logo" aria-hidden="true">AN</div>
            <div>
                <div style="font-weight:700">Aboodi Nessim</div>
                <div class="muted" style="font-size:.85rem">Étudiant BTS SIO - SLAM</div>
            </div>
        </div>
        <nav aria-label="Navigation principale">
            <ul id="menu">
                <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Accueil</a></li>
                <li><a href="{{ url('/competences') }}" class="{{ request()->is('competences') ? 'active' : '' }}">Compétences</a></li>
                <li><a href="{{ url('/projets') }}" class="{{ request()->is('projets') ? 'active' : '' }}">Projets</a></li>
                <li><a href="{{ url('/veille') }}" class="{{ request()->is('veille') ? 'active' : '' }}">Veille</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle {{ request()->is('experiences/*') ? 'active' : '' }}" onclick="return false;">
                        <span>Expériences</span>
                        <span class="dropdown-arrow" aria-hidden="true">▼</span>
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ url('/experiences/stages') }}">Stage 1 - Espace Mobile</a>
                        <a href="{{ url('/experiences/stage2') }}">Stage 2 - Café Crème</a>
                        <a href="{{ url('/experiences/projets') }}">Projets professionnels</a>
                    </div>
                </li>
                <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<main id="maincontent" class="container" role="main">
    @yield('content')
</main>

<footer class="container">
    <div class="muted">© 2025 Aboodi Nessim – Portfolio BTS SIO SLAM</div>
</footer>

<script src="{{ asset('js/script.js') }}"></script>
@yield('extra-js')
</body>
</html>
