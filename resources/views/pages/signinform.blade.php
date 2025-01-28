{{-- formulaire de connexion --}}

@extends('layouts.contentsign')
    @section('contenu_header')
    <header>
        <h1>Pages de connexion</h1>
    </header>
    @endsection
    @section('contenu_form_signin')
    <h2>Formulaire de connexion</h2>
    <h4>Veuillez entrer vos identifiants</h4>
    <form action="/connexion" method="post">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>

        <button type="submit">Se connecter</button>
    </form>
    @endsection