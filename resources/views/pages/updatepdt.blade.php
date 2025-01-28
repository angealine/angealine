@extends('layouts.content')
    @section('contenu_header')
    <header>
        <h1>Section reservée à la modification d'un produit</h1>
    </header>
    @endsection
    @section('contenu_form')
    <h2>Formulaire de modification d'un produit</h2>
     @if (count($errors)>0)
    @foreach ( $errors->all() as $error)
        <div class="text-red-500" style="color: red">
            {{ $error }}
        </div>
    @endforeach
    @endif 
    <form action="{{url ('/update')}}"  method="POST">
            @csrf {{-- token de securite pour eviter les failles de securite --}}
            @method('POST')
        <input type="text" name='id' style='display: none;' value="{{$produit->id}}">
        <!-- Champ Nom -->
        <label for="nom">Nom Produit:</label>
        <input type="text" id="nom" name="nom_produit" value="{{$produit->product_name}} " autocomplete="off"  >
        <!-- Champ Prénom -->
        <label for="description">Description  :</label>
        <textarea name="description" cols="40" rows="3"  autocomplete="off" > {{$produit->description_product}}</textarea>  

        <!-- Champ prix produit -->
        <label for="prix">Prix Unitaire :</label>
        <input type="int" id="prix" name="prix" value="{{$produit->price_product}}"  autocomplete="off" >

         <!-- Champ quantite produit -->
         <label for="quantite">Quantité :</label>
         <input type="int" id="prix" name="quantite" value="{{$produit->qte_product}}" autocomplete="off"  >
       
         <label for ="category">Categorie</label>
         <select name="category_id">
            <option value="" disabled selected>Sélectionner une catégorie</option>
            @foreach ($categories as $category)
                <option value={{ $category->id}}>{{ $category->category_name}}</option>
            @endforeach
         </select>
       
        <button type="submit">Modifier</button>
    </form>
    @endsection
  

    
   
  

    
   