<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;//needed for image
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $cat = Category::all();
        return view('backend/category/all-categories')->with('categories',$cat);
    }

   
    public function create()
    {
        return view('backend/category/create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'name'=>'required|unique:categories|min:2|max:100'
            'name'=>'required|min:2|max:100',
            'cover_image' => 'image|nullable|mimes:jpg,jpeg,png,svg,gif|max: 2048',
            'icon' => 'image|nullable|mimes:jpg,jpeg,png|max: 1048'
        ]);

        $slug = Str::slug($request->name);//create the slug first
        $next = 2;//initializing variable "next"//next is the increment
        
         // Loop until we can query for the slug and it returns false
            while (Category::where('slug', '=', $slug)->first()) {//if the slug exist in database
                $slug = $slug . '-' . $next;////if the slug exist in database then add "-$next"
                $next++;//increase $next
            }//if however, slug is not in db, then go down to create the record

          $category = new Category();
          $category->name  = $request->name;
          $category->slug  = $slug;
          $category->save();
/////////////////////////cover img and card img ////
          if($request->hasFile('cover_image')){
            $file = $request->file('cover_image');//asign to variable $file
            $filename    = time().$file ->getClientOriginalName();//create a file name

                // // save original full image
                $originalImage = Image::make($file);//get the temporal image
                $originalPath = 'uploads/category/banners/';//path to store the full image
                $originalImage =  $originalImage->save($originalPath.$filename);

               // for store resized image
                $CardImgPath = 'uploads/category/cards/';//path to save resized image
                $originalImage->resize(250,null,function($constrain){$constrain->aspectRatio();});//resize saved image
                $originalImage->save($CardImgPath.$filename);//saved resized image in different path

                $category->cover_img = $filename;//save name of image in db
                $category->card_img = $filename;//they have ssame name buth different path and sizes
                $category->save();

        }else{//if no image is uploaded the use he deafault images
            $category->cover_img ='cover_img.jpg';
            $category->card_img ='card_img.jpg';
            $category->save();
        }

        ///////////////////////////for icon ///////////////////
        if($request->hasFile('icon')){
            $IconImage = $request->file('icon');//asign to variable $file
            $filename    = time().$IconImage ->getClientOriginalName();//create a file name

                // //Fullsize to be uploaded in the path public/uploads/category/icons/
                // $IconImage->move(public_path().'/uploads/category/icon-full/',$filename);
                    // // save original full image
                    $originalImage = Image::make( $IconImage);//get the temporal image
                    $originalPath = 'uploads/category/icon-full/';//path to store the full image
                    $originalImage =  $originalImage->save($originalPath.$filename);

                    //RESIZE  ANS SAVE IN 
                // $image_resize = Image::make('/uploads/category/icons/'.$filename);
                // $image_resize->fit(100, 100);
                // $image_resize->save('uploads/category/icons/' .$filename);

               $IconImgPath = 'uploads/category/icons/';//path to save resized image
                $originalImage->resize(100,null,function($constrain){$constrain->aspectRatio();});//resize saved image
                $originalImage->save($IconImgPath.$filename);//saved resized image in different path

                 $category->icon = $filename;//they have ssame name buth different path and sizes
                $category->save();
        }else{//if no image is uploaded the use he deafault images
            
            $category->icon ='icon.png';
            $category->save();
        }

        session()->flash('success','Category created successfully');
        return redirect(route('all-categories'));

    }


    // public function show(Category $category)
    // {
    //     return view('admin.category.show')->with('category',$category);
    // }


    public function edit(Category $category,$cat_id)
    {
        $category = Category::find($cat_id);
        return view('backend.category.edit')->with('category',$category);
    }


    public function update(Request $request, $catId)
    {

        // if( $request->name == $category->name){
        //   $this->validate($request, [
        //         'name'=>'required'
        //   ]);
        // }else{
        //   $this->validate($request, [
        //       'name'=>'required|unique:categories|min:2|max:100'
        //   ]);
        // }
        $category = Category::find($catId);

        $this->validate($request, [
        'name'=>'required|min:2|max:100',
        'cover_image' => 'image|nullable|mimes:jpg,jpeg,png,svg,gif|max: 2048',
        'icon' => 'image|nullable|mimes:jpg,jpeg,png|max: 1048'
            ]);


        // $category->name  = $request->name;
        // $category->slug  = str_slug($request->name);
        // $category->save();
        $slug = Str::slug($request->name);//create the slug first
        $next = 2;//initializing variable "next"//next is the increment
        
         // Loop until we can query for the slug and it returns false
            while (Category::where('slug', '=', $slug)->first()) {//if the slug exist in database
               
                $slug = $slug . '-' . $next;////if the slug exist in database then add "-$next"
                $next++;//increase $next
            }//if however, slug is not in db, then go down to create the record

  
          $category->name  = $request->name;
          $category->slug  = $slug;
          $category->save();

            /////////////////////////cover img and card img ////
            if($request->hasFile('cover_image')){
                    //delete old file uploaded from file folder
                    $banner_path = public_path('uploads/category/banners/'. $category->cover_img);
                    $card_path = public_path('uploads/category/cards/'. $category->card_img);
                    if($category){
                        if($category->cover_img !=="cover_img.jpg"){
                             unlink($banner_path);
                            unlink($card_path);
                        }
                   }

                $file = $request->file('cover_image');//asign to variable $file
                $filename    = time().$file ->getClientOriginalName();//create a file name
                      
                    // // save original full image
                    $originalImage = Image::make($file);//get the temporal image
                    $originalPath = 'uploads/category/banners/';//path to store the full image
                    $originalImage =  $originalImage->save($originalPath.$filename);

                // for store resized image
                    $CardImgPath = 'uploads/category/cards/';//path to save resized image
                    $originalImage->resize(350,null,function($constrain){$constrain->aspectRatio();});//resize saved image
                    $originalImage->save($CardImgPath.$filename);//saved resized image in different path

                    $category->cover_img = $filename;//save name of image in db
                    $category->card_img = $filename;//they have ssame name buth different path and sizes
                    $category->save();
            }
            /////////////////////////////////////////////////////////////
                ///////////////////////////for icon ///////////////////
                if($request->hasFile('icon')){
                    //remove old img
                    $iconFull_path = public_path('uploads/category/icon-full/'. $category->icon);
                    $icon_path = public_path('uploads/category/icons/'. $category->icon);
                    if($category){
                        if($category->icon !=="icon.png"){//dont remove default img
                             unlink($iconFull_path);
                            unlink($icon_path);
                        }
                   }
                    $IconImage = $request->file('icon');//asign to variable $file
                    $filename    = time().$IconImage ->getClientOriginalName();//create a file name

                            // // save original full image
                            $originalImage = Image::make( $IconImage);//get the temporal image
                            $originalPath = 'uploads/category/icon-full/';//path to store the full image
                            $originalImage =  $originalImage->save($originalPath.$filename);

                    $IconImgPath = 'uploads/category/icons/';//path to save resized image
                        $originalImage->resize(50,null,function($constrain){$constrain->aspectRatio();});//resize saved image
                        $originalImage->save($IconImgPath.$filename);//saved resized image in different path

                        $category->icon = $filename;//they have ssame name buth different path and sizes
                        $category->save();
                }//endif

        session()->flash('success','Category updated successfully');
        return redirect(route('all-categories'));

    }//end edit

    // public function destroy(Category $category)
    // {

    //     $category->delete();
    //     session()->flash('success','Category deleted successfully');
    //     return redirect(route('categories.index'));
    // }
}
