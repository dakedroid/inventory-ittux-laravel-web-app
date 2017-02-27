@extends('layouts.admin')
@section('contenido')
<div class="row" >
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Antes de .....</h3>
    <h4>Ingresa las fechas de entradas deseadas</h4>
		<div class="" align="right">
		    <img   align="right" class="img-responsive" src="{{asset ('img/ico-salidas.png')}}" width="150" height="150">
		</div>		
<div class="form-group">
		<table>
			<thead>
					<th >Fecha inicio</th>
					</thead>
					<tr>
					<td><input type="date" name="" value=""  class="form-control" ></td>
					</tr>
		 </table>
<br><br>
		 <table>
					<thead>
		      <th >Fecha inicio</th>
		      </thead>
		      <tr>
		      <td><input type="date" name="" value=""  class="form-control"></td>
		      </tr>
		  </table>
				</div>
			<div class="form-group">
				<br>
				<a href="/pdf"><button class="btn btn-primary" type="submit">Generar</button></a>
			</div>
</div>
</div>

@endsection
