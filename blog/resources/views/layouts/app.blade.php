<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Veterinaria | Auxilio Animal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- alerts style -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- alert mensajes -->
  <link rel="stylesheet" href="js/jquery-alertable-master/jquery.alertable.css">

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  {!! Charts::assets() !!}
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }
    .example-modal .modal {
      background: transparent !important;
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]--> 

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-green-light fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b><i class="fa fa-paw"></i>A.A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b></b><i class="fa fa-paw"></i> Auxilio Animal</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                  {{ Auth::user()->name }}
                  <small>{{ Auth::user()->rol->description }}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat"><i class="fa fa-user"></i> Profile</a>
                </div>
                <div class="pull-right">
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                     @else
                    <a  href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    @endguest
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href=""><i class="fa fa-circle text-success"></i> En linea</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><p>Menú Del {{Auth::user()->rol->description}}</p></li>
        @if (Auth::user()->rol_id == 1)
        <li>
          <a href="#">
            <i class="fa fa-pie-chart"></i><span>Reportes</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd"></i><span>Venta de productos</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('new_sale_product')}}"><i class="fa fa-plus"></i> Realizar Nueva Venta </a></li>
            <li><a href="{{route('sale_products')}}"><i class="fa fa-align-justify"></i> Registro De Ventas </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-usd"></i><span>Prestacion de servicios</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('new_provision_service')}}"><i class="fa fa-plus"></i> Realizar Nueva Prestacion </a></li>
            <li><a href="{{route('provision_services')}}"><i class="fa fa-align-justify"></i> Registro De Servicios Realizados </a></li>
          </ul>
        </li>
        <li>
          <a href="{{route('products')}}">
            <i class="fa fa-eyedropper"></i><span>Productos</span>
          </a>
        </li>
        <li>
          <a href="{{route('services')}}">
            <i class="fa fa-heartbeat"></i><span>Servicios</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i><span>Usuarios</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('users')}}"><i class="fa fa-user-md"></i> Empleados </a></li>
            <li><a href="{{route('clients')}}"><i class="fa fa-user"></i> Clientes </a></li>
            <li><a href="{{route('rols')}}"><i class="fa fa-black-tie"></i> Roles </a></li>
          </ul>
        </li>
        <li>
          <a href="{{route('orders')}}">
            <i class="fa fa-cart-plus"></i><span>Pedidos</span>
          </a>
        </li>
        <li>
          <a href="{{ route('providers') }}">
            <i class="fa fa-inbox"></i><span>Proveedores</span>
          </a>
        </li>
        @elseif(Auth::user()->rol_id == 2)
        <li>
          <a href="">
            <i class="fa fa-usd"></i><span>Ventas </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-eyedropper"></i><span>Medicamentos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-exclamation-circle"></i> Medicamentos Por Caducar</a></li>
            <li><a href=""><i class="fa fa-list"></i> Inventario</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-heartbeat"></i><span>Cirugias</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-stethoscope"></i><span>Consultas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-plus-square"></i> Mayores </a></li>
            <li><a href="../../index2.html"><i class="fa fa-minus-square"></i> Menores  </a></li>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-medkit"></i><span >Tratamientos</span>
          </a>
        </li>
        @else
        <li>
          <a href="">
            <i class="fa fa-usd"></i><span>Ventas </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-eyedropper"></i><span>Medicamentos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-exclamation-circle"></i> Medicamentos Por Caducar</a></li>
            <li><a href=""><i class="fa fa-list"></i> Inventario</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-stethoscope"></i><span>Consultas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-plus-square"></i> Mayores </a></li>
            <li><a href="../../index2.html"><i class="fa fa-minus-square"></i> Menores </a></li>
          </ul>
        </li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
      </h1>
      <ol class="breadcrumb">
        
      </ol>
    </section>

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2019</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>


<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- alerts mensajes -->
<script src="js/jquery-alertable-master/jquery.alertable.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $("#div-alert").fadeIn();
  $('#div-alert').toggle(6000);
  $('#div-alert').show().delay(5000).fadeOut(8);
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable(
    {
      'paging'      : false,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true
    })
  })
</script>
<script>
  $('#modal-user-edit').on('show.bs.modal', function (event){
      var button = $(event.relatedTarget)
      var user_id = button.data('myuser_id')
      var name = button.data('myname')
      var email = button.data('myemail')
      var rol_id = button.data('myrol_id')
      var modal = $(this)
      modal.find('.modal-body #user_id').val(user_id);
      modal.find('.modal-body #name').val(name);
      modal.find('.modal-body #email').val(email);
      modal.find('.modal-body #rol_id').val(rol_id);
  })
</script>
<script>
  $('#modal-client-edit').on('show.bs.modal', function (event){
      var button = $(event.relatedTarget)
      var client_id = button.data('myclient_id')
      var name = button.data('myname')
      var ci = button.data('myci')
      var nit = button.data('mynit')
      var modal = $(this)
      modal.find('.modal-body #client_id').val(client_id);
      modal.find('.modal-body #name').val(name);
      modal.find('.modal-body #ci').val(ci);
      modal.find('.modal-body #nit').val(nit);
  })
