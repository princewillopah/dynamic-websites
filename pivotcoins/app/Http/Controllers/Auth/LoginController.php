<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    
    protected $redirectTo = '/home';

    protected function redirectTo()
{
    if (auth()->user()->admin == 1) {
        return '/dashboard';//admin dashboard
       
    }else{
          return '/home';//member dashboard
    }
  
}

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
