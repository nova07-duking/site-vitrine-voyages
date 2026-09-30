@extends('layout')

@section('title', 'Mon espace — Voyages ESIITECH')

@section('content')
<div class="shell dashboard-page"><h1>Bonjour {{ auth()->user()->name }}.</h1><p class="dashboard-lead">Bienvenue dans votre espace. Retrouvez ici quelques idées pour commencer à imaginer un prochain départ.</p><div class="notice" role="note"><strong>Site de démonstration</strong><span>Les destinations sont présentées à titre d’inspiration. Ce site ne prend pas de réservations.</span></div><div class="dashboard-grid"><section class="dashboard-panel" aria-labelledby="ideas-title"><h2 id="ideas-title">Où partir ?</h2><div class="idea-row"><strong>Méditerranée</strong><span>Mer & villages</span></div><div class="idea-row"><strong>Lisbonne</strong><span>Ville & culture</span></div><div class="idea-row"><strong>Atlas</strong><span>Nature & marche</span></div><a class="text-link" href="{{ route('home') }}#destinations">Voir les destinations</a></section><aside class="dashboard-side"><h2>La petite liste utile.</h2><ol><li>Choisir une période et une durée.</li><li>Vérifier les documents nécessaires.</li><li>Comparer les transports et l’hébergement.</li></ol><p>Chaque voyage commence par quelques bonnes questions.</p></aside></div></div>
@endsection
