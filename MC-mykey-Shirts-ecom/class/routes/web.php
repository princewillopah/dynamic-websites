<?php

//Route::get('/home','HomeController@index')->name('home');
use Illuminate\Support\Facades\Session;

Route::get('/','FrontendController@welcome')->name('homepage');
//    Route::get('/category/{is}','FrontendController@category_main')->name('category.main');
	Route::get('/category/{slug}','FrontendController@category_main')->name('category.main');
    Route::get('/products/{slug}', 'FrontendController@show')->name('front.products.show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function (){
	Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
	Route::resource('/products', 'ProductController');
    Route::get('/products/{id}/remove-from-featured', 'ProductController@removeFromFeatured')->name('products.removeFromFeatured');
    Route::get('/products/{id}/add-to-featured', 'ProductController@addToFeatured')->name('products.addToFeatured');
	Route::resource('/categories', 'CategoryController');
	Route::post('/product/categories/{id}', 'CategoryController@storeIndividual')->name('store.individual.cat');
	Route::resource('/cart', 'CartController');
    Route::post('/cart/switch-to-save-for-later/{product}', 'CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');
    Route::post('/cart/switch-from-saveForLater-to-cart/{product}', 'CartController@switchFromSaveForLaterToCart')->name('cart.switchFromSaveForLaterToCart');
    Route::delete('/cart/delete/switch-to-save-for-later/{product}', 'CartController@saveForLater_destroy')->name('cart.switchToSaveForLater.destroy');
    Route::get('/cart/save-for-later/empty', 'CartController@clearSaveForLater')->name('cart.clearSaveForLater');
    Route::get('/empty', 'CartController@emptycart')->name('emptycart');
    Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
//	Route::get('empty',function (){
//        Cart::instance('saveForLater')->destroy();
//        Session::flash('success','cart added');
//        return redirect()->back();
//    })->name('cart.clearSaveForLater');

//});

