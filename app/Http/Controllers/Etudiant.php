<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Etudiant extends Controller
{
    public function liste(){
        $liste="takam,tato,wandji,tchaptcheut";
        $nomControleur = "Etudiant";
        return view('pages.liste',compact('liste','nomControleur'));

    }
}
