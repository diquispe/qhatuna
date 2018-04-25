<?php

use App\TipoEvento;
use Faker\Generator as Faker;

$factory->define(TipoEvento::class, function (Faker $faker) {
    return [
        'title' => $faker->text(20),
        'slug' => $faker->slug(3),
        'descripcion' => $faker->text(500),
    ];
});