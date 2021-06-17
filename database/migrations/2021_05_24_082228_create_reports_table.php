<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id_report');
            $table->string('judul_report')->nullable();
            $table->string('deskripsi_report');
            $table->integer('id_question')->references('id_question')->on('questions');
            $table->integer('id_answer')->references('id_answer')->on('answers');
            $table->integer('id_file')->references('id_file')->on('files');
            $table->integer('id_report_categories')->references('id_report_categories')->on('reportcategories');
            $table->integer('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('reports');
    }
}
