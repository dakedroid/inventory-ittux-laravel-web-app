@extends('layouts.admin')
@section('contenido')

  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
  		<h3>Listado de Articulo </h3>
<table WIDTH="100%" class="table table-condensed">
  		@include('almacen.articulo.search')
      </table>
</div>

  <div ALIGN="center" class="row">
  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  		<div class="table-responsive">
  			<table class="table table-striped table-bordered table-condensed table-hover">
  				<thead>
  					<th>Num. Progreso</th>
            <th>Clave</th>
  					<th>Nombre articulo</th>
  					<th>Categoria</th>
            <th>Cantidad</th>
            <th>Unidad</th>
  					<th>Opciones</th>
  				</thead>
                 @foreach ($articulo as $cat)
  				<tr>
  					<td>{{ $cat->num_progre}}</td>
            <td>{{$cat->id}}</td>
  					<td>{{ $cat->nombre}}</td>
  					<td>{{ $cat->categoria}}</td>
            <td>{{ $cat->cantidad}}</td>
            <td>{{ $cat->unidad}}</td>
  					<td>

  						<a href="{{URL::action('ArticulosController@edit',$cat->num_progre)}}"><button class="btn btn-info">Carrito</button></a>
              <a href="" data-target="#modal-delete-{{$cat->num_progre}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
  					</td>
  				</tr>
  				@include('almacen.articulo.modal')
  				@endforeach
  			</table>
  		</div>
  		{{$articulo->render()}}
  	</div>

    </div>
</div>

@endsection
