<?php

use Faker\Generator as Faker;
use RedeyeVentures\GeoPattern\GeoPattern;

$factory->define(App\Artist::class, function (Faker $faker) {
    $name = $faker->name;
    $geopattern = new GeoPattern();
    $geopattern->setString($name);
    return [
        'name' => $name,
        'image' => $geopattern->toDataURI(),
        'genre' => $faker->randomElement(['rock', 'pop', 'country', 'blues', 'mpb', 'samba']),
        'description' => $faker->paragraph
    ];
});