</script>
<script>
  $('#modal-service-edit').on('show.bs.modal', function (event){
      var button = $(event.relatedTarget)
      var service_id = button.data('myservice_id')
      var name = button.data('myname')
      var description = button.data('mydescription')
      var modal = $(this)
      modal.find('.modal-body #service_id').val(service_id);
      modal.find('.modal-body #name').val(name);
      modal.find('.modal-body #description').val(description);
  })
</script>
<script>
  $('#modal-product-edit').on('show.bs.modal', function (event){
      var button = $(event.relatedTarget)
      var product_id = button.data('myproduct_id')
      var detail = button.data('mydetail')
      var category = button.data('mycategory')
      var unit_cost = button.data('myunit_cost')
      var sale_price = button.data('mysale_price')
      var s_min = button.data('mys_min')
      var modal = $(this)
      modal.find('.modal-body #product_id').val(product_id);
      modal.find('.modal-body #detail').val(detail);
      modal.find('.modal-body #category').val(category);
      modal.find('.modal-body #unit_cost').val(unit_cost);
      modal.find('.modal-body #sale_price').val(sale_price);
      modal.find('.modal-body #s_min').val(s_min);
  })
</script>
<script>
  $('#modal-provider-edit').on('show.bs.modal', function (event){
      var button = $(event.relatedTarget)
      var provider_id = button.data('myprovider_id')
      var name = button.data('myname')
      var phone = button.data('myphone')
      var email = button.data('myemail')
      var address = button.data('myaddress')
      var modal = $(this)
      modal.find('.modal-body #provider_id').val(provider_id);
      modal.find('.modal-body #name').val(name);
      modal.find('.modal-body #phone').val(phone);
      modal.find('.modal-body #email').val(email);
      modal.find('.modal-body #address').val(address);
  })
</script>
<script>
  $('#modal-rol-edit').on('show.bs.modal', function (event){
      var button = $(event.relatedTarget)
      var rol_id = button.data('myrol_id')
      var name = button.data('myname')
      var description = button.data('mydescription')
      var modal = $(this)
      modal.find('.modal-body #rol_id').val(rol_id);
      modal.find('.modal-body #name').val(name);
      modal.find('.modal-body #description').val(description);
  })
</script>
<script>
  $('.btn-delete').on('click', function(e){
    if (confirm('¿ Está seguro de eliminar el registro ?')) {
      $(this).parents('form:first').submit();
    }
  });
</script>
<script>
  $('#bill').click(function(){
    var header = $('#header_id').val();
    $.get('/get_bill/'+header, function(data){
      console.log(data);
    });
  });
</script>
<script>
  function remove_header_product(id) {
    $.alertable.confirm('¿ Está seguro de eliminar este registro ?').then(function(){
    var route = "http://localhost:8000/header_product/"+id+"";
    var token = $("#token").val();
    $.ajax({
      url: route,
      headers: {'X-CSRF-TOKEN': token},
      type: 'DELETE',
      dataType: 'json',
      success: function(data){
        if (data.success == 'true')
        {
          $("#message-delete").fadeIn();
          $('#message-delete').toggle(6000);
          $('#message-delete').show().delay(6000).fadeOut(6);
        }
      }
    }).done(function (data){
      var vacio = '';
      $('#sale-total').val(vacio);
      $('#tbody-header_products').empty();
      $('#sale-total').empty();
      var header = $('#header_id').val();
      var product = $('#product_id').val();
      var cantid = $('#cantid').val();
      var route = "http://localhost:8000/header_product";
      var token = $('#token').val();

      $('#table-header_products').show();
      $.get('/getheader_products/'+header, function(data){
        console.log(data);
        var linea = '';
        var total = 0;
        for (var i=0; i<data.length; i++){
          linea+='<tr><td><a href="#" class="btn btn-danger" onclick="remove_header_product('+data[i].id+')"><i class="fa fa-remove"></i></a></td><td>'+data[i].product.detail+'</td><td>'+data[i].product.category+'</td><td>'+data[i].cantidad+'</td><td>'+data[i].product.sale_price+'</td><td>'+data[i].product.sale_price*data[i].cantidad+'</td></tr>';
          total=data[i].product.sale_price*data[i].cantidad+total;
          $('#sale-total').val(total);
          $('#tbody-header_products').html(linea);
        };
      });
    });
  });
};
</script>
<script>
  $('#product_id').change(function(){
  var product = $(this).val();
  $.get('/getproduct/'+product, function(data){
    console.log(data);
    $('#stock').val(data[0].cantidad);
    $('#sale_price').val(data[0].sale_price);
  });
 });
