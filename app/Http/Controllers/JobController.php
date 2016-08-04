<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create_job(Category $category)
    {
        $category_list = $category->get_all_category();
        return view('admin.job.create_job', compact('category_list'));
    }

    public function post_create_job()
    {
        dd('post_job');
    }
}
