<?php

namespace App\Http\Middleware;

use Closure;
use Gate;

class SuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       return Gate::allows('super_admin') ? $next($request) : \redirect()->action('Auth\AuthController@showLoginForm');
    }
}
