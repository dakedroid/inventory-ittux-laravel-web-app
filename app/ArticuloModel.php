<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticuloModel extends Model
{
    protected $table='articulo_existencia';
    protected $primaryKey='num_progre';
    public $timestamps=false;
    protected $fillable=[
    'nombre',
    'clave',
    'categoria',
    'cantidad',
    'unidad',
    'condicion'
    ];
    protected $guarded=[

    ];
}
