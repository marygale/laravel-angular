<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Http\Requests;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('admin.create_user');
    }

    public function user_list(User $user)
    {
        $users = $user->get_all_user();
        return view('admin.user_list', compact('users'));
    }
}
