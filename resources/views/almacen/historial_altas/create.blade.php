@extends('layouts.admin')
@section('contenido')
  <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Antes de .....</h3>
      <h4>Ingresa las fechas de entradas deseadas</h4>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

      	<table>
        <thead>
        <th >Fecha inicio</th>
    		<th >Fecha Final  </th>
      </thead>

      <tr>
        <td>@include('almacen.historial_altas.picker')</td>
        <td>@include('almacen.historial_altas.picker')</td>
      </tr>
    	</table>




		</div>
	</div>
@endsection
