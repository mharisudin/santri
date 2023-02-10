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
        Schema::create('classroms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_year_id')->nullable();
            $table->unsignedBigInteger('class_level_id')->nullable();
            $table->unsignedBigInteger('program_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->unsignedBigInteger('teacher_kmi_id')->nullable();
            $table->string('title')->nullable();
            $table->string('title_kmi')->nullable();
            $table->string('absent_number')->nullable();

            $table->integer('added_by')->nullable();
            $table->timestamps();

            // relationship
            $table->foreign('school_year_id')->references('id')
            ->on('school_years');
            $table->foreign('class_level_id')->references('id')
            ->on('class_levels');
            $table->foreign('program_id')->references('id')
            ->on('programs');
            $table->foreign('student_id')->references('id')
            ->on('students');
            $table->foreign('teacher_id')->references('id')
            ->on('teachers');
            $table->foreign('teacher_kmi_id')->references('id')
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
        Schema::dropIfExists('classroms');
    }
};
