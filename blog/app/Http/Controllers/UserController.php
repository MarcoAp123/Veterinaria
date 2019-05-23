<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Rol;
use Carbon\Carbon;

class UserController extends Controller
{
	//funcion para mostrar el index de todos los empleados
    public function index()
    {
        $list_users = User::all();
        $list_roles = Rol::all();
        return view('users', compact('list_users', 'list_roles', 'chart'));
    }
    //funcion para crear un nuevo registro de empleado
    public function store(Request $request)
    {
    	$user = User::create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
    		'rol_id' => $request->rol_id,
    	]);
        flash(' El nuevo empleado "'.$user->rol->description.'" "'.$user->name.'" ha sido creado con exito! ')->success()->important();
        return back();
    }
    //funcion para editar el registro de un empleado 
    public function update(Request $request)
    {
    	$user = User::findOrFail($request->user_id);
    	$user->update($request->all());
        flash(' El empleado "'.$user->name.' '.$user->rol->description.'" ha sido modificado exitosamente! ')->warning()->important();
        return back();
    }
    //function para eliminar el registro de un empleado
    public function destroy(User $user)
    {
        $user->delete();
        flash(' El empleado "'.$user->name.' '.$user->rol->description.'" ha sido eliminado exitosamente! ')->error()->important();
        return back();
    } 
}
