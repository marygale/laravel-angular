<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function __construct()
    {
       $this->middleware('super_admin');
    }

    public function dashboard()
    {dd(\Auth::check());
       return view('admin.dashboard.dashboard');
    }
}
