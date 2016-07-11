<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user');
            $table->string('username', 150)->unique();
            $table->string('email', 150)->unique();
            $table->string('password', 70);
            $table->string('temp_password', 70);
            $table->dateTime('last_login');
            $table->string('first_name', 64);
            $table->string('middle_name', 64);
            $table->string('last_name', 64);
            $table->string('title', 45);
            $table->string('description', 256);
            $table->unsignedInteger('likes');
            $table->string('country', 45);
            $table->string('state', 45);
            $table->string('city', 45);
            $table->string('cell_phone', 30);
            $table->enum('gender', ['m', 'f']);
            $table->unsignedInteger('role');
            $table->dateTime('last_visited');
            $table->string('remember_token', 100)->nullable();
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
