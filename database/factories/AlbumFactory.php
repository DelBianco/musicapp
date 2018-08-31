<?php

use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {

    return [
        'cover_foto' => $faker->image(),
        'year' => rand(1920,2018)
    ];
});
