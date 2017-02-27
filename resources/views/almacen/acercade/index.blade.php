@extends('layouts.admin')
@section('contenido')
<div>
	<h3>ACERCA DE ....</h3>
	<h3>Sistema de inventario 1.0</h3>
	<br>
	<h4>Ingenieria en Sistemas Computacionales</h4>
	<br>
	<table WIDTH="100%" class="table table-condensed">
			<thead>
		<th WIDTH="40%">DESARROLLADORES</th>
		<th WIDTH="40%">ASESOR</th>
			<thead>
				<tr>
					<td>Kevin David Molina Gomez</td>
					<td>M.S.C Jose Alberto Villalobos Serrano</td>
				</tr>
				<tr>
					<td>Jorge Luis Sixto Roberto</td>
				</tr>
	</table>
	<div align="center">
		<img  align="center" class="img-responsive" src="{{asset ('img/logo.png')}}" width="150" height="150">
	</div>

</div>

@endsection
