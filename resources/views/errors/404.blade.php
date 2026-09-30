@extends('layout')

@section('title', 'Page introuvable — Voyages ESIITECH')

@section('content')
<div class="shell not-found"><p class="eyebrow">ERREUR 404</p><h1>Cette page est introuvable.</h1><p>L’adresse a peut-être changé ou comporte une erreur. Reprenez votre visite depuis l’accueil.</p><a class="btn btn-primary" href="{{ route('home') }}">Retour à l’accueil</a></div>
@endsection
