<?php

namespace App\Http\Controllers;
use App\Message;

class subscribesController extends Controller
{
    //

    public function liste()
    {
        $subs = \App\subscribes::all();
        return view('subscribes',
        ['subscribes'=> $subs,]);


    }
    public function voir()
    {
        $email=request('email');

         $utilisateur = \App\subscribes::where('email',$email)->firstOrFail();



        return view('utilisateur',

        ['utilisateur'=>$utilisateur,
    
        ]) ;

    }

}
