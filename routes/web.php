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

Route::name('front')->get('/' , 'FrontController@index');

Route::get('/car',function(){ return view('front.car'); });
Route::get('/van',function(){ return view('front.van'); });
Route::get('/taxi',function(){ return view('front.taxi'); });
Route::get('/home',function(){ return view('front.home'); });
Route::get('/business',function(){ return view('front.business'); });
Route::get('/fleet',function(){ return view('front.fleet'); });
Route::get('/terms',function(){ return view('front.terms'); });
Route::get('/policy',function(){ return view('front.policy'); });

//QUOTES
Route::get('/car-quote',function(){ return view('front.car_quote'); });
Route::get('/van-quote',function(){ return view('front.van_quote'); });
Route::get('/home-quote',function(){ return view('front.home_quote'); });
Route::get('/business-quote',function(){ return view('front.business_quote'); });
Route::get('/accident-quote',function(){ return view('front.accident_quote'); });
Route::name('home_register')->post('homes','HomesController@store');

//VIEWS ADMIN
//verificar rutas con permiso auth
Route::group(['middleware' => 'auth','prefix' => 'admin'],function(){
	Route::get('dashboard','HomeController@index')->name('index');
	Route::resource('cars', 'CarsController');
	Route::resource('vans', 'VansController');
	Route::resource('homes', 'HomesController');
	Route::resource('business', 'BusinessController');	
	Route::resource('accidents', 'AccidentsController');
});

//REGISTROS DE FORMULARIOS
/*------- Registrar cars insurance -------- */
Route::post('cars','CarsController@store', function() {
})->name('register_cars');

/*---------- Registrar accidents ------------ */
Route::name('register_accidents')->post('accidents' , 'AccidentsController@store');

/*---------- Registrar Bussines ------------ */
Route::name('register_business')->post('business_store' , 'BusinessController@store');

/*-------- Registrar Vans insurance -------------*/
Route::name('register_vans')->post('vans_store', 'VansController@store');

//------FIN DE RUTAS PARA FORMULARIOS 

//Perfil
Route::get('perfil','PerfilController@perfil')->name('perfil');
Route::put('perfil/{id}/edit','PerfilController@update')->name('modificar_perfil');

Route::get('/login','AuthController@index')->name('login');


//rutas del auth Ver formulario de login y autenticacion
Route::post('auth', 'AuthController@authenticate')->name('login_auth');
Route::get('auth' , 'AuthController@index')->name('index_show_login');
Route::post('/logout', 'AuthController@logout')->name('logout');
//fin_rutas_auth
