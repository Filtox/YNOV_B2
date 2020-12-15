<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        'nom' => $faker->text(50),
        
        'description' => $faker->paragraph,
        'types' => $faker->words($nb = 3, $asText = false),
        'etat' => $faker->text(25),
    ];
});
