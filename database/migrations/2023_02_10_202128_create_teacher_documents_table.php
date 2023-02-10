<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id')->nullable();

            $table->string('file_kk')->nullable();
            $table->string('file_ktp')->nullable();
            $table->string('file_npwp')->nullable();
            $table->string('file_rekening')->nullable();
            $table->string('file_ijazah')->nullable();
            $table->string('file_sertifikasi')->nullable();
            $table->timestamps();

            $table->foreign('teacher_id')->references('id')
            ->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_documents');
    }
};
