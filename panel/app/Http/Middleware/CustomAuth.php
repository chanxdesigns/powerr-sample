<?php

namespace App\Http\Middleware;

use Closure;

class CustomAuth
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
        if (empty($request->session()->get('email'))) {
            if (($request->route()->uri() == 'login') || ($request->route()->uri() == 'register') || ($request->route()->uri() == 'do/login') || ($request->route()->uri() == 'do/register')) {
                return $next($request);
            }
            else {
                return redirect('/login');
            }
        }
        else {
            if (($request->route()->uri() == 'login') || ($request->route()->uri() == 'register')) {
                return redirect('/home');
            }
        }

        return $next($request);
    }
}
