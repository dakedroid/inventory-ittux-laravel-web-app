@extends('layouts.admin')
@section('contenido')
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<h3>Listado de articulos para salidas a prestamos</h3>
	<table WIDTH="100%" class="table table-condensed">
		<th WIDTH="50%">@include('almacen.salidas_prestamo.search')</th>
		<th WIDTH="20%"></th>
	</table>
</div>
<div class="" align="right">
    <img   align="right" class="img-responsive" src="{{asset ('img/ico-salidas.png')}}" width="150" height="150">
</div>
<div ALIGN="center" class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Num. Progreso</th>
					<th>Clave</th>
					<th>Nombre Articulo</th>
					<th>Categoria</th>
					<th>Tipo</th>
					<th>Cantidad</th>
					<th>Unidad</th>
					<th>Opciones</th>
				</thead>
				@foreach($inventario as $cat)
				<tr>
					<td>{{$cat->num_progre}}</td>
					<td>{{$cat->clave}}</td>
					<td>{{$cat->nombre}}</td>
					<td>{{$cat->categoria}}</td>
					<td>{{$cat->tipo}}</td>
					<td>{{$cat->cantidad}}</td>
					<td>{{$cat->unidad}}</td>
					<td>
						<a href="{{URL::action('InventarioController@edit',$cat->num_progre)}}"><button class="btn btn-info">Carrito</button></a>

					</td>
				</tr>
				@include('almacen.inventario.modal')
				@endforeach
			</table>
		</div>
		{{$inventario->render()}}
	</div>
</div>
@endsection
