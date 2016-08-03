<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends \Eloquent
{
    protected $table = 'project';
    protected $primaryKey = 'project';
    protected $fillable = [
        'job',
        'title',
        'description',
        'status'
    ];

    public function _job()
    {
        return $this->hasOne(Job::class, 'project', 'project');
    }


}
