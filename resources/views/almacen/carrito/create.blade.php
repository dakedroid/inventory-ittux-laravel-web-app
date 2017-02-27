@extends('layouts.admin')
@section('contenido')
  <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Antes de .....</h3>
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
            	<label for="nombre">Dato requerido 1</label>
            	<input type="text" name="nombre" class="form-control" placeholder="Nombre inventario...">
            </div>
            <div class="form-group">
                <label for="clave">Dato requerido 2</label>
                <input type="text" name="clave" class="form-control" placeholder="Clave...">
            </div>

              <div class="form-group">
              	<label for="cantidad">Dato requerido 3</label>
              	<input type="text" name="cantidad" class="form-control" placeholder="Cantidad...">
              </div>
                <div class="form-group">

                   <a href="/pdf/prestamo"> <button class="btn btn-primary" type="submit">Generar</button></a>

            </div>



		</div>
	</div>
@endsection
