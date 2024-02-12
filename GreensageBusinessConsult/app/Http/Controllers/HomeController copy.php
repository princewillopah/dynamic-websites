<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }

    public function storage(){
        return view('pages.storage');
    }
    public function transportation(){
        return view('pages.transportation');
    }
 
    public function hqse(){
        return view('pages.hqse');
    }
    
    public function terminals(){
        return view('pages.terminals');
    }

    public function contact(){
        return view('pages.contact-us');
    }


    public function hr_form(){
        // return view('pages.hqse');
    }
    
    public function course_form(){
        // return view('pages.terminals');
    }

    public function instructor_form(){
        // return view('pages.contact-us');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name'           =>'required',
            'email'          =>'required|email',
            // 'subject'          =>'required',
            'message'        =>'required',
        ]);
        Mail::to('info@vofterminal.nl')->send(new ContactFormMail($request));
        return redirect()->back()->with('success','Thank you. We will get back to you shortly.');
    }

    // public function transportation(){
    //     return view('pages.transportation');
    // }
    // public function storage(){
    //     return view('pages.storage');
    // }
    // public function terminals(){
    //     return view('pages.terminals');
    // }
    // public function environment(){
    //     return view('pages.environment');
    // }

}
