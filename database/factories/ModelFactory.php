<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Empresa;
use Faker\Generator as Faker;

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

$factory->define(Empresa::class, function (Faker $faker) {
	return [
		'nombre' => $faker->company,
		'direccion_id' => $faker->numberBetween(1, 10),
		'ruc' => $faker->ean8,
		'icono' => "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",
	];
});