</script>
<script>
  $('#order-product_id').change(function(){
  var product = $(this).val();
  $.get('/getproduct/'+product, function(data){
    console.log(data);
    $('#stock-product').val(data[0].cantidad);
  });
 });
</script>
<script>
  $('#header-sale').show();
  $('#header-new-sale').hide();
  $('#div-services').hide();
  $('#create-header-services').click(function (){
    var user = $('#user_id').val();
    var client = $('#client_id').val();
    var route = "http://localhost:8000/header_provision";
    var token = $('#token').val();

    $.ajax({
      url : route,
      headers : {'X-CSRF-TOKEN' : token},
      type : 'POST',
      dataType : 'json',
      data : {
        user_id : user,
        client_id : client,
      }
    }).done(function (data){
      var json_string = JSON.stringify(data);
      var obj = $.parseJSON(json_string);
      $('#header_id').val(obj.id);
      $('#header-sale').hide();
      $('#header-new-sale').show();
      $('#div-boton').hide();
      $('#div-services').show();
    });
  })
</script>
<script>
  $('#header-sale').show();
  $('#header-new-sale').hide();
  $('#div-productos').hide();
  $('#create-header-products').click(function(){
    var user = $('#user_id').val();
    var client = $('#client_id').val();
    var route = "http://localhost:8000/header_sale";
    var token = $('#token').val();

    $.ajax({
      url : route,
      headers : {'X-CSRF-TOKEN' : token},
      type : 'POST',
      dataType : 'json',
      data : {
        user_id : user,
        client_id : client,
      }
    }).done(function (data){
      var json_string = JSON.stringify(data);
      var obj = $.parseJSON(json_string);
      $('#header_id').val(obj.id);
      $('#header-sale').hide();
      $('#header-new-sale').show();
      $('#div-boton').hide();
      $('#div-productos').show();
    });
  });
</script>
<script>
  $(".alert").alert();
</script>
<script>
  $('#table-header_products').hide();
  $('#add-product').click(function(){
    var header = $('#header_id').val();
    var product = $('#product_id').val();
    var cantid = $('#cantid').val();
    var route = "http://localhost:8000/header_product";
    var token = $('#token').val();
    var stock = $('#stock').val();
    
    cant = parseInt(cantid);
    stoc = parseInt(stock);

    if (cant <= stoc) {
      $.ajax({
      url : route,
      headers : {'X-CSRF-TOKEN' : token},
      type : 'POST',
      dataType : 'json',
      data : {
        header_id : header,
        product_id : product,
        cantidad : cantid,
        }
      });
      $('#table-header_products').show();
      $.get('/getheader_products/'+header, function(data){
        console.log(data);
        var linea = '';
        var total = 0;
        for (var i=0; i<data.length; i++){
          linea+='<tr><td><a href="#" class="btn btn-danger" onclick="remove_header_product('+data[i].id+')"><i class="fa fa-remove"></i></a></td><td>'+data[i].product.detail+'</td><td>'+data[i].product.category+'</td><td>'+data[i].cantidad+'</td><td>'+data[i].product.sale_price+'</td><td>'+data[i].product.sale_price*data[i].cantidad+'</td></tr>';
          total=data[i].product.sale_price*data[i].cantidad+total;
          $('#sale-total').val(total);
          $('#tbody-header_products').html(linea);
        };
      });
    }else{
      $.alertable.alert('La cantidad que introdujo supera a la del stock, introduzca otro valor', {
        okButton: '<button class="alertable-ok btn btn-primary" type="button">OK</button>'
      }).always(function() {
        console.log('Alert dismissed');
      });
    };
  });
</script>
<script>
  $('#modal-sale_product-detail').on('show.bs.modal', function (event){
    $('#tbody-sale_products-detail').empty();
    var vacio = '';
    $('#sale-total-detail').val(vacio);
    var button = $(event.relatedTarget);
    var header = button.data('myheader_id');
    var modal = $(this);
    modal.find('.modal-body #header_id').val(header);

    $.get('/getheader_products/'+header, function(data){
      console.log(data);
      var linea = '';
      var total = 0;
      for (var i=0; i < data.length; i++) {
        linea+='<tr><td>'+data[i].id+'</td><td>'+data[i].product.detail+'</td><td>'+data[i].product.category+'</td><td>'+data[i].cantidad+'</td><td>'+data[i].product.sale_price+'</td><td>'+data[i].product.sale_price*data[i].cantidad+'</td></tr>';
        total=data[i].product.sale_price*data[i].cantidad+total;
        $('#sale-total-detail').val(total);
        $('#tbody-sale_products-detail').html(linea);
      }
    });
  })
</script>
<script>
    $('#client_id').change(function(){
    var client = $(this).val();
    $.get('/getclient/'+client, function(data){
      console.log(data);
      $('#ci').val(data[0].ci);
      $('#nit').val(data[0].nit);
    });
   });
</script>
<script>
  $('.select2').select2();
</script>
</body>
</html>