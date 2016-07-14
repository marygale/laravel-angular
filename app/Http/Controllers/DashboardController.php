<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Requests;

class DashboardController extends Controller{

    /**
     * DashboardController constructor.
     * @param
     */
    public function __construct()
    {
        $this->middleware('super_admin');
    }

    public function dashboard()
    {
        return view('admin.dashboard.dashboard');
    }
}
