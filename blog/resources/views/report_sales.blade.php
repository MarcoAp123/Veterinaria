@extends('layouts.app')

@section('content')
  <section class="content">
    <h3>Reporte De Historias Clinicas</h3>
    <div class="box box-success">
      <div class="box-body">
        <form action="/report_sales_date" method="POST" role='form'>
          {{ csrf_field() }}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-1 control-label">Año</label>
            <div class="col-sm-3">
              <select class="form-control" name="año">
                <option selected disabled>Seleccione un año</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
              </select>
            </div>
            <label for="inputEmail3" class="col-sm-1 control-label">Mes</label>
            <div class="col-sm-3 ">
              <select class="form-control" name="mes">
                <option selected disabled>Seleccione un mes</option>
                <option value="01">Enero</option>
                <option value="02">Febrero</option>
                <option value="03">Marzo</option>
                <option value="04">Abril</option>
                <option value="05">Mayo</option>
                <option value="06">Junio</option>
                <option value="07">Julio</option>
                <option value="08">Agosto</option>
                <option value="09">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary col-sm-1 col-sm-offset-2"> Buscar</button>
          </div>
        </form>
      </div>             
    </div>

    <div id="chart">
      {!! $chart->html() !!}
    </div>
    
  </section>
  {!! Charts::scripts() !!}
  {!! $chart->script() !!}      
@endsection