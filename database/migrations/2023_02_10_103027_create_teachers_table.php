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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('niy')->nullable();
            $table->integer('nip')->nullable();
            $table->string('front_degree')->nullable();
            $table->string('name')->nullable();
            $table->string('back_degree')->nullable();
            $table->string('gender')->nullable();
            $table->string('place_birth')->nullable();
            $table->date('date_birth')->nullable();
            $table->string('blood')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('couple_name')->nullable();
            $table->string('is_marry')->nullable();
            $table->integer('child')->nullable();
            $table->string('email')->nullable();
            $table->string('npk')->nullable();
            $table->string('nuptk')->nullable();
            $table->date('tmt')->nullable();
            $table->string('assignment')->nullable();
            $table->string('teaching_hour')->nullable();
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
        Schema::dropIfExists('teachers');
    }
};
