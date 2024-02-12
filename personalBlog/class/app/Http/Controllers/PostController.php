<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public  function __construct()
    {
        $this->middleware('checkRole');
    }

    public function index()
    {
//        $posts = Post();
        if(Auth::user()->admin==1){
            $posts = Post::all();
        }else{
            $posts = Post::where('user_id', Auth::id())->get();
        }
        return view('admin.post')->with('posts',$posts);
    }


    public function create()
    {
        return view('admin.post-create');
    }


    public function store(Request $request)
    {
        $request->validate([
             'title'        =>  'required|min:1',
             'contents'     =>  'required|min:1',
          ]);
        Post::create([
            'title'    => $request->title,
            'contents' => $request->contents,
            'user_id'  => Auth::id(),
        ]);
        return redirect()->route('posts.index')->with('success','1 post successfully created');

    }


    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.post-show')->with('post',$post);
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post-edit')->with('post',$post);
    }


    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $request->validate([
            'title'     =>  'required|min:1',
            'contents'     =>  'required|min:1',
        ]);
        $post->update([
            'title'  => $request->title,
            'contents' => $request->contents,
            'user_id'  => Auth::id(),
        ]);
        return redirect()->route('posts.index')->with('success','post successfully updated');
    }


    public function destroy($id)
    {
        $post = Post::find($id);
//        first delete all comments associated to this post
        foreach ($post->comments as $comment){
            $comment->delete();//delete each posts
        }
        //then delete the user
        $post->delete();
        return redirect()->route('posts.index')->with('success','successfully deleted');
    }
}
