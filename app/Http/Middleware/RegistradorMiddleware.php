<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RegistradorMiddleware
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
        $user=Auth::user();

        if (!$user->Administrador()) {
            if (!$user->Registrador()) {
                return redirect('/');
             } 
        }
        return $next($request);
    }
}
