<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserWasRegistered;
use App\Helpers\Helper;
use App\Models\User;
use App\Models\Login_Token;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $email = 'email';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout', 'confirm_email', 'login_token']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:150',
            'email' => 'required|email|max:255|unique:user',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $data['password'] = bcrypt($data['password']);
        $data['role'] = 4;
        \session()->flush();
        $arUser = User::create($data);
        return $arUser;
    }

    /*protected function authenticated(Request $request, User $user)
    {
        $redirect_url = Helper::authentication_logic($user);
        return \redirect()->to($redirect_url);
    }*/

    public function login_token($token)
    {
        $token = Login_Token::whereToken($token)->firstOrFail();

        if ($token->created_at->diffInHours() >= 24){
            $token->delete();
            return \redirect('/');
        }

    }
}
