<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f7f8f6">
    <meta name="description" content="@yield('description', 'Découvrez des idées de voyages et préparez votre prochaine escapade avec cette vitrine de démonstration.')">
    <title>@yield('title', 'Voyages — ESIITECH')</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo-esitech.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <a class="skip-link" href="#contenu">Aller au contenu</a>
    @include('parts.header')
    <main id="contenu">@yield('content')</main>
    @include('parts.footer')
</body>
</html>
