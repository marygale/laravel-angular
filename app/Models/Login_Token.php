<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Login_Token extends Model
{
    protected $table = 'login_token';
    protected $primaryKey = 'login_token';
    protected $fillable = [
        'email',
        'token',
        'url',
        'created_at'
    ];
}
