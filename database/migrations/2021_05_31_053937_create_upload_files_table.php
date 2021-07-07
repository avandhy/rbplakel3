<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_files', function (Blueprint $table) {
            $table->increments('id_file');
            $table->string('nama_file');
            $table->string('universitas_file');
            $table->string('matakuliah_file');
            $table->integer('semester_file');
            $table->string('file');
            $table->float('size');
            $table->char('extension');
            $table->integer('id_user')->references('id')->on('users')->nullable();
            $table->integer('id_file_categories')->references('id_file_categories')->on('file_categories')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upload_files');
    }
}
