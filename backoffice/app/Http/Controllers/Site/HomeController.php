<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('site.home');
    }

    public function start()
    {
        return view('site.start');
    }

    public function account()
    {
        return view('site.my_account');
    }
}
