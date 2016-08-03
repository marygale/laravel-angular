<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Job extends \Eloquent
{
    protected $table = 'job';
    protected $primaryKey = 'job';
    protected $fillable = [
        'title',
        'description',
        'budget_type',
        'minbudget',
        'maxbudget',
        'user',
        'freelancers_required',
        'duration',
        'status',
        'closed',
        'start_date'
    ];

    public function _project()
    {
        return $this->hasMany(Project::class, 'job', 'job');
    }
}
