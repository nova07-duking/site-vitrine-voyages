<header class="site-header">
    <div class="shell header-inner">
        <a class="brand" href="{{ route('home') }}" aria-label="Voyages ESIITECH, accueil"><span class="brand-image"><img src="{{ asset('assets/images/logo-esitech.png') }}" alt="ESIITECH" width="190" height="190"></span><span class="brand-label">VOYAGES</span></a>
        <nav class="site-nav" aria-label="Navigation principale">
            <a href="{{ route('home') }}#destinations">Destinations</a>
            <a href="{{ route('home') }}#approche">Notre approche</a>
            @auth
                <a href="{{ route('dashboard') }}">Mon espace</a>
                <form action="{{ route('logout') }}" method="POST">@csrf<button type="submit" class="nav-logout">Déconnexion</button></form>
            @else
                <a href="{{ route('login') }}">Connexion</a>
                <a class="nav-cta" href="{{ route('register') }}">Créer un compte</a>
            @endauth
        </nav>
    </div>
</header>
