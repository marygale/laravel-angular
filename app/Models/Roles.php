<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends \Eloquent
{

    protected $table = 'roles';
    protected $primaryKey = 'roles';

    public function _user()
    {
        return $this->belongsToMany(User::class, 'role_user', 'roles', 'user');
    }

    public function get_all_roles()
    {
        return Roles::all()->pluck('label', 'roles');
    }
}