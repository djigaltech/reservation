<?php

namespace App\Http\Middleware;

use Closure;

class verification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

      if(auth()->guest())
      {
        flash("Vous devez vous connecter pour acceder a cette page")->error();
          return redirect('/connexion');

      }



        return $next($request);
    }
}
