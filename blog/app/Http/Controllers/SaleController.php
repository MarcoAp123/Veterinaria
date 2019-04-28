<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    //funcion para mostrar el index para realizar una venta
    public function index()
    {
        return view('sales');
    }
}
