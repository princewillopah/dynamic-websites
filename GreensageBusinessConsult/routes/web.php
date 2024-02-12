<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\JobFrontendController;
use App\Http\Controllers\CourseFrontendController;
use App\Http\Controllers\FlutterwaveController;
// Route::get('/', function () {
//         return view('welcome');
//     });
    




//////////////////GENERAL PAGES//////////////////////////////////////////////////////////////////////////////////
Route::get('/', [FrontendController::class,'home'])->name('home-page');
Route::get('/about-us', [FrontendController::class,'about'])->name('about');
Route::get('/our-calendar-for-this-year', [FrontendController::class,'calender_page'])->name('calendar-page');
Route::get('/download-calendar-for-this-year', [FrontendController::class,'download_calender_page'])->name('download-calender-page');
Route::get('/download-greensage-calendar-for-this-year', [FrontendController::class,'get_calender'])->name('get-calender');


Route::get('/contact-us', [FrontendController::class,'contact'])->name('contact');
// Route::get('/road-tanker', [FrontendController::class,'road_tanker'])->name('road-tanker');
// Route::get('/terminals', [FrontendController::class,'terminals'])->name('terminals');
// Route::get('/health-quality-safety-and-environment', [FrontendController::class,'hqse'])->name('hseq');
Route::post('/contact-us',[FrontendController::class,'store'])->name('contact.store');

Route::get('/hr-consultancy-form', [FrontendController::class,'hr_form'])->name('hr-form');
Route::get('/course-registration-form', [FrontendController::class,'course_registration_form'])->name('course-registration-form');

Route::post('/course-registration-store', [FrontendController::class,'course_registration_store'])->name('course-registration-store');
Route::get('/become-an-instructor-form',[FrontendController::class,'instructor_form'])->name('instructor-form');
//////////////////END GENERAL PAGES////////////////////////////////////////////////////////////////////



///////////////////////JOBS/////////////////////////////////////////////////////////////////////////////
Route::get('/hr-outsourcing', [JobFrontendController::class,'hr_about_us'])->name('hr-about-us');
Route::get('/cv-writing', [JobFrontendController::class,'cv'])->name('cv');
Route::post('/cv-writing/checkout', [JobFrontendController::class,'cv_checkout'])->name('cv-checkout');
Route::get('/top-jobs', [JobFrontendController::class,'top_jobs'])->name('top-jobs');
Route::get('/paginate-more-jobs-ajax', [JobFrontendController::class,'paginate_more_jobs_ajax'])->name('paginate-more-jobs-ajax');
Route::get('/top-jobs/{id}/{slug}', [JobFrontendController::class,'single_job'])->name('single-job');


Route::get('/apply-job-now/{job_code?}', [JobFrontendController::class,'apply_now_form_page'])->name('apply-now-form-page');
Route::post('/apply-now', [JobFrontendController::class,'apply_now'])->name('apply-now');
Route::post('/direct-job-apply', [JobFrontendController::class,'direct_job_apply'])->name('direct-job-apply');


// The page that displays the payment form
// Route::get('/', function () {
//   return view('welcome');
// });
// The route that the button calls to initialize payment
Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');
// Route::post('/webhook/flutterwave', [FlutterwaveController::class, 'webhook'])->name('webhook');

Route::post('/verify-payment', [FlutterwaveController::class, 'verify_payment'])->name('verify-payment');
Route::get('/verify-payment-success', [FlutterwaveController::class, 'verify_payment_success'])->name('verify-payment-success');
/////////////////////// END JOBS /////////////////////////////////////////////////////////////////////////////



///////////////////////COURSES/////////////////////////////////////////////////////////////////////////////
Route::get('/search', [FrontendController::class,'filter2'])->name('filter-2');
Route::get('/search-result', [FrontendController::class,'search_result'])->name('search-result');

Route::get('/courses', [CourseFrontendController::class,'all_courses'])->name('all--courses');
Route::get('/get-all-courses-ajax', [CourseFrontendController::class,'get_all_courses_ajax'])->name('get-all-courses-ajax');//for the pagination at all courses page
// 
Route::get('/all-Course-categories', [CourseFrontendController::class,'all_categories'])->name('all-Course-categories');

// Route::get('/category', [CourseFrontendController::class,'category'])->name('category');
Route::get('/training-courses/{slug?}', [CourseFrontendController::class,'training_ajax'])->name('paginate-more-courses-ajax');
Route::get('/training/{slug}', [CourseFrontendController::class,'training'])->name('training-route');

// Route::get('/xxx/xty/virtual-training', [FrontendController::class,'virtual_training'])->name('virtual-training');

Route::get('/category/{slug}', [CourseFrontendController::class,'single_category'])->name('single-category');
Route::get('/category/{slug}/course/{cslug}', [CourseFrontendController::class,'single_course'])->name('single-course');
/////////////////////////////END COURSES///////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // END FRONTEND
////////////////////////////////////////////////////////////////////////////////////////////////////


Auth::routes();

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // BEGIN BACKEND
////////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////dashboard /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/all-courses',[CourseController::class,'index'])->name('all-courses');
Route::get('/add-course',[CourseController::class,'create'])->name('add-course');
Route::post('/add-course-store',[CourseController::class,'store'])->name('courses.store');
Route::post('/ckeditor-image-store',[CourseController::class,'ckeditor_image_store'])->name('ckeditor.image_upload.store');
Route::get('/make-popularity',[CourseController::class,'make_popularity'])->name('courses.make-popularity');
Route::get('/course-edit/{id}',[CourseController::class,'edit'])->name('courses.edit');
Route::post('/course-edit-update/{id}',[CourseController::class,'update'])->name('courses.update');


Route::get('/all-categories',[CategoryController::class,'index'])->name('all-categories');
Route::get('/add-category',[CategoryController::class,'create'])->name('add-category');
Route::post('/add-category-store',[CategoryController::class,'store'])->name('categories.store');
Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
Route::post('/category-edit-update/{id}',[CategoryController::class,'update'])->name('categories.update');


Route::get('/all-formats',[FormatController::class,'index'])->name('all-formats');/////
Route::get('/add-format',[FormatController::class,'create'])->name('add-format');//////
Route::post('/add-type-store',[FormatController::class,'store'])->name('formats.store');



Route::get('/all-jobs',[JobController::class,'index'])->name('all-jobs');
// Route::get('/recent-jobs',[JobController::class,'recent_jobs'])->name('recent-jobs');
Route::get('/add-job',[JobController::class,'create'])->name('add-job');//
Route::post('/add-job-store',[JobController::class,'store'])->name('jobs.store');
Route::get('/job-edit/{id}',[JobController::class,'edit'])->name('jobs.edit');
Route::post('/job-edit-update/{id}',[JobController::class,'update'])->name('jobs.update');


Route::get('/all-sectors',[IndustryController::class,'index'])->name('all-sectors');
Route::get('/add-sector',[IndustryController::class,'create'])->name('add-sector');
Route::post('/add-sector-store',[IndustryController::class,'store'])->name('sectors.store');


Route::get('/all-locations',[LocationController::class,'index'])->name('all-locations');/////
Route::get('/add-location',[LocationController::class,'create'])->name('add-location');//////
Route::post('/add-location-store',[LocationController::class,'store'])->name('locations.store');

// Route::post('/ckeditor-image-store',[JobController::class,'ckeditor_image_store'])->name('ckeditor.image_upload.store');
// Route::get('/make-popularity',[JobController::class,'make_popularity'])->name('courses.make-popularity');




