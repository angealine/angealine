<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //afficher tous les produits sur  la vue
    public function produit(){
        //$categories = Category::all();
        //return view("pages.product.index")->with(compact('categories'));
        $categories = Category::withCount('products')->get();
        return view('pages.product.index', compact('categories'));
    }
    public function getProductFromCategoryId(int $categoryId)
    {
        $products = Product::where('category_id', $categoryId)->get();
        return view("pages.product.category")->with(compact('products'));

    }
}