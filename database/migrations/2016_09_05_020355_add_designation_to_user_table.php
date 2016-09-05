<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDesignationToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->string('designation', 100)->after('title');
            $table->string('company', 100)->after('designation');
            $table->string('facebook')->after('description');
            $table->string('twitter')->after('facebook');
            $table->string('linkedin')->after('twitter');
            $table->string('googleplus')->after('linkedin');
            $table->string('skype')->after('googleplus');
            $table->tinyInteger('notify_job_post');
            $table->tinyInteger('notify_job_related');
            $table->tinyInteger('no_notification');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('designation');
            $table->dropColumn('company');
            $table->dropColumn('facebook');
            $table->dropColumn('twitter');
            $table->dropColumn('linkedin');
            $table->dropColumn('googleplus');
            $table->dropColumn('skype');
            $table->dropColumn('notify_job_post');
            $table->dropColumn('notify_job_related');
            $table->dropColumn('no_notification');
        });
    }
}
