<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HerramientaModel extends Model
{

	protected $table = 'herramienta_existencia';
	protected $primarykey = 'num_progre';
	public $timestamps = false;
	protected $fillable = [
		'nombre',
		'clave',
		'categoria',
		'cantidad',
		'unidad',
		'condicion',
	];
	protected $guarded = [
		
	];

}
