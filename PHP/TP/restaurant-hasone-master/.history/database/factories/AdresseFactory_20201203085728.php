<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Adresse;
use Faker\Generator as Faker;

$factory->define(Adresse::class, function (Faker $faker) {
    return [
        'adresse' => $faker->text(50),
        'ville' => $faker->text(50),
        'codepostal' => $faker->text(50),
    ];
});
