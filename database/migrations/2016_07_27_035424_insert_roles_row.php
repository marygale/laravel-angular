<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertRolesRow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::transaction(function(){
           DB::table('roles')->insert([
              ['name' => 'super_admin', 'label' => 'Admin'],
              ['name' => 'editor', 'label' => 'Content Editor'],
              ['name' => 'author', 'label' => 'Author'],
              ['name' => 'subscriber', 'label' => 'Subscriber']
           ]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
