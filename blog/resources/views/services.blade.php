@extends('layouts.app')

@section('content')
  <!----- index de rols ----->
  <section class="content">
    <h3>Registro De Servicios</h3>
    <div id="div-alert">
      @include ('flash::message')
    </div>
    <button class="btn btn-success col-sm-2 col-md-offset-10" data-toggle="modal" data-target="#modal-service-create">Nuevo Servicio <i class="fa fa-plus"></i></button>
    
    <!----- tabla de registros de rols ----->
    <div class="box-body">
      <div class="box-header">
      </div>      
      <table id="example2" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($list_services as $service)
          <tr>
            <td>{{ $service->id }}</td>
            <td>{{ $service->name }}</td>
            <td>{{ $service->description }}</td>
            <td><button class="btn btn-warning col-md-6" data-toggle="modal" data-myservice_id='{{$service->id}}' data-myname='{{$service->name}}' data-mydescription='{{$service->description}}' data-target="#modal-service-edit"> <i class="fa fa-wrench"></i>
            </td> 
            <td>
              <form action="/services/{{$service->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="button" class="btn btn-danger btn-delete col-md-5"> <i class="fa fa-trash"></i></button></td> 
              </form>
            </td>
          </tr>
          @endforeach                  
        </tbody>
      </table>
    </div>
    <!----- Fin de la tabla de rols ----->


    <!----- Modal de creacion de rol ----->
    <div class="modal fade" id="modal-service-create">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-plus"></i> Agregar Nuevo Regitro </h4>
          </div>
          <div class="modal-body">
            <h4 class="modal-title"> Nuevo Servicio : </h4>
            <br>
            <form action="{{ action('ServiceController@store') }}" method="POST" class="form-horizontal" role='form'>
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nombre </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre del servicio" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Description</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Descripcion del servicio" name="description">
                  </div>
                </div>                              
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success pull-right">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!----- Fin del Modal de creacion de empleado ----->


    <!----- Modal de edicion de rol ----->
    <div class="modal fade" id="modal-service-edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-wrench"></i> Editar Registro</h4>
          </div>
          <div class="modal-body">
            <form action="{{ route('service.update', 'test') }}" method="POST" class="form-horizontal">
              {{ method_field('PATCH') }}
              {{ csrf_field() }}
              <div class="box-body">
                <input type="hidden" name="service_id" id="service_id">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nombre </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Description</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="description" name="description">
                  </div>
                </div>                              
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-warning">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>  
    <!----- Fin del Modal de edicion de empleado ----->

  </section>
@endsection
