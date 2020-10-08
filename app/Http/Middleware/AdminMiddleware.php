<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admin') {


//         dd($request->all());

        if (Auth::guard($guard)->check()) {

            return $next($request);


        }else{

            return redirect()->route('login');
        }


    }
}
