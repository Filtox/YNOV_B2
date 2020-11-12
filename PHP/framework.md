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

L'utilité du template est d'utiliser le template dans chaque views

Exemple :
```php
// Template
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
```php
// View
@extends ('layouts.template')

@section('titre')
    Mon article
@endsection

@section('contenu')
    C'est l'article n° {{ $numero }}
@endsection
```