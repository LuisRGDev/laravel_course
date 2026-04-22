<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        dd(Auth::check(), Auth::user());

        if(!Auth::check() || !Auth::user()->isAdmin()){
            abort(403, 'Acceso no autorizado.');
        }
        return $next($request);
    }
}
