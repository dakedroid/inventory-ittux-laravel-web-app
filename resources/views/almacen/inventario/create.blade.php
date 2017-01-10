@extends('layouts.admin')
@section('contenido')
  <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Articulo</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'almacen/inventario','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Nombre inventario</label>
            	<input type="text" name="nombre" class="form-control" placeholder="Nombre inventario...">
            </div>
            <div class="form-group">
                <label for="clave">Clave</label>
                <input type="text" name="clave" class="form-control" placeholder="Clave...">
            </div>
            <div class="form-group">
            	<label for="categoria">Categoria</label>
              <select name="categoria" class="form-control">
                <option>Papeleria</option>
                <option>Materiales electricos</option>
                <option>Fonteneria</option>
                <option>Ferreteria</option>
                <option>Limpieza</option>
                <option>Combustible</option>
                <option>Pinturas</option>
                <option>Jardineria</option>
                <option>Plastico</option>
                <option>Electrodomesticos</option>
                <option>Refacciones</option>
                <option>Mobiliario</option>
                <option>Herramientas</option>
                <option>Señalizacion</option>
                <option>Aceites y lubricantes</option>
                <option>Automotriz</option>
                <option>Electronica</option>
                <option>Iluminacion</option>
                <option>Computo y telefonia</option>
              </select>

            </div>

              <div class="form-group">
              	<label for="cantidad">Cantidad</label>
              	<input type="text" name="cantidad" class="form-control" placeholder="Cantidad...">
              </div>
                <div class="form-group">
                	<label for="unidad">Unidad</label>
                  <select name="unidad" class="form-control">
                    <option>Pieza</option>
                    <option>Kilogramos</option>
                    <option>Gramos</option>
                    <option>Metros</option>
                    <option>Lotes</option>
                    <option>Paquetes</option>

                  </select>
                </div>

                <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}

		</div>
	</div>
@endsection
