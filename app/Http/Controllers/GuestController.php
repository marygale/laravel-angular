<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GuestController extends Controller
{
    public function __construct()
    {
        
    }

    public function create_first()
    {
        return view('guest.register');
    }
}
