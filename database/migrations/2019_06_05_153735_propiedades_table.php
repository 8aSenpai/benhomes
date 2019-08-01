<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) { 
            $table->bigIncrements('id')->unique();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('direccion');
            $table->string('costo');
            $table->string('cuidad');
            $table->string('estado'); 
            $table->string('ubicacion');
            $table->string('recamaras');
            $table->string('banos');
            $table->string('estacionamientos');
            $table->string('niveles');
            $table->string('tipo');
            $table->string('disponibilidad');
            $table->timestamps();
            $table->string('imagen1');
            $table->string('imagen2');
            $table->string('imagen3');
            $table->string('imagen4'); 
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
