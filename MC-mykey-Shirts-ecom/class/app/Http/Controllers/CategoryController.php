<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    public function index()
    {
	    return view('admin.category.index')->with('categories',Category::all());
    }


    public function create()
    {
       return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        	'name'   => 'required|max:100'
        ]);
        Category::create([
        	'name'=>$request->name,
            'slug'=>str_slug($request->name),
        ]);
        Session::flash('success','Category successfully created');
        return redirect()->route('categories.index');
    }

	public  function  storeIndividual(Request $request , $id){
		$catName = Category::find($id);
		$request->validate([
			'name'  => 'required',
			'size'  => 'required',
			'price'  => 'required',
			'image'  => 'required|mimes:png,jpeg,jpg',
		]);

		$featured = $request->image;
		$featured_new_name = time()."_".$featured->getClientOriginalName();
		$featured->move('uploads/images',$featured_new_name);
		Product::create([
			'name'           =>$request->name,
			'description'     =>$request->description,
			'size'           =>$request->size,
			'price'          =>$request->price,
			'category_id'    =>$request->$catName,
			'image'          =>$featured_new_name,
            'slug'           =>str_slug($request->name)

		]);
		Session::flash('success','product successfully added');
		return redirect()->route('categories.index');
	}

    public function show(Category $category)
    {
    	$cat = Category::pluck('name','id');
	    return view('admin.category.category-table')
		    ->with('category',$category)
		    ->with('cat',$cat);
    }


    public function edit(Category $category)
    {
        //
    }


    public function update(Request $request, Category $category)
    {
        //
    }

    public function destroy(Category $category)
    {
        //
    }
}
