@extends('layouts.content')
    @section('contenu_header')
    <header>
        <h1>Section reservée à l'ajout de nouveau produit</h1>
    </header>
    @endsection
    @section('contenu_form')
    <h2>Formulaire de nouveaux produits</h2>
    @if (count($errors)>0)
    @foreach ( $errors->all() as $error)
        <div class="text-red-500" style="color: red">
            {{ $error }}
        </div>
    @endforeach
    @endif
    <form action="{{url ('/ajoutpdt')}}"     method="POST">
            @csrf {{-- token de securite pour eviter les failles de securite --}}
        <!-- Champ Nom -->
        <label for="nom">Nom Produit:</label>
        <input type="text" id="nom" name="nom_produit" placeholder="Entrez votre nom" autocomplete="off"  >
        <!-- Champ Prénom -->
        <label for="description">Description  :</label>
        <textarea name="description" cols="50" rows="3"  autocomplete="off" > </textarea>

        <!-- Champ prix produit -->
        <label for="prix">Prix Unitaire :</label>
        <input type="int" id="prix" name="prix" placeholder="Entrez le prix unitaire"  autocomplete="off" >

         <!-- Champ quantite produit -->
         <label for="quantite">Quantité :</label>
         <input type="int" id="prix" name="quantite" placeholder="Entrez le stock du produit" autocomplete="off"  >
       
         <label for ="category">Categorie</label>
         <select name="category_id">
            <option value="" disabled selected>Sélectionner une catégorie</option>
            @foreach ($categories as $category)
                <option value={{ $category->id}}>{{ $category->category_name}}</option>
            @endforeach
         </select>
         
        <!-- Bouton pour s'inscrire -->
        <button type="submit">Valider</button>
    </form>
    @endsection
  

    
   