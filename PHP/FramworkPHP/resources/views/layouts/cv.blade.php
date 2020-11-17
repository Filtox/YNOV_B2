<!doctype html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <title>@yield('titre')</title>
</head>
<body>
<a href="{{ route ('cv') }}"> cv </a>
<a href="{{ route ('contact') }}"> contact </a>
<a href="{{ route ('Home') }}"> home </a>
<a href="{{ route ('contacts.index') }}"> Liste des contacts </a>
<a href="{{ route ('contacts.create') }}"> Nouveau contact </a>
<h1>@yield('titre') </h1>
<div>@yield('contenu')</div>
   <p> mon pied de page </p>
</body>
</html>

