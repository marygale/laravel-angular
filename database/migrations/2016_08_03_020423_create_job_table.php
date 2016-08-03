<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->increments('job');
            $table->string('title', 512);
            $table->string('description', 9000);
            $table->unsignedInteger('budget_type');
            $table->float('minbudget');
            $table->float('maxbudget');
            $table->unsignedInteger('user');
            $table->unsignedInteger('freelancers_required');
            $table->unsignedInteger('duration');
            $table->unsignedInteger('status');
            $table->date('closed');
            $table->date('start_date');
            $table->string('slug', 512);
            $table->unsignedInteger('timeline');
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
        Schema::drop('job');
    }
}
