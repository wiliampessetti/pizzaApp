<?php

namespace CodeDelivery\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if(!Auth::check() || Auth::user()->role <> $role){
            return redirect('/login');
        }
        if(Auth::user()->role == "admin" || Auth::user()->role == "client") {
            return $next($request);
        }
    }
}
