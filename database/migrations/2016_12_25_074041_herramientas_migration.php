<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HerramientasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herramienta_existencia', function($tabla){
            $tabla->increments('num_progre');
            $tabla->string('id');
            $tabla->string('nombre');
            $tabla->string('categoria');
            $tabla->integer('cantidad');
            $tabla->string('unidad');
            $tabla->string('producto');
            $tabla->integer('condicion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('herramienta_existencia');
    }
}
