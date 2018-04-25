<?php

use App\Evento;
use Faker\Generator as Faker;

$factory->define(Evento::class, function (Faker $faker) {
    return [
        'nombre' => $faker->realText(random_int(20,160)),
        'fecha_evento' => $faker->dateTimeThisDecade,
        'hora_evento' => $faker->time('H:i'),
        'descripcion' => $faker->realText(random_int(20,160)),
        'estado' => $faker->randomElement( ['borrador', 'pendiente', 'enproceso', 'concluido', 'anulado']),
        'user_id' => $faker->numberBetween(1,3),
        'tipo_evento_id' => $faker->numberBetween(1,10),
        'admin_id' => $faker->numberBetween(1,1),
        'created_at' => $faker->dateTimeThisDecade,
        'updated_at' => $faker->dateTimeThisDecade,
    ];
});