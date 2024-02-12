<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public  function __construct()
    {
        $this->middleware('checkRole:admin');
    }
    public  function dashboard(){
        $posts = Post::all();
        $comments = Comment::all();
        $users =User::all();
        return view('admin.dashboard')->with('posts',$posts)->with('comments',$comments)->with('users'.$users);
    }
    public  function profile_edit(){
        return view('user.profile');
    }
    public function update_update(Request $request){
        $request->validate([
             'name'=>'required',
            'email'  => 'email',
        ]);
        $user = Auth::user();
        $user->name  =  $request->name;
        $user->email =  $request->email;
        $user->save();
        //passord reset
        if($request['password'] != ""){//if password filed is not empty
           if(!(Hash::check($request['password'],Auth::user()->password))){//if password provided in input field is not the same as the one by auth use
             return redirect()->back()->with('error','The Old password provided does NOT match the one in our database');
           }
           if(strcmp($request['password'],$request['new_password'])==0){//if password provided in input field is not the same as the one by auth use
                return redirect()->back()->with('error','Your new password CANNOT be the same as your old password');
           }
           $request->validate([
               'password'      => 'required',
               'new_password'  => 'required|string|min:6|confirmed',
           ]);
            $user->password = bcrypt($request->new_password);
            $user->save();
            return redirect()->back()->with('success','successfully update your profile');
        }

        return redirect()->back();
//        dd($request->all());
    }
}
