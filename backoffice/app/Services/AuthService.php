<?php

namespace App\Services;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Validation\ValidationException;

class AuthService
{
    public function login(StatefulGuard $guard, array $data): Authenticatable
    {
        if (!$guard->attempt(Arr::only($data, ['email', 'password']))) {
            throw ValidationException::withMessages([
                'email' => [trans('auth.failed')],
            ]);
        }

        return $guard->user();
    }

    public function register(StatefulGuard $guard, array $data): Authenticatable
    {
        $newEntry = ($guard->getProvider()->createModel())->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $newEntry->assignRole('customer');

        $guard->login($newEntry);

        return $newEntry;
    }

    public function logout(StatefulGuard $guard): bool
    {
        $guard->logout();

        return true;
    }

    public function forgotPassword(StatefulGuard $guard, array $data)
    {
        return match ($status = Password::sendResetLink(Arr::only($data, ['email']))) {
            Password::RESET_LINK_SENT => true,
            default => throw ValidationException::withMessages([
                'email' => [trans($status)],
            ])
        };
    }

    public function resetPassword(StatefulGuard $guard, array $data)
    {
        $status = Password::reset(Arr::only($data, ['email', 'password', 'password_confirmation', 'token']), function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password),
            ])->setRememberToken(Str::random(60));
            $user->save();
            event(new PasswordReset($user));
        });

        return match ($status) {
            Password::PASSWORD_RESET => true,
            default => throw ValidationException::withMessages([
                'email' => [trans($status)],
            ])
        };
    }
}
