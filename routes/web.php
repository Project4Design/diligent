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

Route::get('/', function () {
    return view('login');
})->name('login');

//verificar rutas con permiso auth
Route::group(['middleware' => 'auth'], function() {

	Route::get('dashboard','HomeController@index')->name('index');

});
//fin group




//rutas del auth Ver formulario de login y autenticacion
Route::post('auth', 'AuthController@authenticate')->name('login_auth');
Route::get('auth' , 'AuthController@index')->name('index_show_login');
Route::post('/logout', 'AuthController@logout')->name('logout');
//fin_rutas_auth
