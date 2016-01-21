<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('name');
            $table->string('lastname');
            $table->string('address');
            $table->string('zip');
            $table->string('profileimagepath');

            $table->integer('trainee_id')->default(0)->unsigned();
            //$table->foreign('trainee_id')->references('trainee')->on('id')->onDelete('cascade');

            $table->integer('department_id')->default(0)->unsigned();
            $table->foreign('department_id')->references('id')->on('department')->onDelete('cascade');

            $table->integer('company_id')->default(0)->unsigned();
            $table->foreign('company_id')->references('id')->on('company')->onDelete('cascade');


            $table->timestamp('lastlogin');
            $table->rememberToken();
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
        Schema::drop('user');
    }
}
