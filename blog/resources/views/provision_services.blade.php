@extends('layouts.app')

@section('content')
  <!----- index registro de venta de productos ----->
  <section class="content">
    <h3>Registro Prestacion de Servicios</h3>
    <div id="div-alert">
      @include ('flash::message')
    </div>
    <!----- tabla de registros prestacion de servicios ----->
    <div class="box-body">
      <div class="box-header"></div>      
      <table id="example2" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Empleado</th>
          <th>Cliente</th>
          <th>Fecha</th>
          <th>Detalle</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($list_services as $service)
          <tr>
            <td>{{$service->id}}</td>
            <td>{{$service->user->name}}</td>
            <td>{{$service->client->name}}</td>
            <td>{{$service->created_at}}</td>
            <td><button class="btn btn-primary col-md-9" data-toggle="modal" data-myheader_id="{{$service->id}}" data-target="#modal-sale_product-detail"></i>Ver</button></td>
           </tr>
          @endforeach                  
        </tbody>
      </table>
    </div>
    <!----- Fin de la tabla de registros prestacion de servicios ----->

    <div class="modal fade" id="modal-sale_product-detail">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-file-text"></i> Detalle Venta De Producto</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">Nro De Venta : </label>
              <div class="col-sm-2">
                <input type="text" class="form-control" id="header_id" disabled>
              </div>
            </div>
            <br><br>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                <th>Id</th>
                <th>Producto</th>
                <th>Categoria</th>
                <th>Cantidad</th>
                <th>P. Venta</th>
                <th>Sub Total</th>
              </tr>
              </thead>
              <tbody id="tbody-sale_products-detail">
              </tbody>
            </table>
            <div class="row">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 col-md-offset-8 control-label">Total : Bs./ </label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="sale-total-detail" disabled>
                </div>
              </div>
            </div>
            <br>
            <div class="box-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection