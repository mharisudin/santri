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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')->nullable();

            $table->string('father_name')->nullable();
            $table->string('father_nik')->nullable();
            $table->string('father_place_birth')->nullable();
            $table->date('father_date_birth')->nullable();
            $table->integer('father_edu')->nullable();
            $table->integer('father_job')->nullable();
            $table->integer('father_income')->nullable();
            $table->date('father_die')->nullable();
            $table->integer('father_disability')->nullable();
            $table->string('father_status')->nullable();

            $table->string('mother_name')->nullable();
            $table->string('mother_nik')->nullable();
            $table->string('mother_place_birth')->nullable();
            $table->date('mother_date_birth')->nullable();
            $table->integer('mother_edu')->nullable();
            $table->integer('mother_job')->nullable();
            $table->integer('mother_income')->nullable();
            $table->date('mother_die')->nullable();
            $table->integer('mother_disability')->nullable();
            $table->string('mother_status')->nullable();

            $table->string('guardian')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_nik')->nullable();
            $table->string('guardian_place_birth')->nullable();
            $table->date('guardian_date_birth')->nullable();
            $table->integer('guardian_edu')->nullable();
            $table->integer('guardian_job')->nullable();
            $table->integer('guardian_income')->nullable();
            $table->date('guardian_die')->nullable();
            $table->integer('guardian_disability')->nullable();
            $table->string('guardian_status')->nullable();

            $table->timestamps();

            $table->foreign('student_id')->references('id')
            ->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('families');
    }
};
