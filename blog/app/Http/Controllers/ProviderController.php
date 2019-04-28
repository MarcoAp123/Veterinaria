<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;

class ProviderController extends Controller
{
    //funcion para mostrar el index de todos los proveedores
    public function index()
    {
        $list_providers = Provider::all();
        return view('providers', compact('list_providers'));
    }
    //funcion para crear un nuevo registro de empleado
    public function store(Request $request)
    {
    	$provider = Provider::create($request->all());
        flash(' El nuevo empleado "'.$provider->name.'" ha sido creado con exito! ')->success()->important();
        return back();
    }
    //funcion para editar el registro de un empleado 
    public function update(Request $request)
    {
    	$provider = Provider::findOrFail($request->provider_id);
    	$provider->update($request->all());
        flash(' El empleado "'.$provider->name.' " ha sido modificado exitosamente! ')->warning()->important();
        return back();
    }
    //function para eliminar el registro de un empleado
    public function destroy(Provider $provider)
    {
        $provider->delete();
        flash(' El empleado "'.$provider->name.'" ha sido eliminado exitosamente! ')->error()->important();
        return back();
    }  
}
