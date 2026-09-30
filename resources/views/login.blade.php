@extends('layout')

@section('title', 'Connexion — Voyages ESIITECH')

@section('content')
<div class="auth-page shell"><div class="auth-context"><h1>Retrouvons-nous ici.</h1><p>Connectez-vous pour parcourir votre espace et retrouver des idées de départ.</p><div class="context-note">Ce site est une vitrine de démonstration. Aucune réservation n’est effectuée.</div></div><div class="auth-card"><div class="auth-card-head"><h2>Connexion</h2><p>Renseignez les identifiants de votre compte.</p></div>
    @if ($errors->any())<div class="form-alert" role="alert"><strong>Connexion impossible.</strong><span>Vérifiez vos informations et réessayez.</span></div>@endif
    <form action="{{ route('login.store') }}" method="POST">@csrf
        <div class="form-group"><label for="email">Adresse e-mail</label><input type="email" id="email" name="email" value="{{ old('email') }}" autocomplete="email" required autofocus @error('email') aria-invalid="true" aria-describedby="email-error" @enderror>@error('email')<span class="field-error" id="email-error">{{ $message }}</span>@enderror</div>
        <div class="form-group"><label for="password">Mot de passe</label><input type="password" id="password" name="password" autocomplete="current-password" required @error('password') aria-invalid="true" aria-describedby="password-error" @enderror>@error('password')<span class="field-error" id="password-error">{{ $message }}</span>@enderror</div>
        <button type="submit" class="btn btn-primary btn-full">Se connecter</button>
    </form><p class="auth-switch">Pas encore de compte ? <a href="{{ route('register') }}">Créer un compte</a></p></div></div>
@endsection
