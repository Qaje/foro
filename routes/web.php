<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Faker\Factory as Faker;
use Foro\User;
Route::get('/',[
    'as' => 'home',
    'uses' => 'PagesController@home'
    ]);
Route::get('/all',[
    'as' => 'all',
    'uses' => 'QueryController@getAll'
    ]);

    Route::get('/create', function () {
        /*return 'pagina home';*/
        $faker = Faker::create();
        $user = User::create([
            'name'=> $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('123456'),
            'gender' => $faker->randomElement(['f','m']),
            'biography' => $faker->text(200)
        ]);
        return $user;
    });
