@extends('layout')

@section('title', 'Voyages ESIITECH — L’envie de partir')
@section('description', 'Une vitrine de voyage pour explorer des idées de destinations et préparer une prochaine escapade.')

@section('content')
<section class="hero" aria-labelledby="hero-title">
    <div class="shell hero-inner"><div class="hero-copy"><h1 id="hero-title">Le monde est plus beau quand on prend le temps de le voir.</h1><p>Des rivages lumineux aux villes pleines d’histoire, trouvez l’inspiration pour imaginer votre prochaine escapade.</p><div class="hero-actions"><a class="btn btn-primary" href="#destinations">Explorer les destinations</a><a class="text-link" href="#approche">Comment préparer son voyage</a></div></div></div>
    <div class="hero-image"><img src="{{ asset('assets/images/coast-hero.png') }}" alt="Village côtier ensoleillé surplombant la mer" width="1776" height="888" fetchpriority="high"></div>
</section>

<section class="section intro shell" aria-labelledby="intro-title"><div class="intro-grid"><h2 id="intro-title">Partir loin. Ou simplement voir autrement.</h2><p>Un beau voyage commence par une envie. Mer, ville ou nature : parcourez quelques inspirations et choisissez le rythme qui vous ressemble. Ce site présente des idées de séjours, sans réservation en ligne.</p></div></section>

<section class="section destinations" id="destinations" aria-labelledby="destinations-title"><div class="shell"><div class="section-heading"><div><h2 id="destinations-title">Trois envies d’ailleurs.</h2></div><p>Des pistes pour commencer à imaginer un itinéraire. Ces destinations sont des inspirations, pas des offres réservables.</p></div><div class="destination-catalogue">
    <article class="destination-card"><div class="destination-photo"><img src="{{ asset('assets/images/coast-hero.png') }}" alt="Village côtier méditerranéen au-dessus de la mer" width="1774" height="888" loading="lazy" decoding="async"></div><div class="destination-card-body"><div class="destination-meta"><span>SOLEIL & MER</span><span>EUROPE</span></div><h3>La Méditerranée</h3><p>Des villages côtiers, des marchés à ciel ouvert et du temps pour ralentir.</p></div></article>
    <article class="destination-card"><div class="destination-photo"><img src="{{ asset('assets/images/lisbonne-catalogue.png') }}" alt="Rue ensoleillée de Lisbonne avec tramway et façades carrelées" width="1456" height="1088" loading="lazy" decoding="async"></div><div class="destination-card-body"><div class="destination-meta"><span>VILLE & CULTURE</span><span>PORTUGAL</span></div><h3>Lisbonne</h3><p>Des ruelles en pente, une lumière singulière et des quartiers à parcourir à pied.</p></div></article>
    <article class="destination-card"><div class="destination-photo"><img src="{{ asset('assets/images/atlas-catalogue.png') }}" alt="Sentier dans une vallée des montagnes de l’Atlas" width="1456" height="1088" loading="lazy" decoding="async"></div><div class="destination-card-body"><div class="destination-meta"><span>NATURE & ESPACE</span><span>MAROC</span></div><h3>Les montagnes de l’Atlas</h3><p>Des paysages ouverts et des sentiers à découvrir au rythme de la marche.</p></div></article>
    </div></div></section>

<section class="section approach shell" id="approche" aria-labelledby="approach-title"><div class="section-heading"><div><h2 id="approach-title">Une idée, puis un itinéraire.</h2></div><p>Quelques étapes simples pour transformer une envie de voyage en projet concret.</p></div><div class="approach-grid"><article><h3>Choisir son ambiance</h3><p>Repos au bord de l’eau, découverte d’une ville ou grand air : commencez par ce qui vous attire.</p></article><article><h3>Définir son rythme</h3><p>Un court séjour et un long voyage ne se préparent pas de la même manière. Gardez du temps pour profiter.</p></article><article><h3>Vérifier l’essentiel</h3><p>Formalités, météo et transport : les derniers détails comptent autant que la destination.</p></article></div></section>

<section class="closing"><div class="shell closing-inner"><div><h2>Votre prochaine histoire commence ici.</h2><p>Créez un compte pour accéder à l’espace voyageur de cette vitrine de démonstration.</p></div><a class="btn btn-light" href="{{ route('register') }}">Créer mon compte</a></div></section>
@endsection
