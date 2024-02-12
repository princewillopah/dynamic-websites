<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public  function index(){
        $posts = Post::all();
        return view('public.welcome')->with('posts',$posts);
    }
    public  function singlepost($id){
        $post = Post::find($id);
        return view('public.singlePost')->with('post',$post);
    }
    public  function about()
    {
        return view('public.about');
    }
    public  function contact(){
        return view('public.contact');
    }

}
