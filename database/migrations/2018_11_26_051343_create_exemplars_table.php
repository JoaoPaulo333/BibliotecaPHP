<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExemplarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exemplar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('disponivel')->default(1);
            $table->string('arquivo');
            $table->integer('Livro_id');
            $table->foreign('Livro_id')->references('id')->on("Livro")->onDelete('cascade');
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
        Schema::dropIfExists('exemplar');
    }
}
