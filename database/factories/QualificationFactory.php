<?php

use App\Qualification;
use Faker\Generator as Faker;

$factory->define(Qualification::class, function (Faker $faker) {
    return [
        'titulo' => $faker->name,
    ];
});
