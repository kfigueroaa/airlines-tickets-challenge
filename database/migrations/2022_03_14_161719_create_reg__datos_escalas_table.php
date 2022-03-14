<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegDatosEscalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg__datos_escalas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_reg_dato_vuelo')->comment('datos principales del ticket (precio, aerolínea)');
            $table->foreign('id_reg_dato_vuelo')->references('id')->on('reg__datos_vuelo');

            $table->string('ciudad', 255)->nullable();
            $table->string('tiempo_espera', 255)->nullable();
            $table->string('tiempo_vuelo', 255)->nullable();
            $table->string('tiempo_total', 255)->nullable();

            $table->softDeletes();
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
        Schema::dropIfExists('reg__datos_escalas');
    }
}
