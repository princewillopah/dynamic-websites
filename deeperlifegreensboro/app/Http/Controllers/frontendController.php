<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\Mail\ContactFormMail;
use App\Pastor;
use App\Sermon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class frontendController extends Controller
{
    public  function home(){
        return view('frontend.home')
                                ->with('slide1_event',Event::orderBy('created_at','desc')->take(3)->get())
                                ->with('slide2_event',Event::orderBy('created_at','desc')->skip(3)->take(3)->get())
                                ->with('slide3_event',Event::orderBy('created_at','desc')->skip(6)->take(3)->get())
                                ->with('sermons',Sermon::orderBy('created_at','desc')->take(3)->get())
                                ->with('category',Category::all());
                                ;


       
    }

    
    public  function sermon_category($categoryid){
        $sermons = Sermon::where('category_id',$categoryid)->paginate(9);
        $categoryName = Category::where('id',$categoryid)->get()->first();
        // $categoryName = Category::where()
        return view('frontend.sermons-category')
                                           ->with('categoryName',$categoryName)
                                           ->with('sermon_category',$sermons)
                                           ->with('category',Category::all());
    }

     public  function all_sermon(){
        return view('frontend.all-sermons')
                                           ->with('all_sermons',Sermon::orderBy('created_at','desc')->paginate(9))
                                           ->with('category',Category::all());
    }

    public  function ministry_children(){
        return view('frontend.children')
                              ->with('category',Category::all());
    }

    public  function ministry_youth(){
        return view('frontend.youth') 
                              ->with('category',Category::all());
    }  
    public  function ministry_men(){
        return view('frontend.men')
                                    ->with('category',Category::all());
    }
    public  function ministry_women(){
        return view('frontend.women')
                                    ->with('category',Category::all());
    }

    public  function about_about(){
        return view('frontend.about')
                                            ->with('category',Category::all());
    }

     public  function leader_kumuyi(){
        return view('frontend.pastor-kumuyi')
                                            ->with('category',Category::all());
    }

    public  function about_leadership(){
      
       $pastors = Pastor::all();
        return view('frontend.leadership')
                                         ->with('pastors',$pastors)
                                         ->with('category',Category::all());
    }

    public  function pastors($slug){
        $pastor      = Pastor::where('slug',$slug)->first();
        $otherpastors = Pastor::where('slug','!=',$slug)->get();

        return view('frontend.pastors')
                                            ->with('pastor',$pastor)
                                           ->with('otherpastors',$otherpastors)           
                                            ->with('category',Category::all());
    }
    public  function sermon_single($slug,$catid){
         $sermon         = Sermon::where('slug',$slug)->first();
         $relatedSermons = Sermon::where('slug','!=',$slug)->where('category_id',$catid)->get();

        return view('frontend.single-sermon')
                                              ->with('sermon',$sermon)
                                               ->with('relatedSermons',$relatedSermons)
                                            ->with('category',Category::all());
    }
    // public  function leader_olu(){
    //     return view('frontend.pastor-olu')
    //                                         ->with('category',Category::all());
    // }
    // public  function leader_yemi(){
    //     return view('frontend.pastor-yemi')
    //                                         ->with('category',Category::all());
    // }

    public  function about_what_we_believe(){
        return view('frontend.what-we-believe')
                                            ->with('category',Category::all());
    }

    public  function sermons(){
        return view('frontend.sermons')
                                      ->with('latest_sermon',Sermon::orderBy('created_at','desc')->first())
                                      ->with('firstRowRecent_sermon',Sermon::orderBy('created_at','desc')->skip(1)->take(3)->get())
                                      ->with('secondRowRecent_sermon',Sermon::orderBy('created_at','desc')->skip(4)->take(3)->get())
                                                                          ->with('category',Category::all());
        
    }

    public  function events(){
        return view('frontend.events')
                                       ->with('latest_event',Event::orderBy('created_at','desc')->first())
                                      ->with('all_event',Event::orderBy('created_at','desc')->paginate(5))
                                                                          ->with('category',Category::all());
    }

    public function single_events($slug){
        $single_event = Event::where('slug',$slug)->first();
        return view('frontend.single-event')->with('single_event',$single_event)
                                            ->with('category',Category::all());
                                    //   ->with('all_event',Event::orderBy('created_at','desc')->paginate(5));
    }
    
    public  function contact(){
        return view('frontend.contact')
                                            ->with('category',Category::all());
    }
    public function contact_store(Request $request){
        $this->validate($request, [
            'name'           =>'required',
            'email'          =>'required|email',
            'message'        =>'required',
        ]);

        // Mail::to('support@dlbcgreensboro.com')->send(new ContactFormMail($request));
          Mail::to('contact@dlbcgreensboro.com')->send(new ContactFormMail($request));
         
        // return view('frontend.contact');
        return redirect()->back()->with('success','Thank you. We will get back to you shortly.');
    }
    

}
