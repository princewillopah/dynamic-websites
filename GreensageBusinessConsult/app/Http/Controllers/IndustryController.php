<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $industries= Industry::all();
        return view('backend/sector/all-sectors')->with('sectors',$industries);
    }

    public function create()
    {
        return view('backend/sector/create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|unique:industries|min:2|max:100'
            // 'name'=>'required|min:2|max:100'
        ]);

      
          $category = new Industry();
          $category->name  = $request->name;
          $category->save();

        return redirect()->back()->with('success','Sector created successfully');

    }






}
