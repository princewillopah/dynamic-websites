<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\Format;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;//needed for image
use Intervention\Image\Exception\NotReadableException;//needed for image
class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
          $courses = Course::all();
           return view('backend/course/all-courses')->with('courses',$courses);
       
    }


        public function make_popularity(Request $request){//  to chenge the status of popular
            $course = Course::find( $request->courseId);//GET THE COUSER
            $course->popular = $request->popularStatus;
            // dd()
            $course->save();
            return response()->json(['success'=>'Status changed successfully']);

        }


    
    public function create()
    {
        return view('backend/course/create')->with('categorys',Category::select('name','id')->get())->with('formats',Format::select('name','id')->get());
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'name'=>'required|unique:categories|min:2|max:100'
            'title'=>'required|min:2|max:100',
            'amount'=>'sometimes',
            'short_description'=>'sometimes',
            'description'=>'sometimes',
            'category'=>'required',
            'format'=>'required',
            'coverImage' => 'image|nullable|mimes:jpg,jpeg,png,svg,gif|max: 2048',

        ]);


        $slug = Str::slug($request->title);//create the slug first
        $next = 2;//initializing variable "next"//next is the increment
         // Loop until we can query for the slug and it returns false
            while (Course::where('slug', '=', $slug)->first()) {//if the slug exist in database
                $slug = $slug . '-' . $next;////if the slug exist in database then add "-$next"
                $next++;//increase $next
            }//if however, slug is not in db, then go down to create the record

            $course = new Course();
            $course->title  = $request->title;
            $course->slug  = $slug;
            $course->amount  = $request->amount ? $request->amount: 0;
            $course->short_description  = $request->short_description?$request->short_description:"This Greensage Business Consult training course will benefit delegates who desire to become master in ".$request->title;
            $course->description  = $request->description;
            $course->category_id  = $request->category;
            $course->format_id  = $request->format;
            $course->save();
 
            if($request->hasFile('coverImage')){
                $file = $request->file('coverImage');//asign to variable $file
                $filename    = time().$file ->getClientOriginalName();//create a file name

                    // // save original full image
                    $originalImage = Image::make($file);//get the temporal image
                    $originalPath = 'uploads/coverImgs/';//path to store the full image
                    $originalImage =  $originalImage->save($originalPath.$filename);

                   // for store resized image
                    $thumbnailPath = 'uploads/thumbnails/';//path to save resized image
                    $originalImage->resize(250,null,function($constrain){$constrain->aspectRatio();});//resize saved image
                    $originalImage->save($thumbnailPath.$filename);//saved resized image in different path

                $course->cover_img = $filename;//save name of image in db
                $course->thumbnail = $filename;//they have ssame name buth different path and sizes
                    $course->save();

            }else{//if no image is uploaded the use he deafault images
                $course->cover_img ='cover_img_default.jpg';
                $course->thumbnail ='thumb_img_default.jpg';
                $course->save();
            }


        session()->flash('success','Course created successfully');
        return redirect()->back();

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
        // $image = $course->addMediaFromRequest('upload')->toMediaCollection('images');

        // return response()->json([ 'url' => $image->getUrl() ]);
    }

    
    public function show(Course $course)
    {
        
    }

   
    public function edit($course_id)
    {
        $course = Course::find($course_id);
        return view('backend/course/edit')
                            ->with('course',$course)
                        ->with('categorys',Category::select('name','id')->get())->with('formats',Format::select('name','id')->get());
    }

  
    public function update(Request $request, $course_id)
    {
         $course = Course::find($course_id);
        $this->validate($request, [
            // 'name'=>'required|unique:categories|min:2|max:100'
            'title'=>'required|min:2|max:100',
            'amount'=>'sometimes',
            'short_description'=>'sometimes',
            'description'=>'sometimes',
            'category'=>'required',
            'format'=>'required',
            'coverImage' => 'image|nullable|mimes:jpg,jpeg,png,svg,gif|max: 2048',

        ]);


        $slug = Str::slug($request->title);//create the slug first
        $next = 2;//initializing variable "next"//next is the increment
         // Loop until we can query for the slug and it returns false
            while (Course::where('slug', '=', $slug)->first()) {//if the slug exist in database
                $slug = $slug . '-' . $next;////if the slug exist in database then add "-$next"
                $next++;//increase $next
            }//if however, slug is not in db, then go down to create the record

            
            $course->title  = $request->title;
            $course->slug  = $slug;
            $course->amount  = $request->amount ? $request->amount: 0;
            $course->short_description  = $request->short_description;
            $course->description  = $request->description;
            $course->category_id  = $request->category;
            $course->format_id  = $request->format;
            $course->save();
 
            if($request->hasFile('coverImage')){
                $cover_img_path = public_path('uploads/coverImgs/'. $course->cover_img);
                $thumbnail_path = public_path('uploads/thumbnails/'. $course->thumbnail);
                if( $course){
                    if($course->cover_img !=="cover_img_default.jpg"){
                         unlink($cover_img_path);
                        unlink($thumbnail_path);
                    }
               }


                $file = $request->file('coverImage');//asign to variable $file
                $filename    = time().$file ->getClientOriginalName();//create a file name

                    // // save original full image
                    $originalImage = Image::make($file);//get the temporal image
                    $originalPath = 'uploads/coverImgs/';//path to store the full image
                    $originalImage =  $originalImage->save($originalPath.$filename);

                   // for store resized image
                    $thumbnailPath = 'uploads/thumbnails/';//path to save resized image
                    $originalImage->resize(250,null,function($constrain){$constrain->aspectRatio();});//resize saved image
                    $originalImage->save($thumbnailPath.$filename);//saved resized image in different path

                $course->cover_img = $filename;//save name of image in db
                $course->thumbnail = $filename;//they have ssame name buth different path and sizes
                    $course->save();

            }else{//if no image is uploaded the use he deafault images
                $course->cover_img ='cover_img_default.jpg';
                $course->thumbnail ='thumb_img_default.jpg';
                $course->save();
            }


        session()->flash('success','Course updated successfully');
        return redirect(route('all-courses'));
    }

  
    public function destroy(Course $course)
    {
        //
    }
}
