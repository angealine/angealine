<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ConnexionController extends Controller
{
    //
    function signin(){
        return view('pages.signinform');

    }
}
