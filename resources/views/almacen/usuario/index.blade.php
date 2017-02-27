@extends('layouts.admin')
@section('contenido')

  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
  		<h3>Listado de usuarios </h3>
      <table WIDTH="100%" class="table table-condensed">
        <th WIDTH="50%">@include('almacen.usuario.search')</th>
        <th WIDTH="20%"></th>
      </table>
</div>
<div class="" align="right">
    <img   align="right" class="img-responsive" src="{{asset ('img/ico-user.png')}}" width="150" height="150">
</div>

  <div ALIGN="center" class="row">
  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  		<div class="table-responsive">
  			<table class="table table-striped table-bordered table-condensed table-hover">
  				<thead>
  					<th>ID</th>
  					<th>Nombre usuario</th>
  					<th>Email</th>
  					<th>Opciones</th>
  				</thead>
                 @foreach ($usuarios as $cat)
  				<tr>
  					<td>{{ $cat->id}}</td>
            <td>{{ $cat->name}}</td>
  					<td>{{ $cat->email}}</td>
  					<td>
            <a href="{{URL::action('UsuarioController@edit',$cat->id)}}"><button class="btn btn-info">Editar</button></a>
             <a href="" data-target="#modal-delete-{{$cat->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>

            </td>
  				</tr>
  				@include('almacen.usuario.modal')
  				@endforeach
  			</table>
  		</div>
  		{{$usuarios->render()}}
  	</div>


    </div>
    </div>
@endsection
