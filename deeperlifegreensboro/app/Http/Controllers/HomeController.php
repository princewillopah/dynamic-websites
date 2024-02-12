<?php

namespace App\Http\Controllers;

use App\Event;
use App\Sermon;
use App\Pastor;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
        return view('home')->with('sermon',Sermon::all())
                            ->with('event',Event::all())
                            ->with('pastor',Pastor::all())
                            ->with('category',Category::all());
    }
}
