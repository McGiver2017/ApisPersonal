<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTecnologiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnologias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('tipotec_id')->unsigned();
            $table->foreign('tipotec_id')->references('id')->on('tipotecs');
            $table->string('descripcion');
            $table->string('creador')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tecnologias');
    }
}
