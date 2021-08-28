<?php

namespace App\Http\Controllers;

use App\Message;

class messagesController extends Controller
{


    public function nouveau()
    {


      request()-> validate([
        'message'=>['required'],
      ]);
      Message::create([
        'subscribes_id'=>auth()->id(),
        'contenu_message'=>request('message'),

      ]);

      flash('Votre message a été bien publier')->success();
      return back();

    }
}
