<?php

use Faker\Generator as Faker;
use RedeyeVentures\GeoPattern\GeoPattern;

$factory->define(App\Album::class, function (Faker $faker) {
    $geopattern = new GeoPattern();
    $geopattern->setString($faker->name);
    return [
        'cover_foto' => $geopattern->toDataURI(),
        'year' => rand(1920,2018)
    ];
});
