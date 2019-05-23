@extends('layouts.app')

@section('content')
  <!----- index de clientes ----->
  <section class="content">
    <h3>Lista De Usuarios</h3>
    @include ('flash::message')
    <button type="button" class="btn btn-success col-md-2 col-md-offset-10" data-toggle="modal" data-target="#modal-client-create">Nuevo Cliente <i class="fa fa-user-plus"></i></button>

    <!----- tabla de registros de clientes ----->
    <div class="box-body">
      <div class="box-header"></div>      
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>CI</th>
          <th>NIT</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($list_clients as $client)
          <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->ci}}</td>
            <td>{{$client->nit}}</td>
            <td><button class="btn btn-warning col-md-9" data-toggle="modal" data-myclient_id='{{$client->id}}' data-myname='{{$client->name}}' data-myci='{{$client->ci}}' data-mynit='{{$client->nit}}'  data-target="#modal-client-edit"> <i class="fa fa-wrench"></i></button></td>
            <td>
              <form action="/clients/{{$client->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="button" class="btn btn-danger btn-delete col-md-7"> <i class="fa fa-trash"></i></button></td> 
              </form>              
            </tr>
          @endforeach                  
        </tbody>
      </table>
    </div>
    <!----- Fin de la tabla de cliente ----->


    <!----- Modal de creacion de cliente ----->
    <div class="modal fade" id="modal-client-create">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-plus"></i> Agregar Nuevo Cliente </h4>
          </div>
          <div class="modal-body">
            <h4 class="modal-title"> Cliente : </h4>
            <br>
            <form action="{{ action('ClientController@store') }}" method="POST" class="form-horizontal" role='form'>
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nombre</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre Completo" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">CI</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Cedula de identidad" name="ci">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">NIT</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="NIT" name="nit">
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
    <!----- Fin del Modal de creacion de cliente ----->


    <!----- Modal de edicion de empleado ----->
    <div class="modal fade" id="modal-client-edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-wrench"></i> Editar Empleado</h4>
          </div>
          <div class="modal-body">
            <h4 class="modal-title"> Empleado : </h4>
            <form action="{{ route('client.update', 'test') }}" method="POST" class="form-horizontal">
              {{ method_field('PATCH') }}
              {{ csrf_field() }}
              <div class="box-body">
                <input type="hidden" name="client_id" id="client_id">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nombre</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" placeholder="Nombre Completo" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">CI</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="ci" placeholder="Cedula de identidad" name="ci">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">NIT</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="nit" placeholder="NIT" name="nit">
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
    <!----- Fin del Modal de edicion de cliente ----->

  </section>
@endsection