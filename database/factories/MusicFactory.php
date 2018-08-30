<?php

use Faker\Generator as Faker;

$factory->define(App\Music::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'duration' => rand (120,600),
        'composer' => $faker->name,
        'order_number' => 1
    ];
});
