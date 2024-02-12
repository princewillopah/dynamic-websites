<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Location;
use Illuminate\Support\Str;
// use Haruncpi\LaravelIdGenerator\IdGenerator;
use Carbon\Carbon;
class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $jobs = Job::all();
        return view('backend.job.all-jobs')->with('jobs',$jobs);
    }

    
    public function create(){
        return view('backend.job.create')->with('locations',Location::orderBy('name','asc')->get())->with('sectors',Industry::orderBy('name','asc')->get());;
    }
    
    // public function recent_jobs(){
    //     return view('backend.job.recent-jobs');
    // }


    public function store(Request $request)
    {
        $this->validate($request, [
            // 'name'=>'required|unique:categories|min:2|max:100'
            'title'=>'required|min:2|max:100',
            'short_description'=>'sometimes',
            'description'=>'sometimes',
            'location'=>'required',
            'sector'=>'required',

        ]);
        // $prefix = "D";//for generated id  
      
        // dd($request->all());
            $job = new Job();
            $job->title  = $request->title;
            $job->slug  = Str::slug($request->title);
            $job->company_name  = $request->company_name ? $request->company_name: 'Greensage Business Consult';
            $job->job_type = $request->job_type?$request->job_type:"FullTime";
            $job->job_code = "D".Str::random(9);
            $job->short_description  = $request->short_description ? $request->short_description :"Greensage is a leading professional services firm with capabilities in Strategy, Business Consulting, HR  Advisory, Learning and development, Talent Acquisition and Outsourcing.";
            $job->due_date  = $request->due_date ? $request->due_date: Carbon::now()->addDays(8)->format('Y-m-d H:i:s');
            $job->description  = $request->description;
            $job->location_id  = $request->location?$request->location :"Lagos";
            $job->industry_id  = $request->sector?$request->sector:"Others";

            $job->save();
            return redirect()->back()->with('success','Job created successfully');

    }
   

  
    public function ckeditor_image_store(Request $request)
    {
        if($request->hasFile('upload')) {//upload is from ckeditor script where csrf token is
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
        // $image = $job->addMediaFromRequest('upload')->toMediaCollection('images');

        // return response()->json([ 'url' => $image->getUrl() ]);
    }

///////////////////////////////////////////////////////

        public function edit($job_id)
    {
        $job = Job::find($job_id);
        return view('backend.job.edit')->with('job',$job)->with('locations',Location::select('name','id')->orderBy('name','asc')->get())->with('sectors',Industry::select('name','id')->orderBy('name','asc')->get());;
    }

    public function update(Request $request,$job_id)
    {
        $job = Job::find($job_id);
        $this->validate($request, [
            // 'name'=>'required|unique:categories|min:2|max:100'
            'title'=>'required|min:2|max:100',
            'short_description'=>'sometimes',
            'description'=>'sometimes',
            'location'=>'required',
            'sector'=>'required',

        ]);
        // $prefix = "D";//for generated id  
      
        // dd($request->all());
            $job->title  = $request->title;
            $job->slug  = Str::slug($request->title);
            $job->company_name  = $request->company_name ? $request->company_name: 'Greensage Business Consult';
            $job->job_type = $request->job_type?$request->job_type:"FullTime";
            $job->job_code = "D".Str::random(9);
            $job->short_description  = $request->short_description ? $request->short_description :"Greensage is a leading professional services firm with capabilities in Strategy, Business Consulting, HR  Advisory, Learning and development, Talent Acquisition and Outsourcing.";
            $job->due_date  = $request->due_date ? $request->due_date: Carbon::now()->addDays(8)->format('Y-m-d H:i:s');
            $job->description  = $request->description;
            $job->location_id  = $request->location?$request->location :"Lagos";
            $job->industry_id  = $request->sector?$request->sector:"Others";

            $job->save();
            session()->flash('success','Job updated successfully');
            return redirect(route('all-jobs'));
    }





}//controller
