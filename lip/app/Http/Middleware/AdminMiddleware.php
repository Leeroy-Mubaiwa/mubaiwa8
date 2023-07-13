<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'manager') {
                return $next($request);
            }
            elseif (Auth::user()->role == 'department')
            {
                 return $next($request);
            }
            elseif (Auth::user()->role == 'supervisor')
            {
                    return $next($request);
            }
             elseif (Auth::user()->role == 'clerk')
            {
               //return pages that only clerk can see

                return $next($request);
            }
        } else {

            return redirect()->route('login');
        }

        return $next($request);
    }
}
