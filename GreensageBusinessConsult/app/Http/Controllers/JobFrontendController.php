<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Location;
use App\Models\Job;
use App\Models\Industry;
use App\Models\Format;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobApplicationMail;
use Carbon\Carbon;

class JobFrontendController extends Controller
{
    

    
  ////////////////////////////////////////////////////////////////////////////////////////////////////
      //  training pages
////////////////////////////////////////////////////////////////////////////////////////////////////

public function hr_about_us()
{
  return view('frontend.jobs.job-about-us')->with('cats',  Category::has('courses')->select('name', 'slug')->get())->with('formats', Format::all());
}

public function cv()
{
  return view('frontend.jobs.cv')->with('cats',  Category::has('courses')->select('name', 'slug')->get())->with('formats', Format::all());
}







public function top_jobs()
{
  $jobs = Job::orderBy('created_at','desc');
  $recent_jobs = $jobs->take(9)->get();
  $most_viewed_jobs = Job::has('applicants')->take(9)->get();
  //  $recent_jobs = $jobs->select('title','id','slug')->take(9)->get();
  //  $most_viewed_jobs = Job::has('applicants')->select('title','id','slug')->take(9)->get();
  //  foreach($jobs as $job){
  //     if($job->applicants()->count() > 0){
  //      array_push($most_viewed_jobs,$job);
  //     }
  //  }

   $jobs =  $jobs->paginate(2);
  //  dd($jobs);
  //  dd($most_viewed_jobs);
  //  dd( $recent_jobs);
  return view('frontend.jobs.top-jobs')
                    ->with('cats',  Category::has('courses')->select('name', 'slug')->get())
                    ->with('formats', Format::all())
                    ->with('recent_jobs', $recent_jobs)
                    ->with('most_viewed_jobs', $most_viewed_jobs)
                    ->with('jobs', $jobs)
                    ->with('locations', Location::orderBy('name','asc')->get())
                    ->with('sectors', Industry::orderBy('name','asc')->get());
}

public function paginate_more_jobs_ajax(Request $request)
{

      $jobs = Job::orderBy('created_at','desc');//or Job::query()
   
      $searchKeyword = $request->search_query;
      $searchKeyword = str_replace(" ","%",$searchKeyword);//replace empty space with % from given string
      $selectedLocation = $request->selected_location;//country selected and sent by ajax
      $selectedSector = $request->selected_sector;
      //for search box
      if($searchKeyword && !empty($searchKeyword )){
          $jobs->where(function($q) use ($searchKeyword){
                  $q->where('title','like',"%{$searchKeyword}%")
                    ->orWhere('company_name','like',"%{$searchKeyword}%");
          });
      }
      /////very important  for select location & sector when getting an exact match for both
    //     if($selectedLocation){
    //       $jobs = $jobs->where('location_id',$selectedLocation);
    //     }
    //   ///// for select location
    //   if($selectedSector){
    //     $jobs = $jobs->where('industry_id',$selectedSector);
    //   }
//             when getting a combination of both results
    if($selectedLocation || $selectedSector){
        $jobs = $jobs->where('location_id',$selectedLocation)
        ->orWhere('industry_id',$selectedSector);
      }
  

    $totalFound = $jobs->count();
  $jobs = $jobs->paginate(2);
  // dd($totalFound);
  // dd($jobs);
  return view('frontend.jobs.paginated-list-data')
                    ->with('jobs', $jobs)->with('totalFound', $totalFound)->render();
}

public function  single_job($id,$slug)
{
  $job = Job::where('slug',$slug)->where('id',$id)->first();
  // $job_id = $job->only('id');
  $relatedjobs = Job::where('slug','!=',$slug)->where('id','!=',$id)->where('industry_id', $job->industry_id)->select('title','id','slug','due_date','job_type','location_id','industry_id','created_at')->get();
// dd($relatedjobs);
  return view('frontend.jobs.single-job')
                    ->with('cats',  Category::has('courses')->select('name', 'slug')->get())
                    ->with('formats', Format::all())
                    ->with('job', $job)->with('relatedjobs',$relatedjobs);
           
}




public function direct_job_apply(Request $request)
{


                    $this->validate($request, [
                      // 'name'=>'required|unique:categories|min:2|max:100'
                      'name'=>'required|min:2|max:100',
                      'email'=>'required|email',
                      'sex'=>'required',
                      'job_id'=>'required',
                      'cv_upload'=>'required|mimes:doc,pdf,docx,zip,txt|file|max:5000',

                  ]);
              // 
              $job = Job::where('id',$request->job_id)->first();
            //   $applicants_of_a_job = $job->applicants()->get();
            //   foreach ($applicants_of_a_job as $x) {
            //     if($x->job_id == $job->id){
            //       return redirect()->back()->with('error','You have already Applied for this job');
            //     }
            // }
            dd($request->all());
            // dd($applicants_of_a_job);
             $cvAttatched = $request->file('cv_upload');
             $data = [
              'name'=> $request->name,
              'email'=> $request->email,
              'sex'=> $request->sex,
              'job_title' => $job->title,
              'cv' => $cvAttatched,
          ];
          // dd($data);
            Mail::to('hr@greensagebconsult.com')->send(new JobApplicationMail($data));


             $applicant = new Applicant();
             $applicant->full_name = $request->name;
             $applicant->email = $request->email;
             $applicant->sex = $request->sex;
             $applicant->job_id = $request->job_id;
        // for cv
                $current_time = Carbon::now()->format('d-m-Y');
                $myfileName = $request->name.'-'.$applicant->email.'-cv-'.$current_time;
                // $mytime->toDateTimeString();
                // dd($fileName);
                $fileNameToStore = '';// to store the name in db add add to request

                if ($request->hasFile('cv_upload')) {
                  $filenameWithExt = $request->file('cv_upload')->getClientOriginalName();
                  // Get Filename
                  $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                  // Get just Extension
                  $extension = $request->file('cv_upload')->getClientOriginalExtension();
                  // Filename To store
                  // $fileNameToStore = $request->name.'-'.time().'-'.$filename. '_'. time().'.'.$extension;
                  $fileNameToStore = $myfileName.'.'.$extension;
                 // Upload Image
                  // $path = $request->file('cv_upload')->storeAs('public/uploads/cvs', $fileNameToStore);
                  $request->cv_upload->move(public_path('/uploads/cvs'), $fileNameToStore);
                  $applicant->cv_upload  = $fileNameToStore;
                  }
                
               $sussess = $applicant->save();
// ===============================================================================
// email //
// ===================================================================
                //add to fileNameToStore to request
              //  $request->request->add(['cv_uploaded' => $fileNameToStore]);// or $request->request->set(key, value)

              // if($sussess){//if result is in db then send email to effe
              //   $data = [
              //     'name'=> $request->name,
              //     'email'=> $request->email,
              //     'sex'=> $request->sex,
              //     'cv' => $cvAttatched,
              // ];
              // // dd($data);
              //   Mail::to('hr@greensagebconsult.com')->send(new JobApplicationMail($data));
                
              // }

  return redirect()->back()->with('success','Application Successfully');

                   
}

// 
public function apply_now_form_page(Request $request,$job_code = null){
// dd($job_code);
  return view('frontend.jobs.apply-now')->with('job_code',$job_code)
                ->with('cats',  Category::has('courses')->select('name', 'slug')->get())
                ->with('formats', Format::all());
}

public function apply_now(Request $request)
{
  


                    $this->validate($request, [
                      'name'=>'required|min:2|max:100',
                      'email'=>'required|email',
                      'sex'=>'required',
                      'job_code'=>'required',
                      'cv_upload'=>'required|mimes:doc,pdf,docx,zip,txt|file|max:5000',

                  ]);
                
                  $job = Job::where('job_code',$request->job_code)->first();//get job from its code
                $job_id = $job->id;//get job id from job
           
             $cvAttatched = $request->file('cv_upload');
             $data = [
              'name'=> $request->name,
              'email'=> $request->email,
              'sex'=> $request->sex,
              'job_title' => $job->title,
              'cv' => $cvAttatched,
          ];
          // dd($data);
            Mail::to('hr@greensagebconsult.com')->send(new JobApplicationMail($data));


             $applicant = new Applicant();
             $applicant->full_name = $request->name;
             $applicant->email = $request->email;
             $applicant->sex = $request->sex;
             $applicant->job_id = $job_id;
        // for cv
                $current_time = Carbon::now()->format('d-m-Y');
                $myfileName = $request->name.'-'.$applicant->email.'-cv-'.$current_time;
                // $mytime->toDateTimeString();
                // dd($fileName);
                $fileNameToStore = '';// to store the name in db add add to request

                if ($request->hasFile('cv_upload')) {
                  $filenameWithExt = $request->file('cv_upload')->getClientOriginalName();
                  // Get Filename
                  $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                  // Get just Extension
                  $extension = $request->file('cv_upload')->getClientOriginalExtension();
                  // Filename To store
                  // $fileNameToStore = $request->name.'-'.time().'-'.$filename. '_'. time().'.'.$extension;
                  $fileNameToStore = $myfileName.'.'.$extension;
                 // Upload Image
                  // $path = $request->file('cv_upload')->storeAs('public/uploads/cvs', $fileNameToStore);
                  $request->cv_upload->move(public_path('/uploads/cvs'), $fileNameToStore);
                  $applicant->cv_upload  = $fileNameToStore;
                  }
                
               $sussess = $applicant->save();
               

      //  return view('frontend.jobs.apply-now')->with('success','Application Successfully');
       return redirect('top-jobs')->with('success','Application Successfully');
                   
   }


   public function cv_checkout(Request $request){
    // $request->all();
    $inputs = $request->except(['_token']);//get all except token
    // dd($request->all());
    // $inputs
    $total = array_sum($inputs);
  
      return view('frontend.jobs.cv_checkout')->with('orders', $inputs)->with('total', $total);
    }








  }//end controller