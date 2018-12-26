<?php

use Faker\Generator as Faker;

$factory->define(App\Tutorial::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
        'body' => $faker->paragraph(10),
    ];
});
