<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('iin');
            $table->string('gpa');
            $table->string('phone');
            $table->string('email');
            $table->text('about_text')->nullable();
            $table->string('university')->nullable();
            $table->string('education_type')->nullable();
            $table->integer('salary')->nullable();
            $table->integer('experience')->nullable();
            $table->integer('schedule')->nullable();
            $table->integer('employment_type')->nullable();
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('candidate');
    }
}
