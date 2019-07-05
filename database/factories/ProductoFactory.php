<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Producto;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->word,
        'cantidad'=>$faker->numberBetween($min = 100, $max = 500),
        'fecha_vencimiento' => $faker->date($format = 'Y-m-d', $min = 'now'),
        'precio' => $faker->randomFloat($nbMaxDecimals = 2, $min = 200, $max = 6000),
    ];
});
