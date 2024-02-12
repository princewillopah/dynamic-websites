<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public  function __construct()
    {
        $this->middleware('checkRole');
    }
    public function index()
    {
//        $posts = Post();
        if(Auth::user()->admin==1){
            $comments = Comment::all();
        }else{
            $comments = Comment::where('user_id',Auth::id())->get();
        }

        return view('admin.comments')->with('comments',$comments);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($cid,$pid)
    {
        $comment = Comment::find($cid);
        $relatedComments = Comment::where('post_id',$pid)->where('id','!=',$cid)->get();
        return view('admin.comment-show')->with('comment',$comment)->with('relatedComments',$relatedComments);
    }


    public function edit($cid)
    {
        $comment = Comment::find($cid);
        return view('admin.comment-edit')->with('comment',$comment);
    }


    public function update(Request $request,$cid)
    {
        $comment = Comment::find($cid);
//        $post = Post::find($cid);
        $request->validate([
             'body'     =>  'required',
          ]);

        $comment->update([
            'body'     => $request->body,
            'user_id'  => $comment->user->id,
            'post_id'  => $comment->post->id,
        ]);
        return redirect()->route('comments.index')->with('success',"comment with ID: ".$comment->id." successfully updated");
    }


    public function destroy($id)
    {
        $comment = Comment::find($id);
            $comment->delete();//delete each posts

        return redirect()->route('comments.index')->with('success','Comment of ID: '. $comment->id.' successfully deleted');
    }

    public function RelatedComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();//delete each posts

        return redirect()->back()->with('success','Comment of ID: '. $comment->id.' successfully deleted');
    }

}
