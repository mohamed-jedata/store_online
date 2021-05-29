<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLogin
{

 

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
     {

        if(Auth::check() == false || Auth::user()->is_admin == 0){
            return redirect()->route("admin.login");
        }
        

        return $next($request);
    }

   
   
}
