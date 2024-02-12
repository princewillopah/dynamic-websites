<?php

namespace App\Http\Controllers;

use App\Balance;
use App\Deposit;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth' => 'verified']);
        // $this->middleware('auth');//mmbers dashboard
    }

    // $posts = Post::where('user_id', Auth::id())->get();
    public function index()
    {
    	// $balance = Balance::where('user_id',Auth::id())->first();
    	// $deposit = optional(Deposit::where('user_id',Auth::id()))->deposit_amount->first();
       // $deposit = Deposit::where('user_id',Auth::id())->first();
         $total_balance = Deposit::where('user_id', Auth::id())->sum('deposit_amount');

      ;
         $active_deposit= optional(Deposit::where('user_id',Auth::id())->where('active_deposit',1))->first();
         // $returns = $deposit->deposit_amount*(3/100);
          // $returns = optional(Deposit::where('user_id',Auth::id())->where('active_deposit',1))->first();
        return view('home')->with('total_balance', $total_balance)
                           // ->with('returns',$returns)
                           ->with('active_deposit',$active_deposit);
                          

    }
   
}
