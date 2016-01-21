<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class trainee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainee', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('description');

            $table->string('class');
            $table->string('schoolmentor');

            $table->integer('supervisor_id')->unsigned();
            $table->foreign('supervisor_id')->references('id')->on('user')->onDelete('cascade');

            $table->integer('education_id')->unsigned();
            $table->foreign('education_id')->references('id')->on('education')->onDelete('cascade');

            $table->timestamp('startdate');
            $table->timestamp('enddate');

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
        Schema::drop('trainee');
    }
}
