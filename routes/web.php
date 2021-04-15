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
    return view('welcome');
});

Route::get('/admin',function(){
  return view('admin');
});


Route::group(['middleware'=>['cors']],function(){
  Route::get('libros','BookController@index');
  Route::get('libros/buscar/{id}','BookController@show');
  Route::post('libros/guardar','BookController@store');
  Route::put('libros/update/{id}','BookController@update');
  Route::delete('libros/delete/{id}','BookController@destroy');

});

Route::group(['prefix'=>'api'],function(){
  Route::apiResource('libros','BookController');
});

//rutas paypal
Route::get('/paypalxd', 'PaymentController@payWithPayPal')->name('paypalxd');
Route::get('/status', 'PaymentController@payPalStatus')->name('status');

Route::post('usuario','VentaController@VentaForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user','HomeController@getUser')->name('user');