 <?php

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

$factory->define(Foro\User::class, function (Faker\Generator $faker) {
    /*static $password;*/

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'gender' => $faker->randomElement(['f','m']),
        'biography' => $faker->text(rand(25,255)),
        'remember_token' => $faker->randomElement([null,str_random(10)])
    ];
});
