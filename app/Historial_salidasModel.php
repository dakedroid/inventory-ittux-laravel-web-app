<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial_salidasModel extends Model
{
     protected $table='historial_salidas';
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
      'destino',
      'fecha'
      ];
      protected $guarded=[

      ];
}
