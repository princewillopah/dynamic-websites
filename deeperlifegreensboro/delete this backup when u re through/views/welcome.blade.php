<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
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
        // $this->validate($request, [
        //     // 'title'=>'required|min:2',
        //     //  'name'=>'required|min:2',
        //     'description'=>'required|min:2',
        //     'eventStartDate'=>'required',
          
        //     'image'=>'sometimes|file|image|max:5000',
        // ]);
        $data = $request->only('title','description','place', 'eventStartDate','eventEndDate');
        // $data = $request->only('title','description','place', 'eventStartDate');
        // $data['eventEndDate'] = strtotime($request->eventEndDate);
        $data['slug'] = str_slug($request->title);
        if($request->hasFile('myimage')){// check if new image
            $img = $request->myimage->store('uploads','public');
            $data['image'] = $img;
        }
        Event::create( $data);
//        Event::create([
//            'title'       => $request->title,
//            'place'       => $request->place,
//            'description' => $request->description,
//            'eventDate'   => $request->eventDate,
//            'image'       => $img,
//            'slug'        => str_slug( $request->title),
//        ]);
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
            'title'=>'required|min:2',
            'place'=>'required|min:2',
            'description'=>'required|min:2',
            'eventStartDate'=>'required',
            'image'=>'sometimes|file|image|max:5000',
        ]);
        $data = $request->only('title','description','place', 'eventStartDate','eventEndDate');
        $data['slug'] = str_slug($request->title);
        if($request->hasFile('myimage')){// check if new image
            $img = $request->myimage->store('uploads','public');//upload the new image in folder "posts"
            Storage::delete('storage/'.$event->image);//delete old image from public/storage folder
//            unlink(public_path().'/storage/'.$event->image);//delete old image from storage/public folder attacted to this record b4 deletion
            $data['image'] = $img;
        }
        $event->update($data);
        session()->flash('success','Event with ID : "'.$event->id.'", successfully updated');
        return redirect(route('events.index'));
    }

    
    public function destroy(Event $event)
    {
        Storage::delete('storage/'.$event->image);//delete images from public/storage folder
        //        unlink(public_path().'/'.$posts->image);//delete image from storage/public folder attacted to this record b4 deletion
                $event->delete();
                session()->flash('success','Event with ID : "'.$event->id.'", Successfully Deleted');
                return redirect(route('events.index'));
    }
}
