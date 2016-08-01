<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminCreateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:user|min:10',
            'email'  => 'required|email|unique:user',
            'role'   => 'required|exists:roles,roles',
            'password' => 'required|min:6|regex:/^.*(?=.{1,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/|confirmed',
            'password_confirmation' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',

        ];
    }
}
