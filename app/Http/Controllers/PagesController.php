<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //fonction pour afficher tous les utilisateurs sur la vue dash
    function home(){
       $utilisateur = User::all();
        return view("pages.home")->with ('utilisateurs', $utilisateur);
    
    }
    function inscription(){
        return view("pages.signupform") ;
    }
    function connexion(){
        return view("pages.signinform") ;
    }

}
