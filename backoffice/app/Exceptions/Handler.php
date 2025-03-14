<?php

namespace App\Exceptions;

use Throwable;
use App\Models;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['message' => trans('Unauthenticated.')], 401);
        }

        if ($request->is('admin') || $request->is('admin/*')) {
            return redirect()->guest(route(Models\Admin::LOGOUT_REDIRECT_ROUTE));
        }

        return redirect()->guest(route(Models\User::LOGOUT_REDIRECT_ROUTE));
    }

    public function render($request, Throwable $e)
    {
        if ($e instanceof AuthorizationException or
            $e instanceof \Spatie\Permission\Exceptions\UnauthorizedException
        ) {
            return redirect()->back()->withErrors(['message' => trans($e->getMessage())]);
        }

        return parent::render($request, $e);
    }
}
