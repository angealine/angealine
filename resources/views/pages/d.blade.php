@extends('layouts.content')
    @section('contenu_header')
    <header>
        <h1>Section reservée à la suppression d'un produit</h1>
    </header>
    @endsection
    @section('contenu_form')
        <!-- Formulaire pour supprimer -->
        <form action="/deletepdt" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');">
                Supprimer
            </button>
        </form>

