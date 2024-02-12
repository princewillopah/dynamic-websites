<?php

namespace App\Http\Controllers;

use App\Models\Format;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FormatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $formats= Format::all();
        return view('backend/format/all-formats')->with('formats',$formats);
    }

   
    
    public function create()
    {
        return view('backend/format/create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'name'=>'required|unique:categories|min:2|max:100'
            'name'=>'required|min:2|max:100'
        ]);

        $slug = Str::slug($request->name);//create the slug first
        $next = 2;//initializing variable "next"//next is the increment
        
         // Loop until we can query for the slug and it returns false
            while (Format::where('slug', '=', $slug)->first()) {//if the slug exist in database
                $slug = $slug . '-' . $next;////if the slug exist in database then add "-$next"
                $next++;//increase $next
            }//if however, slug is not in db, then go down to create the record

          $format = new Format();
          $format->name  = $request->name;
          $format->slug  = $slug;
          $format->save();



        session()->flash('success','Format created successfully');
        return redirect(route('all-formats'));

    }


    // public function show(Category $category)
    // {
    //     return view('admin.category.show')->with('category',$category);
    // }


    // public function edit(Category $category)
    // {

    // }


    // public function update(Request $request, Category $category)
    // {

    //     if( $request->name == $category->name){
    //       $this->validate($request, [
    //             'name'=>'required'
    //       ]);
    //     }else{
    //       $this->validate($request, [
    //           'name'=>'required|unique:categories|min:2|max:100'
    //       ]);
    //     }
    //     $category->name  = $request->name;
    //     $category->slug  = str_slug($request->name);
    //     $category->save();
    //     session()->flash('success','Category updated successfully');
    //     return redirect(route('categories.index'));
    // }


    // public function destroy(Category $category)
    // {

    //     $category->delete();
    //     session()->flash('success','Category deleted successfully');
    //     return redirect(route('categories.index'));
    // }
}
