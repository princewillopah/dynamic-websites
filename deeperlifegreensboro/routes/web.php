<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','frontendController@home')->name('homepage');
Route::get('/our-sermons','frontendController@sermons')->name('sermons');
Route::get('/our-events','frontendController@events')->name('our-event');
Route::get('/our-events/{slug}','frontendController@single_events')->name('single-event');
Route::get('/contact','frontendController@contact')->name('contact');
Route::post('/contact','frontendController@contact_store')->name('contact.store');
Route::get('/ministries/children','frontendController@ministry_children')->name('children');
Route::get('/ministries/youth','frontendController@ministry_youth')->name('youth');
Route::get('/ministries/men','frontendController@ministry_men')->name('men');
Route::get('/ministries/women','frontendController@ministry_women')->name('women');
Route::get('/about','frontendController@about_about')->name('about');
Route::get('/about/leadership','frontendController@about_leadership')->name('leadership');


Route::get('/about/leadership/pastor-kumuyi','frontendController@leader_kumuyi')->name('kumuyi');
Route::get('/about/leadership/{slug}','frontendController@pastors')->name('pastors');
// Route::get('/about/leader/pastor-michael','frontendController@leader_michael')->name('michael');
// Route::get('/about/leader/pastor-olu','frontendController@leader_olu')->name('olu');
// Route::get('/about/leader/pastor-yemi','frontendController@leader_yemi')->name('yemi');
Route::get('/about/what-we-believe','frontendController@about_what_we_believe')->name('what-we-believe');

Route::get('/sermon/{id}/category','frontendController@sermon_category')->name('sermon.category');
Route::get('/sermon/{slug}/{catid}','frontendController@sermon_single')->name('sermon.single');
Route::get('/all-sermons','frontendController@all_sermon')->name('all.sermons');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');//dashboard
Route::resource('/pastors', 'PastorController');
Route::resource('/categories', 'CategoryController');
Route::resource('/events', 'EventController');
Route::resource('/sermons', 'SermonController');

Route::get('/settings','SettingController@settings')->name('settings');


