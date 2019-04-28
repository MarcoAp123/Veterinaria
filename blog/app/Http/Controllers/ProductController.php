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
    	$product = Product::create($request->all());
        flash(' El nuevo Producto "'.$product->detail.''.$product->category.' ha sido creado con exitosamente! ')->success()->important();
        return back();
    }
    //funcion para editar el registro de un rol 
    public function update(Request $request)
    {
    	$product = Product::findOrFail($request->product_id);
    	$product->update($request->all());
        flash(' El producto "'.$product->detail.''.$product->category.'" ha sido modificado exitosamente! ')->warning()->important();
        return back();
    }
}
