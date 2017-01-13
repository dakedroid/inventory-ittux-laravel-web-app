<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventarioModel extends Model
{
    protected $table='inventario';
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
