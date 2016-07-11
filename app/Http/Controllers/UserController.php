<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function create()
    {
        return view('admin.create_user');
    }

    public function post_create()
    {
        
    }
}
