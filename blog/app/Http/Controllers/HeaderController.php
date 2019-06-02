<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Client;
use App\Header;

class HeaderController extends Controller
{
	//funcion para crear un nuevo registro de cabeceras de venta de productos o prestacion de servicios
	public function store(Request $request)
	{
		return Header::create([
			'user_id' => $request->user_id,
			'client_id' => $request->client_id,
			'type' => 'venta',
		]);
	}

	//funcion para mostrar el index para realizar una nueva venta de producto
 	public function index_new_sale_product()
	{
		$list_products = Product::all();
		$list_clients = Client::all();
		$list_products = Product::all();
		return view('new_sale_product', compact('list_products', 'list_clients', 'list_products'));
	}
	//funcion para mostrar el index, lista de todas las ventas de productos
	public function index_sale_products()
	{
		$list_headers = Header::where('type', '=', 'venta')->get();
		return view('sale_products', compact('list_headers'));
	}


	//funcion para mostrar el index para realizar una nueva prestacion de servicios
	public function index_new_provision_service()
	{
		return view('new_provision_service', compact('list_products', 'list_clients', 'list_products'));
	}
	//funcion para mostrar el index, lista de todas las ventas de productos
	public function index_provision_services()
	{
		$list_services = Header::where('type', '=', 'prestacion')->get();
		return view('provision_services', compact('list_services'));
	}
}
