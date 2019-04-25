<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class RolController extends Controller
{
	//funcion para mostrar el index de todos los rols
    public function index()
    {
        $list_rols = Rol::all();
        return view('rols', compact('list_rols'));
    }
    //funcion para crear un nuevo registro de rol
    public function store(Request $request)
    {
    	$rol = Rol::create([
    		'name' => $request->name,
    		'description' => $request->description,    		
    	]);
        flash(' El nuevo rol "'.$rol->description.'" con la abreviatura "'.$rol->name.'" ha sido creado con exitosamente! ')->success()->important();
        return back();
    }
    //funcion para editar el registro de un rol 
    public function update(Request $request)
    {
    	$rol = Rol::findOrFail($request->rol_id);
    	$rol->update($request->all());
        flash(' El rol "'.$rol->description.'" con la abreviatura "'.$rol->name.'" ha sido modificado exitosamente! ')->warning()->important();
        return back();
    }
    //function para eliminar el registro de un rol
    public function destroy(Rol $rol)
    {
        $rol->delete();
        flash(' El rol "'.$rol->description.' con la abreviatura '.$rol->name.'" ha sido eliminado exitosamente! ')->error()->important();
        return back();
    }
}
