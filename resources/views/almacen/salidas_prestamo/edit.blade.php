@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Prestar salidas_prestamo:{{$salidas_prestamo->nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

      {!!Form::model($salidas_prestamo,['method'=>'PATCH','route'=>['salidas_prestamo.update',$salidas_prestamo->num_progre]])!!}
            {{Form::token()}}
						<table  class="table table-condensed" ALIGN="center" class="row">
						  		<td WIDTH="40%"><div class="form-group">
										<div class="form-group">
                    	<label for="num_progre">Num progre</label>
                    	<input type="text" name="num_progre" class="form-control" value="{{$salidas_prestamo->num_progre}}" placeholder="Num progre ...">
                    </div>

										<div class="form-group">
												<label for="clave">Clave</label>
												<input type="text" name="clave" class="form-control" value="{{$salidas_prestamo->clave}}">
										</div>
										<div class="form-group">
										<label for="nombre">Nombre herramienta</label>
										<input type="text" name="nombre" class="form-control" value="{{$salidas_prestamo->nombre}}" placeholder="Nombre herramienta...">
									</div>
									<div class="form-group">
										<label for="categoria">Categoria</label>
										<select name="categoria" class="form-control">
											<option value="{{$salidas_prestamo->categoria}}">{{$salidas_prestamo->categoria}}</option>
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
											<option>salidas_prestamos</option>
											<option>Señalizacion</option>
											<option>Aceites y lubricantes</option>
											<option>Automotriz</option>
											<option>Electronica</option>
											<option>Iluminacion</option>
											<option>Computo y telefonia</option>
										</select>

									</div>

										<div class="form-group">
											<label for="cantidad">Cantidad Total</label>
											<input type="text" name="cantidad" class="form-control" value="{{$salidas_prestamo->cantidad}}" placeholder="Cantidad...">
										</div>

											<div class="form-group">
												<label for="unidad">Unidad</label>
												<select name="unidad" class="form-control">
													<option value="{{$salidas_prestamo->unidad}}">{{$salidas_prestamo->unidad}}</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
												</select>
													</div>
												</td>
									<td WIDTH="50%">
										<div class="form-group">
											<label for="c_prestar">Cantidad a prestar</label>
											<input type="text" name="c_prestar" class="form-control"  placeholder="Cantidad a dar...">

										</div>
										<div class="form-group">
											<label for="portador">Portador</label>
											<select name="portador" class="form-control">
												<option>DIRECCION</option>
												<option>SUBDIRECCION DE PLANEACION Y VINCULACION</option>
												<option>DEPTO. DE PLANEACION, PROGRAMACION Y PRES.</option>
												<option>DEPTO. DE GESTION TECNOLOGICA Y VINCULACION</option>
												<option>DEPTO. DE COMUNICACION Y DIFUSION</option>
												<option>DEPTO. ACTIVIDADES EXTRAESCOLARES</option>
												<option>DEPTO. DE SERVICIOS ESCOLARES</option>
												<option>CENTRO DE INFORMACION</option>
												<option>SUBDIRECCION ACADEMICA</option>
												<option>DEPTO. DE CIENCIAS BASICAS</option>
												<option>DEPTO. DE SISTEMAS Y COMPUTACION</option>
												<option>DEPTO. DE METAL MECANICA</option>
												<option>DEPTO. DE CIENCIAS DE LA TIERRA</option>
												<option>DEPTO. DE QUIMICA Y BIOQUIMICA</option>
												<option>DEPTO. DE ELECTRICA ELECTRONICA</option>
												<option>DEPTO. CIENCIAS ECONOMICO ADMINISTRATIVAS</option>
												<option>DESARROLLO ACADEMICO</option>
												<option>DIVISION DE ESTUDIOS PROFESIONALES</option>
												<option>POSGRADO</option>
												<option>SUBDIRECCION ADMINISTRATIVA</option>
												<option>DEPTO. DE RECURSOS FINANCIEROS</option>
												<option>RECURSOS HUMANOS</option>
												<option>DEPTO. DE RECURSOS MATERIALES Y SERVICIOS</option>
												<option>CENTRO DE COMPUTO</option>
												<option>DEPTO. DE MANTENIMIENTO DE EQUIPO</option>

											</select>
										</div>
										<div class="form-group" ALIGN="center" class="row">
										<button class="btn btn-primary" type="submit">Guardar</button>
										<button class="btn btn-danger" type="reset">Cancelar</button>
										</div>
									</td>
						      </table>

			{!!Form::close()!!}
	</div>
	</div>
@endsection
