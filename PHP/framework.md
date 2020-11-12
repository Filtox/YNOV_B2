# Laravel

### Installation

##### Création via composer
```
composer create-project --prefer-dist laravel/laravel laravel6
```

##### Création via Laravel Installer
```
composer global require "laravel/installer"
laravel new monappli
```

### Organisation de Laravel
* Dossier app :
  + **Console :** commandes en mode console
  + **Http :** contrôleurs et middlewares
  + **Providers :** Fournisseurs de services utilisés pour initialiser les composants
  + **User :** un modèle pour la table utilisateurs
* Autres dossiers :
  + **bootstrap :** scripts d’initalisation et de démmarage de l’application
  + **public :** images, css, JS
  + **config :** les configurations
  + **database :** migrations et population
  + **resources :** vues, langages, fichiers Sass, ...
  + **routes :** gestion des Urls
  + **storage :** données temporaires
  + **tests :** test unitaires
  + **vendor :** composants créés par composer
* Fichiers racine :
  + **artisan :** outil permettant de gérer laravel
  + **composer.json :** fichier de config de composer
  + **package.json :** fichier de config de npm pour les assets
  + **phpunit.xml :** fichier de config de phpunit pour les tests unitaires
  + **.env :** fichier d’environnement

#### Accessibilité
![Accessibilité](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png)


Un paragraphe en pur php :
```
<p>Cest larticle n° <?php $numero ?></p>
```
Deviens en blade :
```
<p>C'est l'article n° {{ $numero }}</p>
```

Pour créer un controleur :
```
php artisan make:controller [NomControlleur]
```

# Template

L'utilité du template est d'utiliser le template dans chaque views. Tout ce qui est contenu dans le template apparaitra dans les views qui lui font appel.

_Exemple :_

##### Template :
```html
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
##### View :
```php
@extends ('template')   // indique le template à utiliser

@section('titre')       // debut de section avec le nom de la section
    Mon article         // le contenu à remplacer dans le template
@endsection             // fin de section

@section('contenu')
    C'est l'article n° {{ $numero }}
@endsection
```