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
            $table->string('judul_report')->nullable()->default(null);
            $table->string('deskripsi_report');
            $table->integer('id_question')->references('id_question')->on('questions')->nullable()->default(null);
            $table->integer('id_answer')->references('id_answer')->on('answers')->nullable()->default(null);
            $table->integer('id_file')->references('id_file')->on('files')->nullable()->default(null);
            $table->integer('id_report_categories')->references('id_report_categories')->on('reportcategories')->nullable()->default(null);
            $table->integer('id_user')->references('id')->on('users')->nullable()->default(null);
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
