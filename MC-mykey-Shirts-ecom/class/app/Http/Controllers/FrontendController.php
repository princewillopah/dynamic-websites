<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function welcome(){
        $featured = Product::where('featured',1)->inRandomOrder()->take(9)->get();
    	return view('frontend.index')->with('categories',Category::all())
		                             ->with('products',Product::inRandomOrder()->get())
                                     ->with('featured',$featured);
    }

	public function category_main($slug){
     $category = Category::where('slug',$slug)->firstOrFail();
//        public function category_main($id){
//    	$category = Category::find($id);
		return view('frontend.categoryDetails')->with('category',$category)->with('categories',Category::all());
	}

    public function show($slug)
    {
        $product = Product::where('slug',$slug)->first();
        $may_also_like = Product::where('slug','!=',$slug)->where('category_id',$product->category_id)->inRandomOrder()->take(4)->get();
        return view('frontend.product-details')->with('product',$product)
                                               ->with('may_also_like',$may_also_like)
                                               ->with('categories',Category::all());
    }
}
