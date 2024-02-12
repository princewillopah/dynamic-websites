<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Category;

//use Illuminate\Support\Facades\Cart;

class CartController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('cart.cart')->with('categories',$categories);
    }


    public function create()
    {
//        Session::flash();
    }


    public function store(Request $request)
    {
//        Cart::add($request->id,$request->name,$request->qty,$request->price)->associate('App\Product');
        Cart::add($request->id,$request->name,1,$request->price)->associate('App\Product');
        Session::flash('success','cart added');
        return redirect()->back();
    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        Cart::update($id, $request->quantity);
//        Cart::update($id, $request->quantity);
//        return response()->json(['success'=>true]);
    }


    public function destroy($id)
    {
       Cart::remove($id);
        Session::flash('success',' item removed from your cart');
       return back();
    }
    public function saveForLater_destroy($id)
    {
        Cart::instance('saveForLater')->remove($id);
        Session::flash('success',' item completely removed from your cart');
        return back();
    }

    public function switchToSaveForLater($id)
    {
        $item = Cart::get($id);//store the product in $item before removal
        Cart::remove($id);//remove from cart
        //check for duplicate, i.e if that item u wanna add alreadey exist
        $duplicate =    Cart::instance('saveForLater')->search(function ($cartItem, $rowId) use ($id){
           return $rowId===$id;
        });
        if($duplicate->isNotEmpty()){
            Session::flash('success',' you have already saved this item earlier');
            return back();
        }
         // now add the $item in cart instance "save for later"
        Cart::instance('saveForLater')->add($item->id,$item->name,1,$item->price)->associate('App\Product');
        Session::flash('success','item removed has been saved for later');
        return redirect()->back();
    }

    public function switchFromSaveForLaterToCart($id)
    {
        $item = Cart::instance('saveForLater')->get($id);//store the product in $item before removal
        Cart::instance('saveForLater')->remove($id);//remove from cart
        //check for duplicate, i.e if that item u wanna add alreadey exist
        $duplicate =    Cart::instance('default')->search(function ($cartItem, $rowId) use ($id){
            return $rowId===$id;
        });
        if($duplicate->isNotEmpty()){
            Session::flash('success',' you already this item in your cart. i suggest you remove the duplicate');
            return back();
        }
        // now add the $item in cart instance "save for later"
        Cart::instance('default')->add($item->id,$item->name,1,$item->price)->associate('App\Product');
        Session::flash('success','item removed back to your cart');
        return redirect()->back();
    }


    public function emptycart(){
        Cart::destroy();
        Session::flash('success','cart cleared');
        return redirect()->back();
    }
    public function clearSaveForLater(){
        Cart::instance('saveForLater')->destroy();
        Session::flash('success','save for later items are cleared');
        return redirect()->back();
    }
}
