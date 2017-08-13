<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class StudentAuth
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
    	if(Auth::check() && (Auth::user()->tipo() != 2 || Auth::user()->completado()) || !Auth::check()){
            return redirect('/');
        }
    	
        return $next($request);
    }
}
