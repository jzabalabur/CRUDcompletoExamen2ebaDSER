<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    </head>
    <body>
    <h1>Botones:</h1>   
    <a href="{{route('ordenador.index')}}" >Ordenadores</a><br>
    <a href="{{route('iniciativa.index')}}" >Iniciativas</a>

    </body>
</html>
