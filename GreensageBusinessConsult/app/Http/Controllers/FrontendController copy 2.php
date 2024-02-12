<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Format;
use App\Models\Category;
use App\Models\Location;
use App\Models\Job;
use App\Models\Industry;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\JobApplicationMail;
// use Illuminate\Support\Carbon;
use Carbon\Carbon;

// use Spatie\QueryBuilder\AllowedFilter;
// use Spatie\QueryBuilder\QueryBuilder;
class FrontendController extends Controller
{

  ////////////////////////////////////////////////////////////////////////////////////////////////////
            // MAIN MENU
////////////////////////////////////////////////////////////////////////////////////////////////////
  public function home()
  {
    
// Model::where('id', 1)->pluck('name', 'surname');//Eloquent: Get specific columns (not all the row). Pluck returns an array.

// Model::where('id', 1)->value('name');// If you only want to get the result value:
    $popular_courses = Course::where('popular', 1)->orderBy('created_at','desc')->take(9)->get();
    $formats = Format::all();
    $cats =  Category::has('courses')->get();//onlythose categories that has 1 or more courses
  
    return view('frontend.index')->with('formats',$formats )->with('cats', $cats)->with('popular_courses', $popular_courses);
  }

  ////////////////////////////////////////////////////////////////////////////////////////////////////
// about page
////////////////////////////////////////////////////////////////////////////////////////////////////

  public function about()
  {
    return view('frontend.about')->with('cats',  Category::has('courses')->select('name', 'slug')->get())->with('formats', Format::all());
  }

  ////////////////////////////////////////////////////////////////////////////////////////////////////
      //  training pages
////////////////////////////////////////////////////////////////////////////////////////////////////
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

     $jobs =  $jobs->paginate(10);
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
        ///// for select location
          if($selectedLocation){
            $jobs = $jobs->where('location_id',$selectedLocation);
          }
        ///// for select location
        if($selectedSector){
          $jobs = $jobs->where('industry_id',$selectedSector);
        }

