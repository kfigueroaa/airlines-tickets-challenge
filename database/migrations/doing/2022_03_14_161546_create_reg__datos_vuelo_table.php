<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegDatosVueloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg__datos_vuelo', function (Blueprint $table) {
            $table->id();
            $table->string('aerolinea', 255)->nullable();
            $table->string('tiempo_total_vuelo', 50);
            $table->integer('precio');

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
        Schema::dropIfExists('reg__datos_vuelo');
    }
}
