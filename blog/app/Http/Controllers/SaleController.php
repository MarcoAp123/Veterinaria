<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Client;
use App\Header;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
	//funcion para mostrar el index para realizar una venta
	public function index()
	{
		$list_products = Product::all();
		$list_clients = Client::all();
		$list_products = Product::all();
		return view('sales_products', compact('list_products', 'list_clients', 'list_products'));
	}
	//funcion para crear un nuevo registro de cuerpo de servicio
	public function store(Request $request)
	{
		if($request->ajax()){
			Header::create($request->all());
			return response()->json([
				"mensaje" => "creado"
			]);
		}
	}
	//funcion para crear una nueva cabecera de venta de producto
	public function store2(Request $request)
	{	
		
		return view('sale', compact('service_header', 'client', 'list_products', '$list_service_bodies'));
	}
	//funcion para mostrar el index para realizar una venta
	public function getproduct(Request $request, $id)
	{
		return Product::where('id', '=', $id)->get();
	}
	public function getbody(Request $request, $id)
	{
		return Service_body::with('products')->where('service_header_id', '=', $id)->get();
	}
}
	