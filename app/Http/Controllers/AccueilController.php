<?php

namespace App\Http\Controllers;
use App\subscribes;

class AccueilController extends Controller
{
    //
    public function traitement()
    {
        request()->validate([
            'email' => ['required','email'],
            'password'=>['required'],

        ]);


        $subs = subscribes::create([
            'email'=>request('email'),
            'password'=>bcrypt(request('password')),


        ]);



         flash('Votre inscription a reussi avec succés')->success();
return view ('reception');

    }

    public function accueil()
    {

        return view('inscription');
    }
}
