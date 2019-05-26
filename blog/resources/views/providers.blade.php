@extends('layouts.app')

@section('content')
  <!----- index de empleados ----->
  <section class="content">
    <h3>Lista De Proveedores</h3>
    <div id="div-alert">
      @include ('flash::message')
    </div>
    <button type="button" class="btn btn-success col-md-2 col-md-offset-10" data-toggle="modal" data-target="#modal-provider-create">Nuevo Proveedor <i class="fa fa-user-plus"></i></button>

    <!----- tabla de registros de proveedores ----->
    <div class="box-body">
      <div class="box-header">
      </div>      
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Celular</th>
          <th>E-mail</th>
          <th>Direccion</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($list_providers as $provider)
          <tr>
            <td>{{ $provider->id }}</td>
            <td>{{ $provider->name }}</td>
            <td>{{ $provider->phone }}</td>
            <td>{{ $provider->email }}</td>
            <td>{{ $provider->address }}</td>
            <td><button class="btn btn-warning col-md-9" data-toggle="modal" data-myprovider_id='{{$provider->id}}' data-myname='{{$provider->name}}' data-myphone='{{$provider->phone}}' data-myemail='{{$provider->email}}' data-myaddress='{{$provider->address}}'data-target="#modal-provider-edit"> <i class="fa fa-wrench"></i></button>
            </td>
            <td>
              <form action="/providers/{{$provider->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="button" class="btn btn-danger btn-delete col-md-7"> <i class="fa fa-trash"></i></button></td> 
              </form>              
            </tr>
          @endforeach                  
        </tbody>
      </table>
    </div>
    <!----- Fin de la tabla de proveedores ----->


    <!----- Modal de creacion de proveedores ----->
    <div class="modal fade" id="modal-provider-create">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-plus"></i> Agregar Nuevo Proveedor </h4>
          </div>
          <div class="modal-body">
            <h4 class="modal-title"> Proveedor : </h4>
            <br>
            <form action="{{ action('ProviderController@store') }}" method="POST" class="form-horizontal" role='form'>
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nombre</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre Completo" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Celular</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="..." name="phone">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="ejemplo@gmail.com" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Direccion</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="#, calle, zona" name="address">
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
    <!----- Fin del Modal de creacion de proveedor ----->


    <!----- Modal de edicion de empleado ----->
    <div class="modal fade" id="modal-provider-edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-wrench"></i> Editar Empleado</h4>
          </div>
          <div class="modal-body">
            <h4 class="modal-title"> Empleado : </h4>
            <form action="{{ route('provider.update', 'test') }}" method="POST" class="form-horizontal">
              {{ method_field('PATCH') }}
              {{ csrf_field() }}
              <div class="box-body">
                <input type="hidden" name="provider_id" id="provider_id">
                <div class="form-group">
                <label class="col-sm-3 control-label">Nombre </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="name" id="name">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Celular </label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="phone" id="phone">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Email </label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" name="email" id="email">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Direccion </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="address" id="address">
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
