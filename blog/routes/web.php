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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//-----users o empleados--------//
	Route::get('/users', 'UserController@index')->name('users');
	Route::resource('/user', 'UserController');
	Route::delete('/users/{user}', 'UserController@destroy');

//-----proveedores--------//
	Route::get('/providers', 'ProviderController@index')->name('providers');
	Route::resource('/provider', 'ProviderController');
	Route::delete('/providers/{provider}', 'ProviderController@destroy');

//-------rols--------//
	Route::get('/rols', 'RolController@index')->name('rols');
	Route::resource('/rol', 'RolController');
	Route::delete('/rols/{rol}', 'RolController@destroy');

//-----products--------//
	Route::get('/products', 'ProductController@index')->name('products');
	Route::resource('/product', 'ProductController');

//-----ventas----------//
	Route::get('/sales', 'SaleController@index')->name('sales');
