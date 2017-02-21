@extends('layouts.admin')
@section('contenido')
<div>
	<h3>Listado de historial de articulos en salidas</h3>
	<table WIDTH="100%" class="table table-condensed" >
		<th WIDTH="50%">@include('almacen.historial_salida.search')</th>
		<th WIDTH="50%"><a href="{{url('almacen/historial_salida/create/')}}"> <button class="btn btn-primary" type="submit">Generar</button></a></th>
	</table>
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

				</tr>
				@include('almacen.inventario.modal')
				@endforeach
			</table>
		</div>
		{{$inventario->render()}}
	</div>
</div>
@endsection
