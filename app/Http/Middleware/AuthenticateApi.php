<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class AuthenticateApi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->header('Authorization')) {
            if (User::where('api_token', $request->header('Authorization'))->first()) {
                return $next($request);
            } else {
                return response()->json(['error' => 'No autorizado. Por favor autentícate primero (token).'], 401);
            }
        } else {
            return response()->json(['error' => 'No autorizado. Por favor autentícate primero (header).'], 401);
        }
    }
}
