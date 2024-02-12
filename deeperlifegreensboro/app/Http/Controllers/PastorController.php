<?php

namespace App\Http\Controllers;

use App\Pastor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PastorController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pastor = Pastor::all();

        return view('admin.pastor.index')->with('pastors',$pastor);
    }


    public function create()
    {
        return view('admin.pastor.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' =>'required|min:2',
            'name'  =>'required|min:2',
            'pic'   =>'sometimes|file|image|max:5000',
        ]);
        // $data = $request->only('name','title','description','phone', 'facebook','twitter','instagram');
        // $data['slug'] = str_slug($request->name);
        // if($request->hasFile('myimage')){// check if new image
        //   $img = $request->myimage->store('pastors','public');
        //   $data['pic'] = $img;

        // }
        // Pastor::create( $data);
        $pastor = new Pastor();
        $pastor->name        =  $request->name;
        $pastor->title       =  $request->title;
        $pastor->description =  $request->description;
        $pastor->phone       =  $request->phone;
        $pastor->facebook    =  $request->facebook;
        $pastor->twitter     =  $request->twitter;
        $pastor->instagram   =  $request->instagram;
        $pastor->slug        =  str_slug($request->name);
         if($request->hasFile('myimage')){// check if new image
                $img         = $request->file('myimage');
                // $extension   = $img->getClientOriginalExtension(); //getting image extension
                $filename    = rand().'.'.$img->getClientOriginalExtension();
                // $img->move('uploads/pastors/'.$filename);
                // $img->move(public_path('images'),$filename);
                $img->move(public_path('uploads/pastors/'),$filename);
        
                $pastor->pic = $filename;   
            }
            else{
                // return $request;
                $pastor->pic = 'person_1.jpg';
                // $pastor->pic = '';
            }
         $pastor->save();
        
        session()->flash('success','Pastor record created successfully');
        return redirect(route('pastors.index'));
    }


    public function show(Pastor $pastor)
    {
        return view('admin.pastor.show')->with('pastor',$pastor);
    }


    public function edit(Pastor $pastor)
    {
        return view('admin.pastor.edit')->with('pastor',$pastor);
    }


    public function update(Request $request, Pastor $pastor)
    {
        $this->validate($request, [
            'title'=>'required|min:2',
            'name'=>'required|min:2',
            'pic'=>'sometimes|file|image|max:5000',
        ]);
        // $data = $request->only('name','title','description','phone', 'facebook','twitter','instagram');
        // $data['slug'] = str_slug($request->name);
        // if($request->hasFile('myimage')){// check if new image
        //     $img = $request->myimage->store('pastors','public');
        //     Storage::delete('storage/'. $pastor->pic);//delete old image from public/storage folder
        //    unlink(public_path().'/storage/'. $pastor->image);//delete old image from storage/public folder attacted to this record b4 deletion
        //     $data['pic'] = $img;
        // }
        // $pastor->update( $data);
        $pastor->name        =  $request->name;
        $pastor->title       =  $request->title;
        $pastor->description =  $request->description;
        $pastor->phone       =  $request->phone;
        $pastor->facebook    =  $request->facebook;
        $pastor->twitter     =  $request->twitter;
        $pastor->instagram   =  $request->instagram;
        $pastor->slug        =  str_slug($request->name);
        if($request->hasFile('myimage')){// check if new image
            $img         = $request->file('myimage');
            $filename    = rand().'.'.$img->getClientOriginalExtension();
            $img->move(public_path('uploads/pastors/'),$filename);
            // if(file_exists(public_path().'/uploads/pastors/'. $pastor->pic)){
      
            //     unlink(public_path().'/uploads/pastors/'. $pastor->pic);//delete old image from storage/public folder attacted to this record b4 deletion
       
            //  }
            $pastor->pic = $filename;   
        }else{
            $pastor->pic = '';
        }
     $pastor->save();
        session()->flash('success','Pastor with ID : "'.$pastor->id.'", successfully updated');
        return redirect(route('pastors.index'));
    }


    public function destroy(Pastor $pastor)
    {
       
     if(file_exists(public_path().'/uploads/pastors/'. $pastor->pic)){
      
        unlink(public_path().'/uploads/pastors/'. $pastor->pic);//delete old image from storage/public folder attacted to this record b4 deletion
        // $pastor->delete();
     }
     // delete all sermons belonging to this pastor by this pastor
        foreach ($pastor->sermons as $s){
            $s->delete();//delete each sermonss
        }
  
    $pastor->delete();
        session()->flash('success','Pastor with ID : "'.$pastor->id.'", Successfully Deleted');
        return redirect(route('pastors.index'));
    }
}
