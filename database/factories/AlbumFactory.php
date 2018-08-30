<?php

use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    return [
        'artist_id' => factory(\App\Artist::class)->create()->id
    ];
});
