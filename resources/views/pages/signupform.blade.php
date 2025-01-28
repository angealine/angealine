{{-- formulaire d'inscription --}}
@extends('layouts.contentsign')
    @section('contenu_header')
    <header>
        <h1>Section reservée aux nouveaux utilisateurs</h1>
    </header>
    @endsection

    @section('contenu_form_signup')
    <h2>Formulaire d'inscription</h2>
    <form action="{{ url ('/ajoutuser') }}" method="POST">
            @csrf {{-- token de securite pour eviter les failles de securite --}}
        <!-- Champ Nom -->
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom_utilisateur" placeholder="Entrez votre nom" minlength="3" autocomplete="off"  required>

        <!-- Champ adressse mail -->
        <label for="email">Adresse mail :</label>
        <input type="email" id="email" name="email_utilisateur" placeholder="Entrez votre adresse email"  autocomplete="off"  required>


        <!-- Champ mot de passe -->
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe"  autocomplete="off" required>

         <!-- Champ quantite produit -->
         <label for="password_confirm">Confirmer le mot de passe :</label>
         <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirmer votre mot de passe" autocomplete="off" required >
       
        <!-- Bouton pour s'inscrire -->
        <div class="button-container">
            <button type="button" class="btn-cancel" onclick="window.location.reload()">Annuler</button>
            <button type="submit" class="btn-validate">Valider</button>
        </div>
    </form>
    @endsection
  

    
 