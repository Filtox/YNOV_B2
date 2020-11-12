<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>@yield('titre')</title>
</head>
<body>
<a href="{{ route('home') }}">Home</a>          <!--  mettre le name de la route  -->
<a href="{{ route('moncv') }}">Mon CV</a>
<a href="{{ route('contact') }}">Contact</a>
<h1>@yield('h1')</h1>
<p>@yield('p')</p>
<p>Mon pied de page</p>
</body>
</html>