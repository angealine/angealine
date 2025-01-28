{{-- la page qui sera affichée apres l'authentification --}}

@extends('layouts.content')
    @section('contenu_header')
    <header>
        <h1>Bienvenue sur la plateforme administrateur </h1>
        <p>Explorez les différentes sections en cliquant sur les liens ci-dessous.</p>
    </header>
    {{-- afficher les utilisateurs sur la vue --}}
    @foreach ($utilisateurs as $utilisateur)
    <div class="well">
        <h1> {{ $utilisateur ->name }}</h1>
    @endforeach
       </div>

    @endsection
    
       

