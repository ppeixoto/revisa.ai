<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth;
use App\Models\Admin;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Auth\LoginRequest $request)
    {
        (new AuthService())->login(auth('admin'), $request->only('email', 'password'));
        return redirect()->route(Admin::LOGIN_REDIRECT_ROUTE);
    }

    public function logout()
    {
        (new AuthService())->logout(auth('admin'));
        return redirect()->route(Admin::LOGOUT_REDIRECT_ROUTE);
    }
}
