<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        'nom' => $this->faker->text(50),
        'siteweb' => $this->faker->text(50),
        'description' => $this->faker->paragraph,
        'cuisine' => $this->faker->text(50),
        'etat' => $this->faker->text(50)
    ];
});
