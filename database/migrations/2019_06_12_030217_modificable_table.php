<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModificableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modificable', function (Blueprint $table) { 
            $table->bigIncrements('id')->unique();
            $table->string('logo');
            $table->string('banner'); 
            $table->string('innovacion'); 
            $table->string('in_img'); 
            $table->string('responsabilidad'); 
            $table->string('resp_img'); 
            $table->string('diferenciadores'); 
            $table->string('dif_img'); 
            $table->string('acerca'); 
            $table->string('terminos'); 
            $table->string('politicas'); 
            $table->string('facebook'); 
            $table->string('instagram'); 
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
