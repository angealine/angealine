<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PdtController extends Controller
{
    use ValidatesRequests;
    //function pour afficher les categorie dans le champ select du formulaire
    function pdtform ()
    {
        $categories = Category::all();
        $products = Product::with('category')->get();
         return view('pages.pdtform', compact('categories', 'products'));
    }
    // fonction pour enregistrer les données des produits enregistées dans le formulaire 
    public function ajoutpdt(Request $request){

            $validated = $request->validate([
                'nom_produit' => 'required|string|min:3',
                'description' => 'nullable|string',
                'prix' => 'required|numeric|min:0.01',
                'quantite' => 'required|integer|min:1',
                'category_id' => 'required|exists:categories,id',
            ]);
        $produit = new Product();
        $produit->product_name = $request->nom_produit;
        $produit->description_product = $request->description;
        $produit->price_product = $request->prix;
        $produit->qte_product = $request->quantite;
        $produit->category_id = $request->category_id;
        $produit->save();
        return redirect('/produit')->with('status', "Le produit".' ' .$request->nom_produit. ' ' ."a ete ajoutée avec succes!!");
    }

    public function updatepdt(int $id){
        
        $categories = Category::all();
       $produit = Product::find($id);
         return view('pages.updatepdt')->with(compact('categories', 'produit'));
        
    }
    //     // Modifier un produit
     public function update(Request $request)
        {
            
            // Validation des données
            $validated = $request->validate([
                'nom_produit' => 'required|string|min:3',
                'description' => 'nullable|string',
                'prix' => 'required|numeric|min:0.01',
                'quantite' => 'required|integer|min:1',
                'category_id' => 'required|exists:categories,id',
            ]);
            // Mise à jour du produit
            $produit = Product::find($request->id);
            $produit->product_name = $request->nom_produit;
            $produit->description_product = $request->description;
            $produit->price_product = $request->prix;
            $produit->qte_product = $request->quantite;
            $produit->category_id = $request->category_id;
            $produit->update();
            return redirect('/produit')->with('status', 'Produit mis à jour avec succès!!');
       
        }
    // Supprimer un produit
   
    public function deletepdt($id)
    {
        $produit = Product::find($id);
        $produit->delete();
        return redirect('/produit')->with('status', 'Produit supprimé avec succès');
    }
    
   
}





