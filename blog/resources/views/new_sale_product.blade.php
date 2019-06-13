@extends('layouts.app')

@section('content')
  <section class="content">
    <h3>Venta de Productos</h3>
      @include ('flash::message')
       <div id="message-delete" class="alert alert-danger" role="alert" style="display:none">
          <strong> El registro se eliminó correctamente.</strong>
      </div>
    <div class="box box-success">
      <div id="header-sale" class="box-header">
        <h2 class="box-title">Realizar Nueva Venta </h2>
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
              <button type="button" class="btn btn-success col-md-offset-5" id="create-header-products">Guardar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div id="div-productos">
      <div class="box box-warning">
        <div class="box-body">
          <form action="/header_producto" class="form-horizontal" method="POST" role='form'>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-1 control-label">Productos </label>
              <div class="col-sm-3">
                <select class="form-control select2" style="width: 100%;" name="product_id" id="product_id">
                  <option disabled selected> Seleccione una producto </option>
                  @foreach ($list_products as $product)
                    <option value="{{$product->id}}">{{$product->detail}}</option>
                  @endforeach
                </select>
              </div>
              <label for="inputEmail3" class="col-sm-1 control-label">Cantidad</label>
              <div class="col-sm-1">
                <input type="number" class="form-control" name="cantidad" id="cantid">
              </div>
              <label for="inputEmail3" class="col-sm-1 control-label">Stock [u]</label>
              <div class="col-sm-2">
                <input type="number" class="form-control" id="stock" disabled>
              </div>
              <label for="inputEmail3" class="col-sm-1 control-label">P. Venta [Bs.]</label>
              <div class="col-sm-2">
                <input type="number" class="form-control" id="sale_price" disabled>
              </div>
              <div class="row">
                <button type="button" class="btn btn-success col-sm-offset-10" id="add-product"><i class="fa fa-plus"></i> Agregar producto</button>
              </div>
            </div>
          </form>
        </div>
        <div id="table-header_products">
          <table class="table table-bordered table-striped">
            <thead>
            <tr>
              <th class="col-sm-0">Opción</th>
              <th class="col-sm-3">Producto</th>
              <th class="col-sm-3">Categoria</th>
              <th class="col-sm-2">Cantidad [u]</th>
              <th class="col-sm-2">Precio Venta [Bs.]</th>
              <th class="col-sm-2">SubTotal [Bs.]</th>
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
  </section>    
@endsection