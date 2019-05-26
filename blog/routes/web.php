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

//-----users/ empleados--------//
	//--------ruta---Index de los usuarios----------//
	Route::get('/users', 'UserController@index')->name('users');
	//--------ruta---crea, edita usuarios----------//
	Route::resource('/user', 'UserController');
	//--------ruta---elimina usuarios----------//
	Route::delete('/users/{user}', 'UserController@destroy');



//-----users/ clients--------//
	//--------ruta---Index de los clientes----------//
	Route::get('/clients', 'ClientController@index')->name('clients');
	//--------ruta---crea, edita clientes----------//
	Route::resource('/client', 'ClientController');
	//--------ruta---elimina clientes----------//
	Route::delete('/clients/{client}', 'ClientController@destroy');
	//--------ruta---Trae los datos de un cliente especifico----------//
	Route::get('/getclient/{id}', 'ClientController@getclient');



//-----proveedores--------//
	//--------ruta---Index de los proveedores---------//
	Route::get('/providers', 'ProviderController@index')->name('providers');
	//--------ruta---crea, edita proveedores----------//
	Route::resource('/provider', 'ProviderController');
	//--------ruta---elimina proveedores----------//
	Route::delete('/providers/{provider}', 'ProviderController@destroy');



//-------rols--------//
	//--------ruta---Index de los roles---------//
	Route::get('/rols', 'RolController@index')->name('rols');
	//--------ruta---crea, edita roles----------//
	Route::resource('/rol', 'RolController');
	//--------ruta---elimina roles----------//
	Route::delete('/rols/{rol}', 'RolController@destroy');



//-----products--------//
	//--------ruta---Index de los productos---------//
	Route::get('/products', 'ProductController@index')->name('products');
	//--------ruta---crea, edita productos----------//
	Route::resource('/product', 'ProductController');



//-----headers--------//
	//--------ruta---Index venta de productos---------//
	Route::get('/sale_products', 'HeaderController@index_sale_products')->name('sale_products');
	//--------ruta---crea cabeceras----------//
	Route::post('/header', 'HeaderController@store');

		//--------ruta---Crea una venta-------//
		Route::post('/header_product', 'Header_productController@store');
		Route::get('/getheader_products/{id}', 'Header_productController@getheader_products');


//-----header/Product (Venta de productos)--------//
	Route::resource('/header_product', 'Header_productController');

//-----ventas----------//
	Route::get('/sales', 'SaleController@index')->name('sales');
	Route::post('/sales', 'SaleController@store2');
	Route::resource('/sale', 'SaleController');
	Route::get('/getproduct/{id}', 'SaleController@getproduct');
	Route::get('/getbody/{id}', 'SaleController@getbody');