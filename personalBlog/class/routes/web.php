<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PublicController@index')->name('welcome');
Route::get('/post/{id}', 'PublicController@singlepost')->name('single.post');
Route::get('/about', 'PublicController@about')->name('about');
Route::get('/contact', 'PublicController@contact')->name('contact');


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::prefix('admin')->group(function (){
    Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');
    Route::get('/profile/edit', 'AdminController@profile_edit')->name('profile.edit');
    Route::post('/profile/update', 'AdminController@update_update')->name('profile.update');
    Route::get('/posts', 'PostController@index')->name('posts.index');
    Route::get('/posts/create', 'PostController@create')->name('post.create');
    Route::post('/posts/store', 'PostController@store')->name('post.store');
    Route::get('/posts/{id}/edit', 'PostController@edit')->name('post.edit');
    Route::put('/posts/{id}/update', 'PostController@update')->name('post.update');
    Route::get('/posts/{id}', 'PostController@show')->name('post.show');
    Route::delete('/posts/{id}', 'PostController@destroy')->name('post.delete');

    Route::get('/users', 'UserController@index')->name('users.index');
    Route::get('/users/{id}/edit', 'UserController@edit')->name('user.edit');
    Route::get('/users/{id}/view', 'UserController@view')->name('user.view');
    Route::post('/users/{id}/update', 'UserController@update')->name('user.update');
    Route::post('/users/{id}/delete', 'UserController@delete')->name('user.delete');
    Route::get('/users/remove-author/{id}', 'UserController@removeAuthor')->name('removeAuthor');
    Route::get('/users/add-to--author/{id}', 'UserController@addToAuthor')->name('addToAuthor');
    Route::get('/comments', 'CommentController@index')->name('comments.index');
    Route::get('/comment/{cid}/post/{pid}', 'CommentController@show')->name('comments.show');
    Route::get('/comment/{cid}/edit', 'CommentController@edit')->name('comment.edit');
    Route::put('/comment/{cid}/update', 'CommentController@update')->name('comment.update');
    Route::delete('/comment/{id}', 'CommentController@destroy')->name('comment.delete');
    Route::delete('/related-comment/{id}', 'CommentController@RelatedComment')->name('RelatedComment.delete');



});
