@extends('layouts.admin')
@section('contenido')
  <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Favor de llenar estos campos antes de continuar</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
{!! Form::open(array('action' => 'SalidasController@store', 'method' => 'POST', 'num_ord_compra' => 'num_ord_compra', 'captura' => 'captura', 'provedor' => 'provedor', 'actividad' => 'actividad', 'num_req' => 'num_req')) !!}
{{Form::token()}}
            <div class="form-group">
            	<label for="num_ord_compra">No. DE ORD DE COMPRA:</label>
            	<input type="text" name="num_ord_compra" class="form-control" placeholder="Numero de orden de compra...">
            </div>
            <div class="form-group">
                <label for="captura">CAPTURA O REMISIÓN:</label>
                <input type="text" name="captura" class="form-control" placeholder="Captura o remision...">
            </div>

              <div class="form-group">
              	<label for="provedor">PROVEDOR:</label>
              	<input type="text" name="provedor" class="form-control" placeholder="Provedor...">
              </div>

              <div class="form-group">
                <label for="actividad">PROYECTO, ACTIVIDAD O ACCION:</label>
                <input type="text" name="actividad" class="form-control" placeholder="Actividad...">
              </div>

                <div class="form-group">
                <label for="num_req">No. DE REQUISICIÓN:</label>
                <input type="text" name="num_req" class="form-control" placeholder="Numero de requision...">
              </div>


                <div class="form-group">
                   <a href="/pdf/salida_depto"> <button class="btn btn-primary" type="submit">Generar</button></a>
                </div>
		</div>
	</div>

  {!! Form::close() !!}
@endsection
