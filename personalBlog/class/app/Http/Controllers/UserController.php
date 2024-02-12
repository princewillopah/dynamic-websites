<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserFormValidationRequest;

class UserController extends Controller
{
    public  function __construct()
    {
        $this->middleware('checkRole');
    }
    public function index()
    {
        $authors = User::where('author',1)->where('admin',0)->get()->count();
        $AdminAuthors = User::where('author',1)->where('admin',1)->get()->count();
        $admin  =  User::where('admin',1)->where('author',0)->get()->count();
        $allusers  =  User::where('admin',0)->where('author',0)->get()->count();
        $users = User::all();
        return view('user.users')->with('users',$users)->with('Allusers',$allusers)->with('authors',$authors)->with('admin',$admin)->with('AdminAuthors',$AdminAuthors);
    }
    public  function removeAuthor($id){
        $user = User::find($id);
        $user->author = 0;
        $user->save();
        return redirect()->back();
    }
    public  function addToAuthor($id){
        $user = User::find($id);
        $user->author = 1;
        $user->save();
        return redirect()->back();
    }
    public  function edit($id){
        $user = User::find($id);
        return view('admin.edit')->with('user',$user);
    }
    public  function update(UserFormValidationRequest $request, $id){
        $user = User::find($id);
//        $request->validate([
//            'name'    =>'required|string|max:255',
//            'email'  => 'sometimes|required|string|email|max:255|unique:users,email,'.$user->id,
//        ]);

        $user->name = $request['name'];
        $user->email = $request['email'];
        if($request['author'] == 1){ $user->author = 1;}
        if($request['admin'] == 1){ $user->admin = 1;}
        $user->save();
        return redirect()->route('users.index')->with('success','successfully updated');
    }

    public  function view( $id){
        $user = User::find($id);
        return view('user.view-user')->with('user',$user);
    }
    public  function delete( $id){
        $user = User::find($id);
//        first delete all post associated to this user
        foreach ($user->posts as $post){
            foreach ($post->comments as $comment){
                $comment->delete();
            }
            $post->delete();//delete each posts
        }
        //then delete the user
        $user->delete();
        return redirect()->back()->with('success','successfully deleted');
    }

}
