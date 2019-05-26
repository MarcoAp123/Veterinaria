@extends('layouts.app')

@section('content')
  <!----- index de empleados ----->
  <section class="content">
    <h3>Lista De Usuarios</h3>
    <div id="div-alert">
      @include ('flash::message')
    </div>
    <button type="button" class="btn btn-success col-md-2 col-md-offset-10" data-toggle="modal" data-target="#modal-user-create">Nuevo Empleado <i class="fa fa-user-plus"></i></button>

    <!----- tabla de registros de empleados ----->
    <div class="box-body">
      <div class="box-header"></div>      
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>E-mail</th>
          <th>Cargo</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($list_users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->rol->description }}</td>
            <td><button class="btn btn-warning col-md-9" data-toggle="modal" data-myuser_id='{{$user->id}}' data-myname='{{$user->name}}' data-myemail='{{$user->email}}' data-myrol_id='{{$user->rol_id}}' data-target="#modal-user-edit"> <i class="fa fa-wrench"></i></button></td>
            <td>
              <form action="/users/{{$user->id}}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="button" class="btn btn-danger btn-delete col-md-7"> <i class="fa fa-trash"></i></button></td> 
              </form>              
            </tr>
          @endforeach                  
        </tbody>
      </table>
    </div>
    <!----- Fin de la tabla de empleados ----->


    <!----- Modal de creacion de empleado ----->
    <div class="modal fade" id="modal-user-create">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-plus"></i> Agregar Nuevo Empleado </h4>
          </div>
          <div class="modal-body">
            <h4 class="modal-title"> Empleado : </h4>
            <br>
            <form action="{{ action('UserController@store') }}" method="POST" class="form-horizontal" role='form'>
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nombre</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre Completo" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="ejemplo@gmail.com" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Rol</label>
                  <div class="col-sm-4">
                    <select class="form-control select2" name="rol_id">
                      @foreach ($list_roles as $rol)
                          <option value="{{ $rol->id }}">{{ $rol->description }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">Contraseña</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Contraseña" name="password">
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


    <!----- Modal de edicion de empleado ----->
    <div class="modal fade" id="modal-user-edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-wrench"></i> Editar Empleado</h4>
          </div>
          <div class="modal-body">
            <h4 class="modal-title"> Empleado : </h4>
            <form action="{{ route('user.update', 'test') }}" method="POST" class="form-horizontal">
              {{ method_field('PATCH') }}
              {{ csrf_field() }}
              <div class="box-body">
                <input type="hidden" name="user_id" id="user_id">
                <div class="form-group">
                <label class="col-sm-3 control-label">Nombre </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="name" id="name">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Email </label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" name="email" id="email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Rol  </label>
                <div class="col-sm-5">
                  <select class="form-control" name="rol_id" id="rol_id">
                    @foreach ($list_roles as $rol)
                        <option value="{{ $rol->id }}">{{ $rol->description }}</option>
                    @endforeach
                  </select>
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