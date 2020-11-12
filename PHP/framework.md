Un paragraphe en pur php :
```php
<p>Cest larticle n° <?php $numero ?></p>
```
Deviens en blade :
```php
<p>C'est l'article n° {{ $numero }}</p>
```

Pour créer un controleur :
```
php artisan make:controller [NomControlleur]
```

# Template

L'utilité du template est d'utiliser le template dans chaque views. Tout ce qui est contenu dans le template apparaitra dans les views qui lui font appel.

Exemple :
###### Template :
```html
<!-- Template -->
<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>@yield('titre')</title>
</head>
<body>
@yield('contenu')
<p>Mon pied de page</p>
</body>
</html>
```
Le mot clé @yield permet de reserver un emplacement nommé ici "titre" et "contenu"
###### View
```php
@extends ('template')   // indique le template à utiliser

@section('titre')       // debut de section avec le nom de la section
    Mon article         // le contenu à remplacer dans le template
@endsection             // fin de section

@section('contenu')
    C'est l'article n° {{ $numero }}
@endsection
```