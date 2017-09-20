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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    /*return 'pagina home';*/
    $user = User::create([
        'name'=> 'Geovana F',
        'email' =>'g@gmail.com',
        'password' => bcrypt('123456'),
        'gender' => 'f', 
        'biography' => 'Psicologa'
    ]);

    return 'Guardado con Exito';
});
Route::get('/update-user', function () {
    $user = User::find(1);

    $user->gender ="m";
    $user->biography = "PROFE FISICO";

    $user->save();

    return 'Usuario Actualizado';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
