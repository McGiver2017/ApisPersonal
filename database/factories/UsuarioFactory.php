<?php

use Faker\Generator as Faker;
use App\usuario;

$factory->define(usuario::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '12345', // secret
    ];
});
