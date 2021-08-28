<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connexionController extends Controller
{
    //

    public function accueil()
    {
        return view('connexion');

    }
    public function traitement()
    {
        request()->validate([
            'email'=>['required','email'],
            'password'=>['required'],

        ]);

       $resultat = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),


        ]);

        if($resultat)
        {   flash('Vous etes connecter')->success();
            return redirect('/compte');
        }



        return back()->withInput()->withErrors([
            'email'=>"Nom d'utilisateur ou mot de passe incorrecte " .  \request('email'),
        ]);

    }
}
