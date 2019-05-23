<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;

class HeaderController extends Controller
{
    public function store(Request $request)
	{
		if($request->ajax()){
			return Header::create($request->all());
		}
	}
}
