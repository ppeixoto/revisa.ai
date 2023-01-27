<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
        return view('dashboard.home');
    }
}
