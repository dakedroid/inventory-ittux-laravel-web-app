<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HistorialSalidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_salidas', function(Blueprint $table){
          $table->increments('num_progre');
          $table->string('clave');
          $table->string('nombre');
          $table->string('categoria');
          $table->string('tipo');
          $table->integer('cantidad');
          $table->string('unidad');
          $table->string('portador');
          $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
