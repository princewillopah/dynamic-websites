<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $events = Event::all();
        return view('admin.event.index')->with('events',$events);
    }

    
    public function create()
    {
        return view('admin.event.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'          =>'required|min:1',
            'place'          =>'required|min:1',
            'description'    =>'required|min:1',
            'eventStartDate' =>'required',
            'image'          =>'sometimes|file|image|max:5000',
        ]);
        
        $event = new Event();
        $event->title         =       $request->title;//
        $event->place         =       $request->place;//
        $event->eventStartDate =       $request->eventStartDate;
        $event->eventEndDate  =       $request->eventEndDate;
        $event->description   =       $request->description;//
        $event->slug          =       str_slug($request->title);
        if($request->hasFile('myimage')){// check if new image 
            $img               = $request->file('myimage');
            $filename          = rand().'-'.$event->title.'.'.$img->getClientOriginalExtension();
            $img->move(public_path('uploads/events/'),$filename);
            $event->image = $filename;   
        }
        else{
            $event->image = 'person_1.jpg';
        }
        $event->save();
        session()->flash('success','Event created successfully');
        return redirect(route('events.index'));
    }

    
    public function show(Event $event)
    {
        
        return view('admin.event.show')->with('event',$event);
    }

   
    public function edit(Event $event)
    {
        return view('admin.event.edit')->with('event',$event);
    }

   
    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'title'           =>'required|min:2',
            'place'           =>'required|min:2',
            'description'     =>'required|min:2',
            'eventStartDate'  =>'required',
            'image'           =>'sometimes|file|image|max:5000',
        ]);
        $event->title         =       $request->title;//
        $event->place         =       $request->place;//
        $event->eventStartDate =       $request->eventStartDate;
        $event->eventEndDate  =       $request->eventEndDate;
        $event->description   =       $request->description;//
        $event->slug          =       str_slug($request->title);
        if($request->hasFile('myimage')){// check if new image 
            $img              = $request->file('myimage');
            $filename         = rand().'-'.$event->title.'.'.$img->getClientOriginalExtension();
            $img->move(public_path('uploads/events/'),$filename);
            // if(file_exists(public_path().'/uploads/events/'.$event->image)){
            //     unlink(public_path().'/uploads/events/'.$event->image);//delete old image from storage/public folder attacted to this record b4 deletion
            //  }
            $event->image     = $filename;   
            }
            // else{
            //     $event->image = 'person_1.jpg';
            // }
        $event->save();

        session()->flash('success','Event with ID : "'.$event->id.'", successfully updated');
        return redirect(route('events.index'));
    }

    
    public function destroy(Event $event)
    {
                  if(file_exists(public_path().'/uploads/events/'.$event->image)){
      
                   unlink(public_path().'/uploads/events/'.$event->image);//delete old image from storage/public folder attacted to this record b4 deletion

                }
                $event->delete();
                session()->flash('success','Event with ID : "'.$event->id.'", Successfully Deleted');
                return redirect(route('events.index'));
    }
}
