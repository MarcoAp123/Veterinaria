@extends('layouts.app')

@section('content')
  <!----- index de empleados ----->
  <section class="content">
    <h3>Registro De Pedidos</h3>
    <div id="div-alert">
      @include ('flash::message')
    </div>
    <button type="button" class="btn btn-success col-md-2 col-md-offset-10" data-toggle="modal" data-target="#modal-order-create">Nuevo Pedido <i class="fa fa-cart-plus"></i></button>

    <!----- tabla de registros de empleados ----->
    <div class="box-body">
      <div class="box-header"></div>      
      <table id="example2" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Producto</th>
          <th>Categoria</th>
          <th>Cantidad</th>
          <th>Fecha</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($list_orders as $order)
            <tr>
              <td>{{ $order->id }}</td>
              <td>{{ $order->product->detail }}</td>
              <td>{{ $order->product->category }}</td>
              <td>{{ $order->cantidad }}</td>
              <td>{{ $order->created_at }}</td>              
            </tr>
          @endforeach                  
        </tbody>
      </table>
    </div>
    <!----- Fin de la tabla de ordenes ----->


    <!----- Modal de creacion de pedido ----->
    <div class="modal fade" id="modal-order-create">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-plus"></i> Agregar Nuevo Pedido </h4>
          </div>
          <div class="modal-body">
            <h4 class="modal-title"> Pedido : </h4>
            <br>
            <form action="{{ action('OrderController@store') }}" method="POST" class="form-horizontal" role='form'>
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Producto</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" style="width: 100%" name="product_id" id="order-product_id">
                      <option disabled selected> Seleccione una producto </option>
                      @foreach ($list_products as $product)
                        <option value="{{$product->id}}">{{$product->detail}}, {{$product->category}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Cantidad</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" placeholder="Unidades" name="cantidad" min="1">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Stock [u]</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" disabled id="stock-product">
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
    <!----- Fin del Modal de creacion de pedido ----->

  </section>
@endsection