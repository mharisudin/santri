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
        Schema::create('teacher_educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id')->nullable();

            $table->string('level')->nullable();
            $table->string('school')->nullable();
            $table->integer('entry_year')->nullable();
            $table->integer('graduation_year')->nullable();
            $table->string('academic_degree')->nullable();
            $table->string('number_degree')->nullable();

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
        Schema::dropIfExists('teacher_education');
    }
};
