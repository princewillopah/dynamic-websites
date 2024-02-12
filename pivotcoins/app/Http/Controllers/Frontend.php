<?php

namespace App\Http\Controllers;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class Frontend extends Controller
{

    public function home(){
        return view('frontend.home');
    }
    public function about(){
        return view('frontend.about');
    }
    public function marketing(){
        return view('frontend.marketing');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'           =>'required',
            'email'          =>'required|email',
            'message'        =>'required',
        ]);

        Mail::to('support@pivotcoins.trade')->send(new ContactFormMail($request));
         
        // return view('frontend.contact');
        return redirect()->back()->with('success','Thank you. We will get back to you shortly.');
    }

    public function faq(){
        return view('frontend.faq');
    }
    public function plans(){
        return view('frontend.plans');
    }
    public function referral(){
        return view('frontend.referral');
    }
    public function terms(){
        return view('frontend.terms');
    }
}
