<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Format;
use App\Models\Category;
use Response;
use App\Mail\CourseRegistrationForm;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Mail;

// use App\Mail\JobApplicationMail;
// // use Illuminate\Support\Carbon;
// use Carbon\Carbon;

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
    // $popular_courses = Course::with('category','format')->where('popular', 1)->orderBy('created_at','desc')->take(9)->get();
    // $popular_courses = Course::where('popular', 1)->orderBy('created_at','desc')->take(9)->get();
    $popular_courses = Course::with('category')->where('popular', 1)->select('category_id','slug','title','amount','thumbnail','short_description')->orderBy('created_at','desc')->take(9)->get();
  //   $popular_courses = Course::where('popular', 1)->orderBy('created_at','desc')->take(9)->get();
 
    $formats = Format::query()->select('name', 'id','slug')->get();
    $cats =  Category::with('courses')->has('courses')->select('name', 'id','slug','icon')->get();//onlythose categories that has 1 or more courses
    // $cats =  Category::all();//onlythose categories that has 1 or more courses
    // dd($cats);
    return view('frontend.index')->with('formats',$formats )->with('cats', $cats)->with('popular_courses', $popular_courses);
  }

  ////////////////////////////////////////////////////////////////////////////////////////////////////
// about page
////////////////////////////////////////////////////////////////////////////////////////////////////

  public function about()
  {
    return view('frontend.about')->with('cats',  Category::has('courses')->select('name', 'slug')->get())->with('formats', Format::select('name', 'id','slug')->get());
  }
  public function calender_page()
  {
    return view('frontend.calender_page')->with('cats',  Category::has('courses')->select('name', 'slug')->get())->with('formats', Format::select('name', 'id','slug')->get());
  }
  public function download_calender_page()
  {
    return view('frontend.download-calender_page')->with('cats',  Category::has('courses')->select('name', 'slug')->get())->with('formats', Format::select('name', 'id','slug')->get());
  }
  public function get_calender()
  {
    $fileToDownload = public_path()."/uploads/Greensage-Calendar-2021.pdf";//the path where the pdf is located
   $headers = array('Content-type: application/pdf');
   
    return Response::download($fileToDownload,"Greensage Calendar 2021.pdf", $headers);
    // ->with('cats',  Category::has('courses')->select('name', 'slug')->get())->with('formats', Format::select('name', 'id','slug')->get());
  }
////////////////////////////////////////////////////////////////////////////////////////////////////
      //  training pages
////////////////////////////////////////////////////////////////////////////////////////////////////
   public function hr_form()
   {
     return view('front-pages.training.category')->with('cats',  Category::has('courses')->select('name', 'slug')->get())->with('formats', Format::all());
   }
      // ---------------------------------------------------------------------------------
   public function course_registration_form()
   {
    //  $courses =  Course::all()->groupBy('category_id')->select('title', 'category_id','id')->get();
    // $courses =  Course::select('category_id','title','id')->groupBy('category_id');
    $courses =  Course::all()->groupBy('category_id');//for livewire
      //  dd($courses->select('category_id','title','id')->get()); 
  $courses_count = ceil( $courses->count() / 3);//to use this count in view to divide the grid
  // dd( $courses_count);
     return view('frontend.registration.course-registration-form')
                      ->with('courses', $courses)->with('courses_count', $courses_count)
                      ->with('cats',  Category::has('courses')->select('id','name', 'slug')->get())
                      ->with('formats', Format::all());
   }

   public function course_registration_store(Request $request)
   {
                            $this->validate($request, [
                              'firstName' => 'required|min:1',
                              'email' => 'required|email',
                              'courseCategories' => 'required|array|min:1',
                              'proposedDate' =>'required|date'

                          ]);
                          $details = [
                            'firstName' => $request->firstName,
                            'lastName' => $request->lastName,
                            'phone' => $request->phone,
                            'email' => $request->email,
                            'courseCategories' => $request->courseCategories,
                            'proposedDate' => $request->proposedDate
                        ];
                        dd($details);
                        Mail::to('info@ievicon.com')->send(new CourseRegistrationForm($details));
                        session()->flash('success','We will contact you shortly.');

                  return redirect(route('home-page'));
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
    return view('frontend.contact')->with('cats',  Category::has('courses')->select('name', 'slug')->get())->with('formats', Format::select('name', 'id','slug')->get());
  }


////////////////////////////////////////////////////////////////////////////////////////////////////
            // OTHER FUNCTIONALITIES
////////////////////////////////////////////////////////////////////////////////////////////////////

  public  function search_result()
  {


    // dd(request()->query('search'));
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
      $courses = Course::orderBy('created_at', 'desc')->get();
    }

    return view('frontend.search-results')->with('courses', $courses) //all ministries with minister
    ->with('formats', Format::all())
    ->with('cats',  Category::has('courses')->select('name', 'slug','id')->get());
  }


  public function filter2()
  {
    $searches = Course::when(request('title'), function ($query) {//
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
