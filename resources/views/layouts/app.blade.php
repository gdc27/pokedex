<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Gabriel DA COSTA">
    <link rel="icon" href="{{ asset('/images/favicon.ico') }}" />
    <title>Pokédex</title>

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Style -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>
<header>
    <div>
        <h1>Pokedex</h1>
    </div>
</header>
<div class="wrap">
    @yield('content')
</div>
<footer>
    <div>
        <p>Made by <a href="https://mmi.univ-savoie.fr/~maiadacg/portfolio/" target="_blank">Gabriel DC.</a></p>
        <p>Powered by <a href="https://pokeapi.co/" target="_blank">PokeAPi</a></p>
    </div>
</footer>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
