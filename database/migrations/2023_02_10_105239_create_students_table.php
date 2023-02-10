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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('nipa')->nullable();
            $table->string('nisn')->nullable();
            $table->string('nis')->nullable();
            $table->string('nik')->nullable();
            $table->string('kk')->nullable();
            $table->string('place_birth')->nullable();
            $table->string('date_birth')->nullable();
            $table->string('akta_birth')->nullable();
            $table->integer('religion')->nullable();
            $table->string('citizenship')->nullable();
            $table->integer('disability')->nullable();

            $table->string('address')->nullable();
            $table->integer('rt')->nullable();
            $table->integer('rw')->nullable();
            $table->string('hamlet')->nullable();
            $table->string('village')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->integer('residence')->nullable();
            $table->integer('transportation')->nullable();
            $table->integer('child')->nullable();
            $table->integer('sibling')->nullable();
            $table->integer('is_orphan')->nullable();

            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('size')->nullable();

            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('wa')->nullable();
            $table->string('email')->nullable();

            $table->string('school')->nullable();
            $table->integer('school_npsn')->nullable();
            $table->integer('graduation')->nullable();
            $table->string('school_cert')->nullable();
            $table->string('school_province')->nullable();
            $table->string('school_city')->nullable();
            $table->string('school_district')->nullable();

            $table->integer('card_type')->nullable();
            $table->string('card_number')->nullable();
            $table->string('card_name')->nullable();

            $table->integer('added_by')->nullable();
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
        Schema::dropIfExists('students');
    }
};
