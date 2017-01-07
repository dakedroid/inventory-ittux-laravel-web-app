<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrestamoModel extends Model
{
  	protected $table='prestamo';
    protected $primaryKey='num_progre';
    public $timestamps=false;
    protected $fillable=[
      'nombre',
      'clave',
      'categoria',
      'tipo',
      'cantidad',
      'unidad',
      'portador',
      'producto'
    ];
    protected $guarded=[

    ];
}
