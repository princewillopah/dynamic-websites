<?php

namespace App\Http\Controllers;

use App\Category;
use App\Sermon;
use App\Pastor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SermonController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sermons = Sermon::all();
        return view('admin.sermon.index')->with('sermons',$sermons);
    }


    public function create()
    {
        return view('admin.sermon.create')->with('category',Category::all())->with('pastors',Pastor::all());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|min:2',
            'pastor'=>'required',
            'category'=>'required',
            'sermonDate'=>'required',
            'startTime'=>'required',
            'endTime'=>'required',
            'myimage'=>'sometimes|file|image|max:5000',
        ]);
//        $data = $request->only('title','author', 'category','sermonDate','startTime','endTime','description','vidioLink','audioLink');
//        $data['slug'] = str_slug($request->title);
//        if($request->hasFile('myimage')){// check if new image
//            $img = $request->myimage->store('sermons','public');
//            $data['coverImage'] = $img;
//        }
                    
//
            $sermon = new Sermon();
            
            $sermon->title         =       $request->title;
            $sermon->pastor_id     =       $request->pastor;
            $sermon->category_id   =       $request->category;
            $sermon->sermonDate    =       $request->sermonDate;
            // 'startTime'=>               strtotime($request->startTime),
            // 'endTime'=>                 strtotime($request->endTime),
            $sermon->startTime     =       $request->startTime;
            $sermon->endTime       =       $request->endTime;
            $sermon->description   =       $request->description;
            $sermon->vidioLink     =       $request->vidioLink;
            $sermon->audioLink     =       $request->audioLink;
            $sermon->slug          =       str_slug($request->title);
            if($request->hasFile('myimage')){// check if new image 
                $img               = $request->file('myimage');
                $filename          = rand().'-'.$sermon->title.'.'.$img->getClientOriginalExtension();
                // $filename          = rand().'.'.$img->getClientOriginalExtension();
                $img->move(public_path('uploads/sermons/'),$filename);
                $sermon->coverImage = $filename;   
            }
            else{
                // return $request;
                $sermon->coverImage = 'person_1.jpg';
                // $pastor->pic = '';
            }
            $sermon->save();
         
        session()->flash('success','Sermons created successfully');
        return redirect(route('sermons.index'));
    }


    public function show(Sermon $sermon)
    {

        return view('admin.sermon.show')->with('sermon',$sermon);
    }


    public function edit(Sermon $sermon)
    {
        return view('admin.sermon.edit')->with('sermon',$sermon)->with('category',Category::all())->with('pastors',Pastor::all());
    }


    public function update(Request $request, Sermon $sermon)
    {

        $this->validate($request, [
            'title'=>'required|min:2',
            'pastor'=>'required',
            'category'=>'required',
            'sermonDate'=>'required',
            'startTime'=>'required',
            'endTime'=>'required',
            'myimage'=>'sometimes|file|image|max:5000',
        ]);

            
        $sermon->title         =       $request->title;
        $sermon->pastor_id     =       $request->pastor;
        $sermon->category_id   =       $request->category;
        $sermon->sermonDate    =       $request->sermonDate;

        $sermon->startTime     =       $request->startTime;
        $sermon->endTime       =       $request->endTime;
        $sermon->description   =       $request->description;
        $sermon->vidioLink     =       $request->vidioLink;
        $sermon->audioLink     =       $request->audioLink;
        $sermon->slug          =       str_slug($request->title);
        if($request->hasFile('myimage')){// check if new image 
            $img               = $request->file('myimage');
            $filename          = rand().'-'.$sermon->title.'.'.$img->getClientOriginalExtension();
            $img->move(public_path('uploads/sermons/'),$filename);
            if(file_exists(public_path().'/uploads/sermons/'.$sermon->coverImage)){
      
                unlink(public_path().'/uploads/sermons/'.$sermon->coverImage);//delete old image from storage/public folder attacted to this record b4 deletion
       
             }
            $sermon->coverImage = $filename;   
        }
        else{
            // return $request;
            $sermon->coverImage = 'person_1.jpg';
            // $pastor->pic = '';
        }
        $sermon->save();

        session()->flash('success','Sermons Updated successfully');
        return redirect(route('sermons.index'));

    }


    public function destroy(Sermon $sermon)
    {

      if(file_exists(public_path().'/uploads/sermons/'.$sermon->coverImage)){
      
        unlink(public_path().'/uploads/sermons/'.$sermon->coverImage);//delete old image from storage/public folder attacted to this record b4 deletion
        // $pastor->delete();
      }
        $sermon->delete();
        session()->flash('success','Sermon with ID : "'.$sermon->id.'", Successfully Deleted');
        return redirect(route('sermons.index'));

    }
}
