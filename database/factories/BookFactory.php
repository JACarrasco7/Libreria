<?php

use App\book;
use Faker\Generator as Faker;

$factory->define(book::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(3),
        'descripcion' => $faker->text(),
        'paginas' =>  $faker->numberBetween(20,500),
        'precio' => $faker->randomFloat(2, 1, 10),
        'estado' => $faker->randomElement(['finalizado', 'borrador']),
        'category_id' => $faker->numberBetween(1,4)
    ];
});
