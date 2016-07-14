<?php

namespace App\Http\Middleware;

use Closure;
use Gate;

class SuperAdmin{
    /**
     * Handles incoming request
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     */

    public function handle($request, Closure $next)
    {
        return Gate::allows('super_admin') ? $next($request) : \redirect()->action('Auth\AuthController@showLoginForm');
    }
}