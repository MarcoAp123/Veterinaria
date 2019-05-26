<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header_product;

class Header_productController extends Controller
{
    public function store(Request $request)
    {
    	return Header_product::create($request->all());
    }

    public function getheader_products(Request $request, $id)
    {
    	return Header_product::with('product')->where('header_id','=', $id)->get();
    }
}
