<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Auth;
class Handler extends ExceptionHandler
{
   
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        if ($request->is('client') || $request->is('client/*')) {
            return redirect()->guest('/login/client');
        }
        if ($request->is('restau') || $request->is('restau/*')) {
            return redirect()->guest('/login/restau');
        }
        return redirect()->guest(route('login'));
    }
}
