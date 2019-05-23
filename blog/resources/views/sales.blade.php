@extends('layouts.app')

@section('content')
  <section class="content">
    <div class="box box-success">
      <div class="box-header">
        <h2 class="box-title">Cabecera De Factura </h2>
      </div>
      <div class="box-body">
        <form action="/sales" class="form-horizontal" method="POST">
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
              <button type="button" class="btn btn-success col-md-offset-5" id="create-header">Guardar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div id="div-productos">
      <div class="box box-warning">
        <div class="box-body">
          <form action="/sale/detail" class="form-horizontal" method="POST" role='form'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <div class="form-group">
              <label class="col-sm-1 control-label">Productos </label>
              <div class="col-sm-4">
                <select class="form-control select2" name="product_id" id="product_id">
                  @foreach ($list_products as $product)
                    <option value="{{$product->id}}">{{$product->detail}}</option>
                  @endforeach
                </select>
              </div>
              <label class="col-sm-1 control-label">Cantidad </label>
              <div class="col-sm-1">
                <input type="number" class="form-control" name="cantidad" id="cantidad">
              </div>
              <label class="col-sm-1 control-label">Stock </label>
              <div class="col-sm-1">
                <input type="number" class="form-control" id="stock" disabled>
              </div>
              <label class="col-sm-1 control-label">P. Venta </label>
              <div class="col-sm-1">
                <input type="number" class="form-control" id="sale_price" disabled>
              </div>
              <button type="button" class="btn btn-success pull-center" id="add"><i class="fa fa-plus"></i></button>
            </div>
          </form>
        </div>
        <div id="">
          <table class="table table-bordered table-striped">
            <thead>
            <tr>
              <th class="col-sm-1">Opción</th>
              <th class="col-sm-3">Producto</th>
              <th class="col-sm-2">Cantidad</th>
              <th class="col-sm-2">Precio Venta</th>
              <th class="col-sm-3">SubTotal</th>
            </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>    
@endsection