      $totalFound = $jobs->count();
    $jobs = $jobs->paginate(10);
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
              //   $job = Job::where('id',$request->job_id)->first();
              //   $applicants_of_a_job = $job->applicants()->get();
              //   foreach ($applicants_of_a_job as $x) {
              //     if($x->job_id == $job->id){
              //       return redirect()->back()->with('error','You have already Applied for this job');
              //     }
              // }
              // dd($request->all());
              // dd($applicants_of_a_job);
               $cvAttatched = $request->file('cv_upload');
               $data = [
                'name'=> $request->name,
                'email'=> $request->email,
                'sex'=> $request->sex,
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

////////////////////////////////////////////////////////////////////////////////////////////////////
      //  training pages
////////////////////////////////////////////////////////////////////////////////////////////////////
   public function hr_form()
   {
     return view('front-pages.training.category')->with('cats',  Category::has('courses')->select('name', 'slug')->get())->with('formats', Format::all());
   }
      // ---------------------------------------------------------------------------------
   public function course_form()
   {
     return view('front-pages.training.in-house-training')->with('cats',  Category::has('courses')->select('name', 'slug')->get())->with('formats', Format::all());
   }
      // ---------------------------------------------------------------------------------
   public function instructor_form()
   {
     return view('front-pages.training.virtual-training')->with('cats',  Category::has('courses')->select('name', 'slug')->get())->with('formats', Format::all());
   }
  // public function hr_form()
  // {
  //   return view('frontend.training.category')->with('cats', Category::all());
  // }
  // public function course_form()
  // {
  //   return view('frontend.training.in-house-training')->with('cats', Category::all());
  // }
  // public function instructor_form()
  // {
  //   return view('frontend.training.virtual-training')->with('cats', Category::all());
  // }

////////////////////////////////////////////////////////////////////////////////////////////////////
// hr pages
////////////////////////////////////////////////////////////////////////////////////////////////////
  public function category()
  {
    return view('frontend.category')->with('cats', Category::all())->with('formats', Format::all());
  }
   // ---------------------------------------------------------------------------------
  public function all_courses()
  {
    $courses = Course::paginate(15);
    return view('frontend.all-courses')->with('courses', $courses)->with('formats', Format::all())
                            ->with('cats', Category::all());
  }
     // ---------------------------------------------------------------------------------
  public function get_all_courses_ajax()//for ajax return page
  {
    // $courses = Course::paginate(15);
    $courses = Course::paginate(15);
    return view('frontend.includes.all-courses-ajax-list')
                          ->with('courses', $courses)->render();
                          // ->with('formats', Format::all())
                          // ->with('cats', Category::all());
  }

   // ---------------------------------------------------------------------------------
  public function training($slug, Request $request)
  {
    if($request->ajax()){
       $data = $request->all();
      //  $cats = Category::has('courses')->select('name', 'slug','id')->get();
       $format = Format::where('slug',$slug)->first();
       $format_course = $format->courses();//i didnt use get or paginate to end it yet because i am still performing some more queries eg sorting// $format_course = $format->courses()->get();
       $format_course_count = $format->courses()->count();
    //for sorting of these $format_courses
         if(isset($data['sort']) && !empty($data['sort'])){//if there is a value of $data['sort'] is submitted and is not empty
           if($data['sort'] === 'newest_product'){//select option with value "newest_product" is selected
             $format_course =  $format_course->orderBy('id','desc');//then sort $format_course by the id in desc order
           }else if($data['sort'] === 'alphabetical'){
             $format_course =  $format_course->orderBy('title','asc');//then sort $format_course by the id in desc order
           }else if($data['sort'] === 'price_lowest'){
             $format_course =  $format_course->orderBy('amount','asc');//then sort $format_course by the id in desc order
           }else if($data['sort'] === 'price_hightest'){
             $format_course =  $format_course->orderBy('amount','desc');//then sort $format_course by the id in desc order
           }
         }else{
           $format_course =  $format_course->orderBy('id','desc');//if no input is selected the bring the courses based on newest
         }
         
         
         
         
       $format_course = $format_course->paginate(10);//finanly, paginate this after all sortings
       
       
       // ---------------------------------------------------------------------------------
      //  $format_id = $format->only('id');//get the id////i didnt use pluck because it it for more than one//it returns a collection of array
       ////get those category whose courses have the same format based on the format_id
      //  $category_of_courses_with_same_format =  Category::wherehas('courses',function($q) use ($format_id){
      //    $q->where('format_id', $format_id);
      //    })->with(['courses' => function ($query) use ($format_id) {
      //        $query->where('format_id', $format_id);
      //    }])->get();
   

   
       return view('frontend.includes.ajax_course_list')
                                    ->with('format_courses_count', $format_course_count)
                                      ->with('format_courses', $format_course)
                                      ->render();
                               
 
    }else{


     $cats = Category::has('courses')->select('name', 'slug','id')->get();
    $format = Format::where('slug',$slug)->first();
    $format_course = $format->courses();//i didnt use get or paginate to end it yet because i am still performing some more queries eg sorting// $format_course = $format->courses()->get();
    $format_course_count = $format->courses()->count();
 //for sorting of these $format_courses
      if(isset($_GET['sort']) && !empty($_GET['sort'])){//if there is a value of $_GET['sort'] is submitted and is not empty
        if($_GET['sort'] === 'newest_product'){//select option with value "newest_product" is selected
          $format_course =  $format_course->orderBy('id','desc');//then sort $format_course by the id in desc order
        }else if($_GET['sort'] === 'alphabetical'){
          $format_course =  $format_course->orderBy('title','asc');//then sort $format_course by the id in desc order
        }else if($_GET['sort'] === 'price_lowest'){
          $format_course =  $format_course->orderBy('amount','asc');//then sort $format_course by the id in desc order
        }else if($_GET['sort'] === 'price_hightest'){
          $format_course =  $format_course->orderBy('amount','desc');//then sort $format_course by the id in desc order
        }
      }else{
        $format_course =  $format_course->orderBy('id','desc');//if no input is selected the bring the courses based on newest
      }
      
      
      
      
    $format_course = $format_course->paginate(10);//finanly, paginate this after all sortings
    
    
    // --------------------------------
    $format_id = $format->only('id');//get the id////i didnt use pluck because it it for more than one//it returns a collection of array
    //get those category whose courses have the same format based on the format_id
    $category_of_courses_with_same_format =  Category::wherehas('courses',function($q) use ($format_id){
      $q->where('format_id', $format_id);
      })->with(['courses' => function ($query) use ($format_id) {
          $query->where('format_id', $format_id);
      }])->get();

      // $courses = QueryBuilder::for(Course::class)
      //   ->allowedFilters([
      //       AllowedFilter::exact('category', 'category_id'),
      //       ])
      //   ->get();

    return view('frontend.training')->with('cats', $cats)
                              ->with('category_of_courses_with_same_format',  $category_of_courses_with_same_format)
                              ->with('format', $format)
                              ->with('format_courses', $format_course)
                              ->with('format_courses_count', $format_course_count)
                              ->with('formats', Format::all());
    }//endif

   
  }
  // public function virtual_training()
  // {
  //   return view('frontend.training.virtual-training')
  //   ->with('formats', Format::all())->with('cats', Category::select('name', 'slug')->get());
  // }
////////////////////////////////////////////////////////////////////////////////////////////////////
// contact page
////////////////////////////////////////////////////////////////////////////////////////////////////

  public function contact()
  {
    return view('frontend.contact')->with('cats', Category::has('courses')->select('name', 'slug')->get())
                                                          ->with('formats', Format::all());
  }

////////////////////////////////////////////////////////////////////////////////////////////////////
            // INNER LINKS
////////////////////////////////////////////////////////////////////////////////////////////////////
  public function single_category($slug)
  {
    $category = Category::where('slug', $slug)->first();
    // $category_courses = $category->courses()->get();//get courses related to this category//i could easily handle that in blade with $category->courses
    $category_courses = $category->courses()->select('format_id','title', 'slug','amount')->get();
                                              
// dd($category_courses);

    // $category_id = $category->pluck('id');//get the id
    // $relatedSermons = Sermon::where('slug','!=',$slug)
    //                                     ->whereHas('category',function($parentSlug) use($sermon_category){
    //                                         $parentSlug->where('slug',$sermon_category)->first();
    //                                     })
    //                                     ->get();
    // $relatedCategories = Category::where('slug','!=',$slug)->where('category_id','!=',$category_id)->get();
    $relatedCategories = Category::where('slug','!=',$slug)->select('name','slug')->get();
    return view('frontend.single-category')->with('cats',  Category::has('courses')->select('name', 'slug')->get())
                                              ->with('category', $category)
                                              ->with('formats', Format::all())
                                              ->with('category_courses', $category_courses)
                                              ->with('relatedCategories', $relatedCategories);

    // return view('frontend.single-category')->with('formats', Format::all())->with('cats', Category::all())->with('category', $category);
  }

   // ---------------------------------------------------------------------------------
  public function single_course($slug,$cslug)
  {
    $course = Course::where('slug', $cslug)->first();//get the course with the help of the slug
    $relatedCourses = Course::where('slug','!=',$cslug)->where('category_id', $course->category_id)->select('title','slug','category_id')->get();
   
    // $relatedPopularCourses = $relatedCourses->where('popular',1)->get();//get only those related courses that are popular
    $relatedPopularCourses = Course::where('slug','!=',$cslug)->where('category_id', $course->category_id)->where('popular',1)->select('title','slug','category_id','amount','thumbnail')->get();
    // $re = $relatedPopularCourses->pluck('name');
    // $course_category = Category::where('slug',$slug)->first();//get the slug of the category the course belongs to
    // $course_category_id = $course_category->pluck('id');//extract the categoryID from the cateory
    // $relatedCourses = Course::where('slug','!=',$cslug)->where('category_id',$course_category_id)->get();

    // $relatedCourses = Course::whereHas('category', function($query) use($course) 
        // { 
        //     $query->where('name', $course->category); 
        // })->whereNotIn('name', [$course->name])->get();

      // $relatedCourses = Course::where('slug','!=',$cslug)->where('slug',$course_category_id)->get();
    // $relatedCourses = Course::where('slug','!=',$cslug)->get();
    
    return view('frontend.single-course')->with('cats',  Category::has('courses')->select('name', 'slug')->get())
                                        ->with('formats', Format::all())
                                         ->with('course', $course)
                                         ->with('related_courses', $relatedCourses)
                                         ->with('related_popular_courses', $relatedPopularCourses);
                                        // ->with('related_popular_courses', $re);

    // return view('frontend.single-category')->with('formats', Format::all())->with('cats', Category::all())->with('category', $category);
  }
////////////////////////////////////////////////////////////////////////////////////////////////////
            // OTHER FUNCTIONALITIES
////////////////////////////////////////////////////////////////////////////////////////////////////

  public  function search()
  {

    $search = request()->query('search');
    if ($search) {
      $courses = Course::where('title', 'Like', "%{$search}%")
        // ->orWhere('price','Like',"%{$search}%")
        ->orWhere('popular', 'Like', "%{$search}%")
        ->orWhere('date', 'Like', "%{$search}%")
        ->orWhere('description', 'Like', "%{$search}%")
        // ->orWhere('eventEndDate','Like',"%{$search}%")
        // ->orWhere('slug','Like',"%{$search}%")
        ->get();
    } else {
      $courses = Course::orderBy('createdAt', 'desc')->get();
    }

    return view('frontend.search-results')->with('courses', $courses) //all ministries with minister
    ->with('formats', Format::all());
  }


  public function filter2()
  {
    $searches = Course::when(request('title'), function ($query) {
      return $query->where('title', request('title'));
    })
      ->when(request('category'), function ($query) {
        return $query->where('courses.category_id', request('category'));
      })
      ->when(request('format'), function ($query) {
        return $query->where('courses.format_id', request('format')); 
      })
      ->get();
    return view('frontend.searches')->with('searches', $searches)
      ->with('formats', Format::all())
      ->with('cats',  Category::has('courses')->select('name', 'slug','id')->get()); //pupulate dropdown
  }
}
