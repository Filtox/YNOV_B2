<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        'nom' => $faker->company,
        'adresse' => $faker->streetAddress,
        'ville' => $faker->state,
        'codepostal' => $faker->numberBetween(1000,89999),
        'siteweb' => $faker->url,
        'description' => $faker->text(50),
        'typedecuisine' => $faker->text(10),
        'etat' => $faker->randomElement(['Ouvert', 'Fermé', 'en travaux'])
    ];
});
