<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial_altasModel extends Model
{
    protected $table='historial_entradas';
    protected $primaryKey='num_progre';
    public $timestamps=false;
    protected $fillable=[
    'clave',
    'nombre',
    'categoria',
    'tipo',
    'cantidad',
    'unidad',
    'fecha'
    ];
    protected $guarded=[

    ];
}
