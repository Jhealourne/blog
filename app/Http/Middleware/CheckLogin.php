<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use DB;

class CheckLogin
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
        if (!Auth::check() || Auth::user()->usertype != 0) {
            return redirect('/Signin');
        }
        return $next($request);
    }
}
