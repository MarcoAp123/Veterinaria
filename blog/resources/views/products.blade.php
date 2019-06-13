@extends('layouts.app')

@section('content')
  <!----- index de empleados ----->
  <section class="content">
    <h3>Inventario De Productos</h3>
    <div id="div-alert">
      @include ('flash::message')
    </div>
    <button type="button" class="btn btn-success col-md-2 col-md-offset-10" data-toggle="modal" data-target="#modal-product-create">Nuevo Producto <i class="fa fa-plus-square"></i></button>

    <!----- tabla de todos los productos----->
    <div class="box-body">
      <div class="box-header"></div>      
      <table id="example2" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Detalle</th>
          <th>Categoria</th>
          <th>Proveedor</th>
          <th>Costo Unitario(Bs.)</th>
          <th>Precio De Venta(Bs.)</th>
          <th>Stock</th>
          <th>U. Minimas</th>
          <th>Editar</th>
        </tr>
        </thead>
        <tbody>
          @foreach($list_products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->detail }}</td>
              <td>{{ $product->category }}</td>
              <td>{{ $product->provider->name }}</td>
              <td>{{ $product->unit_cost }}</td>
              <td>{{ $product->sale_price }}</td>
              <td>{{ $product->cantidad }}</td>
              <td>{{ $product->s_min }}</td>
              <td><button class="btn btn-warning col-md-9" data-toggle="modal" data-myproduct_id='{{$product->id}}' data-mydetail='{{$product->detail}}' data-mycategory='{{$product->category}}' data-myunit_cost='{{$product->unit_cost}}' data-mysale_price='{{$product->sale_price}}' data-mys_min="{{$product->s_min}}" data-target="#modal-product-edit"> <i class="fa fa-wrench"></i></button></td>
            </tr>
          @endforeach                          
        </tbody>
      </table>
    </div>

    <!----- Fin de la tabla de todos los productos ----->


    <!----- Modal de creacion de producto ----->
    <div class="modal fade" id="modal-product-create">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-plus"></i> Agregar Nuevo Producto </h4>
          </div>
          <div class="modal-body">
            <h4 class="modal-title"> Producto : </h4>
            <br>
            <form action="{{ action('ProductController@store') }}" method="POST" class="form-horizontal" role='form'>
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Detalle</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre del producto" name="detail">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Categoria</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Categoria" name="category">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Costo Unitario</label>
                  <div class="col-sm-3">
                    <input type="number" step="any" class="form-control" id="inputEmail3" placeholder="En Bs." name="unit_cost">
                  </div>
                  <label for="inputEmail3" class="col-sm-3 control-label">Precio Venta/u</label>
                  <div class="col-sm-3">
                    <input type="number" step="any" class="form-control" id="inputEmail3" placeholder="En Bs." name="sale_price">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Proveedor</label>
                  <div class="col-sm-5">
                    <select class="form-control select2" style="width: 100%" name="provider_id">
                      @foreach ($list_providers as $provider)
                          <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Stock minimo</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Unidades" name="s_min">
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
    <!----- Fin del Modal de creacion de producto ----->


    <!----- Modal de edicion de producto ----->
    <div class="modal fade" id="modal-product-edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><i class="fa fa-wrench"></i> Editar Empleado</h4>
          </div>
          <div class="modal-body">
            <h4 class="modal-title"> Producto : </h4>
            <form action="{{ route('product.update', 'test') }}" method="POST" class="form-horizontal">
              {{ method_field('PATCH') }}
              {{ csrf_field() }}
              <div class="box-body">
              <input type="hidden" name="product_id" id="product_id">
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Detalle</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="detail" placeholder="Nombre del producto" name="detail">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Categoria</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="category" placeholder="Categoria" name="category">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Costo Unitario</label>
                  <div class="col-sm-3">
                    <input type="number" class="form-control" id="unit_cost" placeholder="En Bs." name="unit_cost">
                  </div>
                  <label for="inputEmail3" class="col-sm-3 control-label">Precio Venta/u</label>
                  <div class="col-sm-3">
                    <input type="number" class="form-control" id="sale_price" placeholder="En Bs." name="sale_price">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Proveedor</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="provider_id" id="provider_id">
                      @foreach ($list_providers as $provider)
                          <option value="{{ $provider->id }}">{{ $provider->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">Stock minimo</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" id="s_min" name="s_min">
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
    <!----- Fin del Modal de edicion de producto ----->

  </section>
@endsection