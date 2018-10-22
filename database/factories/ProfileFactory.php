<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'website' => $faker->url,
        'google' => $faker->url,
        'twitter' => $faker->url,
        'facebook' => $faker->url,
    ];
});

