<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
    //fonction pour la vue du formulaire 
    function signupform (){
        return view('pages.signupform');
        
    }
    function ajoutuser(Request $request){

        $utilisateur = new User();
        $utilisateur->name = $request->nom_utilisateur;
        $utilisateur->email = $request->email_utilisateur;
        $utilisateur->password = $request->password;

        $utilisateur->save();
        return redirect ('signinform');
        
    }
}
