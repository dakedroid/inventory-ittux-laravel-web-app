<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('carrito', function(Blueprint $table){
          $table->increments('num_progre');
          $table->string('id');
          $table->string('nombre');
          $table->string('categoria');
          $table->integer('cantidad');
          $table->string('unidad');
          $table->string('portador');
          $table->string('producto');
          $table->integer('condicion');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('carrito');
    }
}
