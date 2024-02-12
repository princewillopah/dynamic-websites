<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    

     public function verification()
    {
       
        return view('emails.view.payou');
                                    
    }
       public function payout()
    {
       
        return view('emails.view.payout');
                                    
    }

}
