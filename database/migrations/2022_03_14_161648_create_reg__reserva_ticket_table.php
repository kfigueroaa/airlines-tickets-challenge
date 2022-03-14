<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegReservaTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg__reserva_ticket', function (Blueprint $table) {
            $table->id();
            $table->string('ciudad_origen', 255)->nullable();
            $table->string('ciudad_destino', 255)->nullable();
            $table->string('fecha_salida', 255)->nullable();
            $table->string('fecha_retorno', 255)->nullable();

            $table->unsignedBigInteger('id_reg_dato_vuelo')->comment('datos principales del ticket (precio, aerolínea)');
            $table->foreign('id_reg_dato_vuelo')->references('id')->on('reg__datos_vuelo');

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
        Schema::dropIfExists('reg__reserva_ticket');
    }
}
