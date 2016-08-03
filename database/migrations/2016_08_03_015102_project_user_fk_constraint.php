<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProjectUserFkConstraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_user', function (Blueprint $table) {
            $table->foreign('project')
                  ->references('project')
                  ->on('project');
            $table->foreign('user')
                  ->references('user')
                  ->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_user', function (Blueprint $table) {
            $table->dropForeign('project_user_project_foreign');
            $table->dropForeign('project_user_user_foreign');
        });
    }
}
