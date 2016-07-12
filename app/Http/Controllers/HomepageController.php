<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index()
    {
        $isLogin = \Auth::check();
        return view('guest.index', compact('isLogin'));
    }
}
