<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamo', function(Blueprint $table){
          $table->increments('num_progre');  
          $table->string('clave');
          $table->string('nombre');
          $table->string('categoria');
          $table->string('tipo');
          $table->integer('cantidad');
          $table->string('unidad');
          $table->string('portador');
          $table->string('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prestamo');
    }
}
