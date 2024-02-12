<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRoleMiddleware
{

//    public function handle($request, Closure $next,$role)
//    {
//        if(Auth::check() == false || Auth::user()->$role != true ){
//             return redirect('/');
//        }
//        return $next($request);
//    }
    public function handle($request, Closure $next)
    {
        if(Auth::check() == false ){
            return redirect('/');
        }
        return $next($request);
    }
}
