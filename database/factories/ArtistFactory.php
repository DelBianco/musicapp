<?php

use Faker\Generator as Faker;

$factory->define(App\Artist::class, function (Faker $faker) {
    $name = $faker->name;
    $img = str_replace(array('.',' ','Mr','Ms'),'',$name);
    return [
        'name' => $name,
        'image' => 'https://loremflickr.com/g/320/240/'.strtolower($img),
        'genre' => $faker->randomElement(['rock', 'pop', 'country', 'blues', 'mpb', 'samba']),
        'description' => $faker->paragraph
    ];
});
