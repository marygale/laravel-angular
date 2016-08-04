<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends \Eloquent
{
    protected $table = 'category';
    protected $primaryKey = 'category';
    protected $fillable = [
        'name',
        'label'
    ];

    public function get_all_category()
    {
        return DB::table('category')->get();
    }
}
