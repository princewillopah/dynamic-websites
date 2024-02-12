<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{

  public function index(){
    $products = Product::paginate(20);
    return view('welcome')->with('products',$products);
  }

  public function paginate_more_products_ajax(Request $request){
    if($request->ajax()){
      $products = Product::paginate(20);
        return view('ajax-list-view')->with('products',$products)->render();
    }

}


public function products_main($id){
  $product = Product::find($id);

return view('product-main')->with('product',$product);
}


}
