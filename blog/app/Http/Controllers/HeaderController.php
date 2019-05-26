<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Client;
use App\Header;

class HeaderController extends Controller
{
	//funcion para mostrar el index para realizar una venta
	public function index_sale_products()
	{
		$list_products = Product::all();
		$list_clients = Client::all();
		$list_products = Product::all();
		return view('sales_products', compact('list_products', 'list_clients', 'list_products'));
	}

	public function index_sale_services()
	{
		$list_products = Product::all();
		$list_clients = Client::all();
		$list_products = Product::all();
		return view('sales_services', compact('list_products', 'list_clients', 'list_products'));
	}

    public function store(Request $request)
	{
		return Header::create($request->all());
	}
}
