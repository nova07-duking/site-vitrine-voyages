@extends('layout')

@section('title', 'Créer un compte — Voyages ESIITECH')

@section('content')
<div class="auth-page shell"><div class="auth-context"><h1>Un voyage commence par une envie.</h1><p>Créez votre compte pour accéder à l’espace voyageur et explorer des idées de séjours.</p><div class="context-note">Aucune réservation en ligne n’est proposée sur ce site de démonstration.</div></div><div class="auth-card"><div class="auth-card-head"><h2>Créer un compte</h2><p>Quelques informations suffisent pour commencer.</p></div>
    @if ($errors->any())<div class="form-alert" role="alert"><strong>Inscription incomplète.</strong><span>Corrigez les champs indiqués ci-dessous.</span></div>@endif
    <form action="{{ route('register.store') }}" method="POST">@csrf
        <div class="form-group"><label for="name">Nom complet</label><input type="text" id="name" name="name" value="{{ old('name') }}" autocomplete="name" maxlength="255" required autofocus @error('name') aria-invalid="true" aria-describedby="name-error" @enderror>@error('name')<span class="field-error" id="name-error">{{ $message }}</span>@enderror</div>
        <div class="form-group"><label for="email">Adresse e-mail</label><input type="email" id="email" name="email" value="{{ old('email') }}" autocomplete="email" maxlength="255" required @error('email') aria-invalid="true" aria-describedby="email-error" @enderror>@error('email')<span class="field-error" id="email-error">{{ $message }}</span>@enderror</div>
        <div class="form-group"><label for="password">Mot de passe</label><input type="password" id="password" name="password" autocomplete="new-password" minlength="10" aria-describedby="password-help @error('password') password-error @enderror" required><span class="field-hint" id="password-help">10 caractères minimum.</span>@error('password')<span class="field-error" id="password-error">{{ $message }}</span>@enderror</div>
        <div class="form-group"><label for="password_confirmation">Confirmer le mot de passe</label><input type="password" id="password_confirmation" name="password_confirmation" autocomplete="new-password" minlength="10" required></div>
        <button type="submit" class="btn btn-primary btn-full">Créer mon compte</button>
    </form><p class="auth-switch">Déjà inscrit ? <a href="{{ route('login') }}">Se connecter</a></p></div></div>
@endsection
