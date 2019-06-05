<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(\App\Clientes::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'calle'=> $faker->name,
        'numero'=> $faker->name,
        'interior'=> $faker->name,
        'colonia'=> $faker->name,
        'ciudad'=> $faker->name,
        'cp'=> $faker->name,
        'estado'=> $faker->name,
        'contacto1'=> $faker->name,
        'tel1'=> $faker->name,
        'mail1'=> $faker->name,
        'contacto2'=> $faker->name,
        'tel2'=> $faker->name,
        'mail2'=> $faker->name,
        'dia_revision'=> $faker->name,
        'dia_credito'=> $faker->numberBetween(1,30),
    ];
});

$factory->define(\App\Provedores::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'razon_social'=> $faker->name,
        'rfc'=> $faker->name,
        'direccion'=> $faker->name,
        'contacto'=> $faker->name,
        'mail'=> $faker->name,
        'credito'=> $faker->numberBetween(1000, 10000),
        'saldo'=> $faker->numberBetween(1425.125, 123543.1234),
    ];
});

$factory->define(\App\Operadores::class, function (Faker $faker) {
    return [
        'apellido_paterno' => $faker->name,
        'apellido_materno'=> $faker->name,
        'nombres'=> $faker->name,
        'nombre_corto'=> $faker->name,
        'licencia'=> $faker->name,
        'vigencia_licencia'=> $faker->date(),
        'vigencia_medico'=> $faker->date(),
        'obs'=> $faker->name,
    ];
});

$factory->define(\App\Rutas::class, function (Faker $faker) {
    return [
        'clientes' => $faker->numberBetween(1,10),
        'nombre' => $faker->name,
        'cliente' => $faker->name,
        'lugar_exp' => $faker->name,
        'origen' => $faker->name,
        'remitente' => $faker->name,
        'dom_remitente' => $faker->name,
        'recoge' => $faker->name,
        'valor_declarado' => $faker->name,
        'destino' => $faker->name,
        'destinatario' => $faker->name,
        'dom_destinatario' => $faker->name,
        'entrega' => $faker->name,
        'fecha_entrega' => $faker->name,
        'cantidad' => $faker->name,
        'embalaje' => $faker->name,
        'concepto' => $faker->name,
        'material_peligroso' => $faker->name,
        'indemnizacion' => $faker->name,
        'obs' => $faker->name,
        'dias_re' => $faker->numberBetween(1,5),
    ];
});

