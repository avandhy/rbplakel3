<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id_answer');
            $table->string('judul');
            $table->string('isi_jawaban');
            $table->binary('gambar_jawaban')->nullable; //upload file, masih error
            $table->integer('id_user')->references('id')->on('users')->nullable;
            $table->integer('id_question')->references('id_question')->on('questions');
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
        Schema::dropIfExists('answers');
    }
}
