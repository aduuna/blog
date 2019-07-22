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

Route::get('/', 'PageController@home');

Route::get('/about', 'PageController@about');

Route::get('/contact', 'PageController@contact');


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

Route::get('/home', 'HomeController@index')->name('home');
