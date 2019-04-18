@extends('layouts.app')

@section('content')
  <section class="content">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $users }}</h3>
          <p>Usuarios</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-stalker"></i>
        </div>
        <a href="#" class="small-box-footer">Más Información <i class="fa fa-plus-circle"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $users }}</h3>
          <p>Ventas</p>
        </div>
        <div class="icon">
          <i class="ion ion-cash"></i>
        </div>
        <a href="#" class="small-box-footer">Más Información <i class="fa fa-plus-circle"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">
          <h3>{{ $users }}</h3>
          <p>Productos</p>
        </div>
        <div class="icon">
          <i class="ion ion-medkit"></i>
        </div>
        <a href="#" class="small-box-footer">Más Información <i class="fa fa-plus-circle"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $users }}</h3>
          <p>Servicios</p>
        </div>
        <div class="icon">
          <i class="ion ion-heart"></i>
        </div>
        <a href="#" class="small-box-footer">Más Información <i class="fa fa-plus-circle"></i></a>
      </div>
    </div>
    </section>
@endsection
