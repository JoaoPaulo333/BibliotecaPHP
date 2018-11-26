<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->increments('id');
            $table->string('data');
            $table->integer('Livro_id')->unsigned();
            $table->integer('Usuario_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('Livro_id')->references('id')->on("Livro")->onDelete('cascade');
            $table->foreign('Usuario_id')->references('id')->on("Usuario")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}
