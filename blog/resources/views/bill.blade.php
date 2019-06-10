<!DOCTYPE html>
<html >
<head>
	<th></th>
	<title>Recibo De Pago</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
		<div><FONT FACE="impact" SIZE=6 COLOR="Black">Veterinaria "Auxilio Animal"</FONT></div>
		<div><font SIZE=5 align="right" >Nit 10100101</font></div>
	<div class="row">
		<p align="left">Cliente : {{$header->client->name}} CI : {{$header->client->ci}} NIT : {{$header->client->nit}}</p>
	</div>
	<div class="row">
		Empleado : {{$header->user->name}}
	</div>
	<div class="row">
		<span style="font-family: Arial">Nro de Factura : {{ $header->id }}</span>
	</div>
	<div>
		<table  >
			<thead>
				<tr>
					<th>Producto</th>
					<th>Cantidad [u]</th>
					<th>Precio Venta[Bs.]</th>
				</tr>
			</thead>
			<tbody>
				<?php $total = 0; ?>
				@foreach ($header_products as $header_product)
					<?php $total = $header_product->cantidad*$header_product->product->sale_price + $total; ?>
					<tr>					
						<td>{{$header_product->product->detail}}</td>
		        <td>{{$header_product->cantidad}}</td>
		        <td>{{$header_product->product->sale_price}}</td>		      
					</tr>
				@endforeach			
			</tbody>
		</table>
		<div align="right">
				Total [Bs.] : {{$total}}
		</div>
	</div>
</body>
</html>