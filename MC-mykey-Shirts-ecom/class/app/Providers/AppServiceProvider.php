<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Schema::defaultStringLength(191);
//	    view()->composer('cart.cart',function ($view){
//		      $view->with('categories', Category::all());
////		    ->with('allCategory', Category::all()->count());
//	    });
//	    view()->composer('layout.front',function ($view){
//		    $view->with('categories', Category::all());
////		    ->with('allCategory', Category::all()->count());
//	    });

    }


    public function register()
    {
        //
    }
}
