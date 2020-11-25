<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recette;
use Faker\Generator as Faker;

$factory->define(Recette::class, function (Faker $faker) {
    return [
        'titre' => $faker->text(10),
        'ingredients' => $faker->text(30)
    ];
});
