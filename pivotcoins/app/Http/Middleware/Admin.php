<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
        

        if(Auth::check() == false ){//if not logged in
            return redirect('/login');//take the user back to login page
            
        }else{//if the user is logged in the check the following
            if(!Auth::user()->admin){//this means the user is logged in/ we have t check if the useer is Not admin

            return redirect()->back();// if the user is Not admin, the redirec the user back to where he is coming from
          }
        }
       
        return $next($request);//this means the user is logged in and he is an admin
    }
}
