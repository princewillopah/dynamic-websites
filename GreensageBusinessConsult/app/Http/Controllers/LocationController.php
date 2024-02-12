<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $locations= Location::all();
        return view('backend/location/all-locations')->with('locations',$locations);
    }

    public function create()
    {
        return view('backend/location/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|unique:locations|min:2|max:100'
        ]);

          $category = new Location();
          $category->name  = $request->name;
          $category->save();



        session()->flash('success','Location created successfully');
        // return redirect(route('all-categories'));
        return redirect()->back();

    }


}
