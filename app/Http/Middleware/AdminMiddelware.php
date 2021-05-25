<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddelware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role, $redirect)
    {
        if(Auth::user() && Auth::user()->hasRole($role))
        {
            return $next($request);
        } else {
            return redirect($redirect);
        }

    }
}
