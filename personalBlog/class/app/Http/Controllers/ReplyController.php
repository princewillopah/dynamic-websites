<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request,$commentId)
    {
//        $comment = Post::find($postID);
        $request->validate([
            'body' => 'required|min:2',
        ]);
        Reply::create([
            'body'     => $request->body,
            'comment_id'  => $commentId,
            'user_id'  => Auth::id()
        ]);
        return redirect()->back()->with('success', 'reply added');
    }


    public function show(Reply $reply)
    {
        //
    }


    public function edit(Reply $reply)
    {
        //
    }


    public function update(Request $request, Reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $reply)
    {
        //
    }
}
