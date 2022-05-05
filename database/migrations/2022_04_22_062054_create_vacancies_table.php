<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('experience');
            $table->string('schedule');
            $table->integer('salary')->nullable();
            $table->string('employment_type');
            $table->text('description');
            $table->unsignedBigInteger('company_id');
            $table->integer('status')->default(0);

            $table->foreign('company_id')
                ->references('id')
                ->on('company')
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
        Schema::dropIfExists('vacancies');
    }
}
