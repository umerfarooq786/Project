<?php

use Faker\Generator as Faker;

$factory->define(App\Route::class, function (Faker $faker) {
    return [
        'route_name' => $faker->city,
    ];
});
