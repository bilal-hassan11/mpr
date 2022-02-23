<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class UserAuth
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
        // if(!Auth::check()){
        //     return redirect('/users/login');
        // }
        
        if(Auth::check() && Auth::user()->user_status == 'user'){
            return $next($request);
        }
        return redirect('/users/login');
        
    }
}
