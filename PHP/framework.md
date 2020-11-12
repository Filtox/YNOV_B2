Un paragraphe en pur php :
```html
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