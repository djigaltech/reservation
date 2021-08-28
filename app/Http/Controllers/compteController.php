<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class compteController extends Controller
{
    //
     public function accueil()
     {
         # code...

         return view('compte');


     }

     public function Deconnexion()
     {

       auth()->logout();

     flash("Vous etes bien deconnectés")->success();
         return  redirect('/');

     }
     public function mot_passe()
     {
       if(auth()->guest())
       {
         flash("Vous devez vous connecter pour acceder a cette page")->error();
          return redirect('/connexion');

       }
       request()->validate([
         'password'=>['required','confirmed'],
         'password_confirmation'=>['required'],

       ]);
       auth()->user()->update([
         'password' => bcrypt(request('password')),
       ]);

       flash('Votre mot de passe a bien ete modifier');
       return redirect('/');
     }

}
