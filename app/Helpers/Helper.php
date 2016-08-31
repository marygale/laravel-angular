<?php
/**
 * Created by PhpStorm.
 * User: elp
 * Date: 8/31/16
 * Time: 1:29 PM
 */

namespace App\Helpers;

use App\Models\User;
use Gate;

abstract class Helper
{

    public static function authentication_logic(User $user)
    {
        \session()->flush();
        if(Gate::allows('super_admin')){
            $redirect_url = action('DashboardController@dashboard');
        }
        return $redirect_url;
    }
}