<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Service;
use App\Client;
use App\Header;
use App\Header_product;
use PDF;

class HeaderController extends Controller
{
	//funcion para crear un nuevo registro de cabeceras de venta de productos o prestacion de servicios
	public function store_sale(Request $request)
	{
		return Header::create([
			'user_id' => $request->user_id,
			'client_id' => $request->client_id,
			'type' => 'venta',
		]);
	}
	//funcion para crear un nuevo registro de cabeceras de venta de productos o prestacion de servicios
	public function store_provision(Request $request)
	{
		return Header::create([
			'user_id' => $request->user_id,
			'client_id' => $request->client_id,
			'type' => 'prestacion',
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
		$list_clients = Client::all();
		$list_services = Service::all();
		return view('new_provision_service', compact('list_services', 'list_clients'));
	}
	//funcion para mostrar el index, lista de todas las ventas de productos
	public function index_provision_services()
	{
		$list_services = Header::where('type', '=', 'prestacion')->get();
		return view('provision_services', compact('list_services'));
	}
	//factura pdf de una cabera
	public function get_bill (Request $request, $id)
    {
    	$header = Header::findOrFail($id);
    	$header_products  = Header_product::with('product')->where('header_id','=', $id)->get();
    	$pdf = PDF::loadView('bill', compact('header', 'header_products'));
    	return $pdf->stream();
    }
}
