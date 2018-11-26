<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('isbn');
            $table->string('edicao');
            $table->string('editora');
            $table->integer('ano');
            $table->integer('Autor_id')->unsigned();
            $table->foreign('Autor_id')->references('id')->on("Autor")->onDelete('cascade');
            $table->integer('Categoria_id')->unsigned();
            $table->foreign('Categoria_id')->references('id')->on("Categoria")->onDelete('cascade');
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
        Schema::dropIfExists('livro');
    }
}
