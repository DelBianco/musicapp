<?php

use Faker\Generator as Faker;

$factory->define(App\Music::class, function (Faker $faker) {
    return [
        'titulo' => substr($faker->sentence(2), 0, -1),
        'artist_id' => factory(\App\Artist::class)->create()->id

    ];
});
