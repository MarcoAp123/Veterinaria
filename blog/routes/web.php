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



//-----services--------//
	//--------ruta---Index de los servicios---------//
	Route::get('/services', 'ServiceController@index')->name('services');
	//--------ruta---crea, edita servicios----------//
	Route::resource('/service', 'ServiceController');




//-----Orders--------//
	//--------ruta---Index de ordenes---------//
	Route::get('/orders', 'OrderController@index')->name('orders');
	//--------ruta---crea----------//
	Route::resource('/order', 'OrderController');




//-----headers--------//
	//--------ruta---crea cabeceras para venta de productos----------//
	Route::post('/header_sale', 'HeaderController@store_sale');
	//--------ruta---crea cabeceras para prestacion de servicios----------//
	Route::post('/header_provision', 'HeaderController@store_provision');
	//--------ruta---factura una cabecera----------//
	Route::get('/get_bill/{id}', 'HeaderController@get_bill');

		//--------ruta---Index nueva venta de productos---------//
		Route::get('/new_sale_product', 'HeaderController@index_new_sale_product')->name('new_sale_product');
		//--------ruta---Index registro de venta de productos---------//
		Route::get('/sale_products', 'HeaderController@index_sale_products')->name('sale_products');
		

		//--------ruta---Index nueva prestacion de servicios---------//
		Route::get('/new_provision_service', 'HeaderController@index_new_provision_service')->name('new_provision_service');
		//--------ruta---Index registro de prestacion de servicios---------//
		Route::get('/provision_services', 'HeaderController@index_provision_services')->name('provision_services');


		//--------ruta---Crea una venta de producto-------//
		Route::post('/header_product', 'Header_productController@store');
		//--------ruta---trae el detalle de una venta de producto-------//
		Route::get('/getheader_products/{id}', 'Header_productController@getheader_products');
		//--------ruta---elimina un registro----------//
		Route::delete('/header_product/{id}', 'Header_productController@destroy');




//-----ventas----------//
	Route::get('/sales', 'SaleController@index')->name('sales');
	Route::post('/sales', 'SaleController@store2');
	Route::resource('/sale', 'SaleController');
	Route::get('/getproduct/{id}', 'SaleController@getproduct');
	Route::get('/getbody/{id}', 'SaleController@getbody');

// pantallas informativas//
	Route::get('/medicinainterna', function () {
    return view('medicinainterna');
});
	Route::get('/oftalmologia', function () {
    return view('oftalmologia');
});
	Route::get('/dermatologia', function () {
    return view('dermatologia');
});
	Route::get('/cardiologia', function () {
    return view('cardiologia');
});
	Route::get('/odontologia', function () {
    return view('odontologia');
});
	Route::get('/oncologia', function () {
    return view('oncologia');
});
