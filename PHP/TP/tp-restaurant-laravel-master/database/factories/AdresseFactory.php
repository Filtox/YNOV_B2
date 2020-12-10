<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Adresse;
use Faker\Generator as Faker;

$factory->define(Adresse::class, function (Faker $faker) {
    return [
        'adresse' => $this->faker->text(50),
        'ville' => $this->faker->text(50),
        'codepostal' => $this->faker->text(50)
    ];
});
