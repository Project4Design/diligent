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
/*
Route::get('/','AuthController@index')->name('login');
*/


Route::get('/','FrontController@index')->name('front');
Route::get('/car',function(){ return view('front.car'); });
Route::get('/van',function(){ return view('front.van'); });
Route::get('/taxi',function(){ return view('front.taxi'); });
Route::get('/home',function(){ return view('front.home'); });
Route::get('/business',function(){ return view('front.business'); });
Route::get('/fleet',function(){ return view('front.fleet'); });

//QUOTES
Route::get('/car-quote',function(){ return view('front.car_quote'); });
Route::get('/accident-quote',function(){ return view('front.accident_quote'); });

//Registrar cars insurance
Route::post('cars','CarsController@store', function() {
})->name('register_cars');

Route::get('/login','AuthController@index')->name('login');
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
