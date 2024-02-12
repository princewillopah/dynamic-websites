<?php

namespace App\Http\Controllers;

use App\Deposit;
use Illuminate\Http\Request;
use App\User;
class DepositController extends Controller
{
    
    public function index()
    {
        
    }

    public function showUserDb($id)
    {
        $user_deposits = User::find($user);
    }

    
    // public function create()
    // {
    //     //
    // }

   
    // public function store(Request $request)
    // {
    //     //
    // }

   
    // public function show(Deposit $deposit)
    // {
    //     //
    // }

    // public function edit(Deposit $deposit)
    // {
    //     //
    // }

   
    // public function update(Request $request, Deposit $deposit)
    // {
    //     //
    // }

  
    public function destroy(Deposit $deposit)
    {
        //
    }
}
