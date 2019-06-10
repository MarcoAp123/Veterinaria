@extends('layouts.app')

@section('content')
  <section class="content">
    <h3>Prestacion De Servicios</h3>
      @include ('flash::message')
       <div id="message-delete" class="alert alert-danger" role="alert" style="display:none">
          <strong> El registro se eliminó correctamente.</strong>
      </div>
    <div class="box box-success">
      <div id="header-sale" class="box-header">
        <h2 class="box-title">Realizar Una Nueva Prestacion De Servicio </h2>
      </div>
      <div id="header-new-sale" class="box-header">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Venta Nro :</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" id="header_id">
          </div>
        </div>
      </div>
      <div class="box-body">
        <form action="/header" class="form-horizontal" method="POST">
          <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
          <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-1 control-label">Cliente</label>
            <div class="col-sm-4">
              <select class="form-control select2 " name="client_id" id="client_id">
                @foreach ($list_clients as $client)
                    <option value="{{$client->id}}">{{$client->name}}</option>
                @endforeach
              </select>
            </div>
            <label class="col-sm-1 control-label">C.I. </label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="ci" disabled>
            </div>
            <label class="col-sm-1 control-label">NIT</label>
            <div class="col-sm-2">
              <input type="number" class="form-control" id="nit" disabled>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-1 control-label">Empleado </label>
            <div class="col-sm-4">
              <input type="text" class="form-control" value="{{Auth::user()->name}} , {{ Auth::user()->rol->description }}" disabled>
            </div>
            <div id="div-boton">
              <button type="button" class="btn btn-success col-md-offset-5" id="create-header-services">Guardar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div id="div-services">
      <div class="box box-warning">
        <div class="box-body">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-1 control-label">Servicios </label>
            <div class="col-sm-5">
              <select class="form-control select2" style="width: 100%;" name="service_id" id="service_id">
                <option disabled selected> Seleccione una servicio </option>
                @foreach ($list_services as $service)
                  <option value="{{$service->id}}">{{$service->name}} - {{$service->description}}</option>
              @endforeach
              </select>
            </div>
            <button class="btn btn-success col-md-offset-4" data-toggle="modal" data-target="#modal-header_service-create"><i class="fa fa-plus"></i> Agregar Servicio </button>
          </div>
        </div>
        <div id="table-header_services">
          <table class="table table-bordered table-striped">
            <thead>
            <tr>
              <th class="col-sm-1">Opción</th>
              <th class="col-sm-4">Servicio</th>
              <th class="col-sm-2">Mascota</th>
              <th class="col-sm-2">Costo [Bs.]</th>
            </tr>
            </thead>
            <tbody id="tbody-header_products">

            </tbody>
          </table>
          <hr>
          <div class="row">
            <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 col-md-offset-7 control-label">Total : Bs./ </label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="sale-total" disabled>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <button class="btn btn-primary col-sm-1 col-sm-offset-8" id="bill"><i class="fa fa-file-pdf-o"></i> Facturar</button>

            <a href="{{route('new_sale_product')}}" class="btn btn-success col-sm-1 col-sm-offset-1">Guardar</a>
          </div>
          <hr>
        </div>
      </div>
    </div>

     <!----- Modal de creacion de rol ----->
    <div class="modal fade" id="modal-header_service-create">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-plus"></i> Agregar Nuevo Servicio </h4>
          </div>
          <div class="modal-body">
            <h4 class="modal-title"> Nuevo Rol : </h4>
            <br>
            <form action="{{ action('RolController@store') }}" method="POST" class="form-horizontal" role='form'>
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Nombre </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre de la mascota" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Tipo </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Tipo de mascota" name="type_pet">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Estado Preintervencion </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Abreviatura..." name="preintervention_state">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Procedimiento</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Procedimiento aplicado" name="applied_procedure">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Tamaño</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Tamaño de la mascota" name="size">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Edad </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Edad de la mascota" name="age_pet">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Peso </label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Peso de la mascota" name="weight_pet">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Costo del servicio </label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Costo del Servicio" name="cost">
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
  </section>    
@endsection