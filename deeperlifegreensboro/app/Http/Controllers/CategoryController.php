<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $category = Category::all();

        return view('admin.category.index')->with('categories',$category);

    }

    
    public function create()
    {
        return view('admin.category.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|unique:categories|min:2|max:100'
        ]);

        Category::create([
            'name' => $request->name
        ]);
        session()->flash('success','Category created successfully');
        return redirect(route('categories.index'));

    }

   
    public function show(Category $category)
    {
        //
    }

   
    public function edit(Category $category)
    {
        //
    }

    
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name'=>'required|unique:categories|min:2|max:100'
        ]);

        $category->update([
            'name' => $request->name
        ]);
        session()->flash('success','Category updated successfully');
        return redirect(route('categories.index'));
    }

   
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('success','Category deleted successfully');
        return redirect(route('categories.index'));
    }
}
