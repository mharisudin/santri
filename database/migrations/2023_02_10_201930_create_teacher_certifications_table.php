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
        Schema::create('teacher_certifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id')->nullable();

            $table->string('name')->nullable();
            $table->string('cert_status')->nullable();
            $table->string('cert_number')->nullable();
            $table->integer('is_passed')->nullable();
            $table->date('graduate_date')->nullable();
            $table->string('profession')->nullable();
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
        Schema::dropIfExists('teacher_certifications');
    }
};
