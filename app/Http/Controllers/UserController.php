<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use App\Http\Requests;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user_create()
    {
        return view('admin.create_user');
    }

    public function post_create(Requests\AdminCreateUserRequest $request)
    {
        $arData = $request->except('password', 'password_confirmation');
        $arData['password'] = bcrypt($request->input('password'));
        $user = User::create($arData);
        $user->_roles()->attach($user->user, ['roles' => $request->input('role')]);
        return \redirect()->action('UserController@user_edit', $user);

    }

    public function user_list(User $user)
    {
        $users = $user->get_all_user();
        return view('admin.user.user_list', compact('users'));
    }

    public function user_edit(User $user, Roles $roles)
    {
        $gender = User::$gender;
        $roles = $roles->get_all_roles();
        return view('admin.user.user_edit', compact('user', 'gender', 'roles'));
    }

    public function post_user_edit(Requests\EditUserRequest $request, User $user)
    {
        $user->update($request->except('username'));
        return \back()->with('success', 'User has been updated successfully!');
    }

    public function profile_view()
    {
        $user = \Auth::user();
        return view('admin.user.profile_view', compact('user'));
    }

    public function profile_edit()
    {
        $user = \Auth::user();
        return view('admin.user.profile_edit', compact('user'));
    }

    public function post_profile_edit()
    {
        
    }
}
