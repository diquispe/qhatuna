<?php

use App\Admin;
use Faker\Generator as Faker;
use App\User;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(User::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
        //'email' => $faker->unique()->safeEmail,
        'level' => $faker->randomElement(array('anfitrion', 'invitado')),
        'username' => $faker->userName.$faker->randomNumber(3),
        'nombre' => $faker->name,
        'apellidos' => $faker->lastName,
        'avatar' => 'http://via.placeholder.com/640x640',
        'edad' => $faker->numberBetween(18,99),
        'sexo' => $faker->randomElement(array('masculino', 'femenino')),
        'direccion' => $faker->address,
        'distrito' => $faker->city,
        'provincia' => $faker->city,
        'departamento' => $faker->country,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(Admin::class, function (Faker $faker) {


    return [
        'email' => 'info@correo.com',
        'nombre' => $faker->name,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});