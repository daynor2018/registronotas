<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('horario_id')->unsigned();
            $table->integer('dia_id')->unsigned();
            $table->integer('aula_id')->unsigned();
            $table->time('starttime')->nullable();
            $table->time('endtime')->nullable();
            $table->foreign('horario_id')->references('id')->on('horarios');
            $table->foreign('dia_id')->references('id')->on('dias');
            $table->foreign('aula_id')->references('id')->on('aulas');
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
        Schema::dropIfExists('detalle_horarios');
    }
}
