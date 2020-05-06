<?php

namespace App\Http\Middleware;

use Closure;

class IsJson
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
        if (!$request->isJson()) {
            return response()->json(['Error' => 'No tiene un contenido en formato Json'], 415);
        }

        return $next($request);
    }
}
