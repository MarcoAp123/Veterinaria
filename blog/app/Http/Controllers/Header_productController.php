<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header_product;
use App\Product;
use PDF;

class Header_productController extends Controller
{
	//funccion para crear un nuevo registro de venta de productos
    public function store(Request $request)
    {
        $product_id = $request->product_id;
        $cantidad = $request->cantidad;
        $product = Product::findOrFail($product_id);
        if ($cantidad <= $product->cantidad) {
            $product->update([
                'cantidad' => $product->cantidad-$cantidad,
            ]);
            return Header_product::create($request->all());
        }
    }
    //funcion para traer los detalles de una venta
    public function getheader_products(Request $request, $id)
    {
    	return Header_product::with('product')->where('header_id','=', $id)->get();
    }
    //function para eliminar el registro de un detalle de venta
    public function destroy($id)
    {
        $header_product = Header_product::findOrFail($id);
        $product_id = $header_product->product_id;
        $cantidad = $header_product->cantidad;
        $product = Product::findOrFail($product_id);
        $product->update([
            'cantidad' => $product->cantidad+$cantidad
        ]);
        $result = $header_product->delete();
        if ($result) 
        {
            return response()->json(['success' => 'true']);
        } 
        else 
        {
            return response()->json(['success' => 'false']);
        }
    } 
}
