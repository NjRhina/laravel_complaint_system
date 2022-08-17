<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
        // admin role==1
        // user role==0
        if(Auth::check()){

            if (Auth::user()->role=='1'){

                return $next($request);
            }else{
                return redirect('/complaints')->with('message','Access denied because you are not an admin');
            }

        }else{
            return redirect('/login')->with('message','Please login to access the site');;
        }
        return $next($request);
    }
}
