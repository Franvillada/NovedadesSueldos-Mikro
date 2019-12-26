<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroNovedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_novedades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_legajo')->unsigned();
            $table->string('novedad');
            $table->decimal('cantidad');
            $table->dateTime('fecha');
            $table->boolean('informado');
            $table->timestamps();

            $table->foreign('id_legajo')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_novedades');
    }
}
