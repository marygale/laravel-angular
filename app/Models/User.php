<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user';
    protected $primaryKey = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'middle_name',
        'last_name',
        'title',
        'description',
        'country',
        'state',
        'city',
        'cell_phone',
        'gender',
        'role'

    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    protected $appends = ['full_name', 'search_action', 'role_label'];

    public static $gender = ['m' => 'Male', 'f' => 'Female', 'e' =>  'Prefer not to answer'];

    public function get_all_user()
    {
        $users = User::all();
        foreach($users as $user){
            $roles = $user->_roles()->where('user', $user->user)->getResults();
            foreach($roles as $role){
                $user->label = $role->label;
            }
        }
       return $users;
    }

    public function getFullNameAttribute()  
    {
        return $this->title .' '. $this->first_name .' '. $this->last_name;
    }

    public function getRoleLabelAttribute()
    {
        return $this->label;
    }

    public function _roles()
    {
       return $this->belongsToMany(Roles::class, 'role_user', 'user', 'roles');
    }
}
