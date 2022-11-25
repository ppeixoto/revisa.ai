<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Requests\Admin\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('site.auth.login');
    }

    public function login(Auth\LoginRequest $request)
    {
        (new AuthService())->login(auth('user'), $request->only('email', 'password'));

        return redirect()->intended();
    }

    public function showRegistrationForm()
    {
        return view('site.auth.register');
    }

    public function register(Request $request)
    {
        (new AuthService())->register(auth('user'), $request->only('name', 'email', 'password'));

        return redirect()->route(User::LOGIN_REDIRECT_ROUTE);
    }

    public function logout()
    {
        (new AuthService())->logout(auth('user'));

        return redirect()->route(User::LOGOUT_REDIRECT_ROUTE);
    }
}
