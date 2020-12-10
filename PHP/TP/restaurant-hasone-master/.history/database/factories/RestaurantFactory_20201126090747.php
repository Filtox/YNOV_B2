<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        'nom' => $faker->text(50),
        'adresse' => $faker->text(50),
        'ville' => $faker->text(50),
        'codepostal' => $faker->text(50),
    ];
});
