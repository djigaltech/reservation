<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Styles -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.css"
      integrity="sha256-8BrtNNtStED9syS9F+xXeP815KGv6ELiCfJFQmGi1Bg=" crossorigin="anonymous" />
    </head>
    <body>


      <nav class="navbar is-link">
          <div class="navbar-menu">
            <div class="navbar-start">



            <figure class="image is-48x48">
        <img class="is-rounded" src="/img/group.jpg" alt="djigal">
      </figure>

      @include('partial.navbar-item',['lien'=>'/','texte'=>'Accueil'])
            @auth()
              @include('partial.navbar-item',['lien'=>auth()->user()->email,'texte'=>auth()->user()->email])
              @include('partial.navbar-item',['lien'=>'/subscribes','texte'=>'Liste utilisateur'])
            @endauth
             </div>
            </div>
            <div class="navbar-end">
              @auth
              @include('partial.navbar-item',['lien'=>'/compte','texte'=>'Mon compte'])
              @include('partial.navbar-item',['lien'=>'/Deconnexion','texte'=>'Déconnexion'])
              @else
              @include('partial.navbar-item',['lien'=>'/inscription','texte'=>"Inscription"])
              @include('partial.navbar-item',['lien'=>'/connexion','texte'=>'Connexion'])

                <!-- <a href="/connexion" class="navbar-item ">Se connecter</a> -->

                @endauth
            </div>
          </div>


      </nav>

      <style media="screen">

        background-image : url()
      </style>




        <div class="container">
  @include('flash::message')
            @yield('contenu')


        </div>
    </body>
</html>
