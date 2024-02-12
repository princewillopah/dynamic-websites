<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
	    $categories = Category::pluck('name','id');
    	$products = Product::all();
	    return view('admin.product.index')->with('categories',$categories)->with('products',$products);
    }

    public function create()
    {
    	$categories = Category::pluck('name','id');
        return view('admin.product.create')->with('categories',$categories);
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'name'  => 'required',
		    'size'  => 'required',
		    'price'  => 'required',
		    'image'  => 'required|mimes:png,jpeg,jpg',
	    ]);

        $formInput = $request->except('image');
        $myimage = $request->image;
        if('$myimage'){
        	$file_name = $myimage->getClientOriginalName();
	        $myimage->move('uploads/images',$file_name);
	        $formInput['image'] = $file_name;
        }
        Product::create($formInput);
        Session::flash('success','Product successfully added');
        return redirect()->route('products.index');
    }

    public function removeFromFeatured($id)
    {
        $product = Product::find($id);
        $product->featured = 0;
        $product->save();
         return redirect()->back();

    }
    public function addToFeatured($id)
    {
        $product = Product::find($id);
        $product->featured = 1;
        $product->save();
         return redirect()->back();

    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
