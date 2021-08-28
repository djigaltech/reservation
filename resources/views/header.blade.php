<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.css"
        integrity="sha256-8BrtNNtStED9syS9F+xXeP815KGv6ELiCfJFQmGi1Bg=" crossorigin="anonymous" />
    </head>
    <body>
        <div class="container">
  @include('flash::message')
    @yield('contenu')
</div>
</body>
</html>
