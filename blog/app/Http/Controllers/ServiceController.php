<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    //funcion para mostrar el index de todos los servicios
    public function index()
    {
        $list_services = Service::all();
        return view('services', compact('list_services'));
    }
    //funcion para crear un nuevo servicio
    public function store(Request $request)
    {
    	$service = Service::create($request->all());
        flash(' El servicio "'.$service->name.'" "'.$service->description.'" ha sido creado con exito! ')->success();
        return back();
    }
    //funcion para edita el registro de un servicio
    public function update(Request $request)
    {
    	$service = Service::findOrFail($request->service_id);
    	$service->update($request->all());
        flash(' El servicio "'.$service->name.'" "'.$service->description.'" ha sido modificado exitosamente! ')->warning();
        return back();
    }
    //function para eliminar el registro de un servicio
    public function destroy(Service $service)
    {
        $service->delete();
        flash(' El servicio "'.$service->name.'" "'.$service->description.'" ha sido eliminado exitosamente! ')->error();
        return back();
    } 
}
