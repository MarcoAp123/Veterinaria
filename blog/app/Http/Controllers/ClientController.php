<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Client;

class ClientController extends Controller
{
    //funcion para mostrar el index de todos los clientes
    public function index()
    {
        $list_clients = Client::all();
        return view('clients', compact('list_clients'));
    }
    //funcion para crear un nuevo registro de cliente
    public function store(Request $request)
    {
    	$client = Client::create($request->all());
        flash(' El nuevo empleado "'.$client->name.'" "'.$client->ci.'" ha sido creado con exito! ')->success();
        return back();
    }
    //funcion para editar el registro de un cliente
    public function update(Request $request)
    {
    	$client = client::findOrFail($request->client_id);
    	$client->update($request->all());
        flash(' El empleado "'.$client->name.'" "'.$client->ci.'" ha sido modificado exitosamente! ')->warning();
        return back();
    }
    //function para eliminar el registro de un cliente
    public function destroy(User $user)
    {
        $client->delete();
        flash(' El empleado "'.$client->name.'" "'.$client->ci.'" ha sido eliminado exitosamente! ')->error();
        return back();
    }
    //function para traer los datos del registro de un cliente
    public function getclient(Request $request, $id)
    {
        return Client::where('id', '=', $id)->get();
    } 
}
