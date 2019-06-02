<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;

class OrderController extends Controller
{
    //funcion para mostrar el index de todos los pedidos
    public function index()
    {
        $list_orders = Order::all();
        $list_products = Product::all();
        return view('orders', compact('list_orders', 'list_products'));
    }
    //funcion para crear un nuevo registro de pedido
    public function store(Request $request)
    {	
    	$order = Order::create($request->all());
    	$product_id = $request->product_id;
        $cantidad = $request->cantidad;
        $product = Product::findOrFail($product_id);
    	$product->update([
    		'cantidad' => $product->cantidad+$cantidad,
    	]);
        flash(' El nuevo pedido de " '.$order->cantidad.' [u] del producto '.$order->product->detail.' '.$order->product->category.' " ha sido creado con exitosamente! ')->success();
        return back();
    }
}
