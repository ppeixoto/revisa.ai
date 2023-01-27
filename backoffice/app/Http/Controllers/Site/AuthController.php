<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use App\Services\AuthService;
use App\Http\Requests\Admin\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Site\Auth\RegisterRequest;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('site.auth.login');
    }

    public function login(Auth\LoginRequest $request)
    {
        $teste = (new AuthService())->login(auth('user'), $request->only('email', 'password'));

        dd($teste);

        return redirect()->intended();
    }

    public function showRegistrationForm()
    {
        return view('site.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        (new AuthService())->register(auth('user'), $request->validated());

        return redirect()->route(User::LOGIN_REDIRECT_ROUTE);
    }

    public function logout()
    {
        (new AuthService())->logout(auth('user'));

        return redirect()->route(User::LOGOUT_REDIRECT_ROUTE);
    }
}
