@extends('layouts.admin')
@section('contenido')
  <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Antes de .....</h3>
      <h4>Ingresa las fechas de salidas deseadas</h4>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif


            <div class="form-group">
            	<label for="nombre">Fecha de inicio </label>
            	<input type="text" name="fechai" class="form-control" placeholder="Fecha inicio...">
            </div>
            <div class="form-group">
                <label for="clave">Fecha final</label>
                <input type="text" name="fechaf" class="form-control" placeholder="Fecha final...">
            </div>


                <div class="form-group">

                  <a href="/pdf"> <button class="btn btn-primary" type="submit">Generar</button></a>

            </div>



		</div>
	</div>
@endsection
