<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create_job()
    {
        return view('admin.job.create_job');
    }

    public function post_create_job()
    {
        dd('post_job');
    }
}
