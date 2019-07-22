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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/home', function(){
    return redirect('/');
});
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');


/*
    GET /posts (index)
    GET /posts/create (create)
    POST /posts (store)
    GET /posts/{id} (show)
    GET /posts/{id}/edit (edit)
    PATCH /posts/{id} (update)
    DELETE /posts/{id} (delete)
*/

Route::resource('/posts', 'PostsController');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Auth::routes();
