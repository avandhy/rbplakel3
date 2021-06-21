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
            $table->integer('id_question')->references('id_question')->on('questions')->nullable();
            $table->integer('id_answer')->references('id_answer')->on('answers')->nullable();
            $table->integer('id_file')->references('id_file')->on('files')->nullable();
            $table->integer('id_report_categories')->references('id_report_categories')->on('reportcategories')->nullable();
            $table->integer('id_user')->references('id')->on('users')->nullable();
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
