<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryRows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::transaction(function(){
           DB::table('category')->insert([
               ['name' => 'web_mobile_design', 'label' => 'Web & Mobile Design'],
               ['name' => 'other_software_development', 'label' => 'Other - Software Development'],
               ['name' => 'web_development', 'label' => 'Web Development'],
               ['name' => 'other_admin_support', 'label' => 'Other - Admin Support'],
               ['name' => 'virtual_assistant', 'label' => 'Personal / Virtual Assistant'],
               ['name' => 'web_research', 'label' => 'Web Research'],
               ['name' => 'data_entry', 'label' => 'Data Entry'],
               ['name' => 'graphic_design', 'label' => 'Graphic Design'],
               ['name' => 'seo', 'label' => 'SEO - Search Engine Optimization'],
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
        Schema::table('category', function(Blueprint $table){

        });
    }
}
