<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarritoModel extends Model
{
     protected $table='carrito';
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
      'destino'
      ];
      protected $guarded=[

      ];
}
