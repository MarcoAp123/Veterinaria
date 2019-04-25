@extends('layouts.app')

@section('content')
  <!----- index de rols ----->
  <section class="content">
    
    <h3>Lista De Rols</h3>
    @include ('flash::message')
    <button class="btn btn-success col-sm-2 col-md-offset-10" data-toggle="modal" data-target="#modal-rol-create">Nuevo Rol <i class="fa fa-plus"></i></button>
    
    <!----- tabla de registros de rols ----->
    <div class="box-body">
      <div class="box-header">
      </div>      
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Abreviatura</th>
          <th>Nombre</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($list_rols as $rol)
          <tr>
            <td>{{ $rol->id }}</td>
            <td>{{ $rol->name }}</td>
            <td>{{ $rol->description }}</td>
            <td><button class="btn btn-warning col-md-6" data-toggle="modal" data-myrol_id='{{$rol->id}}' data-myname='{{$rol->name}}' data-mydescription='{{$rol->description}}' data-target="#modal-rol-edit"> <i class="fa fa-wrench"></i>
            </td> 
            <td>
              <form action="/rols/{{$rol->id}}" method="POST">
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
    <div class="modal fade" id="modal-rol-create">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-plus"></i> Agregar Nuevo Regitro </h4>
          </div>
          <div class="modal-body">
            <h4 class="modal-title"> Nuevo Rol : </h4>
            <br>
            <form action="{{ action('RolController@store') }}" method="POST" class="form-horizontal" role='form'>
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Abreviatura</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Abreviatura..." name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nombre</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre..." name="description">
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
    <div class="modal fade" id="modal-rol-edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-wrench"></i> Editar Registro</h4>
          </div>
          <div class="modal-body">
            <form action="{{ route('rol.update', 'test') }}" method="POST" class="form-horizontal">
              {{ method_field('PATCH') }}
              {{ csrf_field() }}
              <div class="box-body">
                <input type="hidden" name="rol_id" value="" id="rol_id">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Abreviatura</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nombre</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="description" name="description">
                  </div>
                </div>                              
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>  
    <!----- Fin del Modal de edicion de empleado ----->

  </section>
@endsection
