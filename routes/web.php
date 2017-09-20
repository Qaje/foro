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
use Foro\User;
use Faker\Factory as Faker;


Route::get('/', function () {
    return view('welcome');
});

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
Route::get('/update-user', function () {
    $user = User::find(1);

    $user->gender ="m";
    $user->biography = "PROFE FISICO";

    $user->save();

    return 'Usuario Actualizado';
});
Route::get('/update/{id}', function ($id) {
    $faker = Faker::create();
    $user = User::find($id);

    $user->name = $faker->name;
    $user->gender = $faker->randomElement(['f','m']);
    $user->biography = $faker->text(10);

    $user->save();

    return $user;
});

Route::get('/read/{id}',function($id){
    $user = User::find($id);
    return $user;
});
Route::get('delete/{id}',function($id){
    $user = User::find($id);
    $user->delete();
    
    return 'usuario eliminado';
});

    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
