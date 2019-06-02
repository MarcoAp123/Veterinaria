<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Provider;


class ProductController extends Controller
{
    //funcion para mostrar el index de todos los rols
    public function index()
    {
        $list_products = Product::all();
        $list_providers = Provider::all();
        return view('products', compact('list_products', 'list_providers'));
    }
    //funcion para crear un nuevo registro de rol
    public function store(Request $request)
    {
    	$product = Product::create([
            'provider_id' => $request->provider_id,
            'detail' => $request->detail,
            'category' => $request->category,
            'unit_cost' => $request->unit_cost,
            'sale_price' => $request->sale_price,
            'cantidad' => 0,
            's_min' => $request->s_min,
        ]);
        flash(' El nuevo Producto "'.$product->detail.' '.$product->category.' '.$product->unit_cost.' "ha sido creado con exitosamente! ')->success();
        return back();
    }
    //funcion para editar el registro de un rol 
    public function update(Request $request)
    {
    	$product = Product::findOrFail($request->product_id);
    	$product->update($request->all());
        flash(' El producto "'.$product->detail.''.$product->category.'" ha sido modificado exitosamente! ')->warning();
        return back();
    }
}
