<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dataIda');
            $table->string('dataVolta');
            $table->integer('Usuario_id');
            $table->foreign('Usuario_id')->references('id')->on("Usuario")->onDelete('cascade');
            $table->integer('Exemplar_id');
            $table->foreign('Exemplar_id')->references('id')->on("Exemplar")->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimo');
    }
}
