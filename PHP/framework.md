Un paragraphe en pur php :
```php
<p>C'est l'article n° <?php $numero ?></p>
```
Deviens en blade :
```php
<p>C'est l'article n° {{ $numero }}</p>
```

Pour créer un controleur :
```
php artisan make:controller [NomControlleur]
```