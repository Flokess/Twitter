<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth1 extends Controller
{
    public function index()
    {
        return view('login1');
    }

    public function indexregister()
    {
        return view('register1');
    }
}
