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

Route::get('/', function () {
    return view('sessions.choose');
});

Route::get('/register', 'registerController@create');
Route::post('/register', 'registerController@store');

Route::get('/login', 'sessionsController@create')->name('login');
Route::post('/login', 'sessionsController@store')->name('login');
Route::get('/logout', 'sessionsController@logout');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/profile/show','profileController@show');
    Route::put('/profile/update','profileController@update');

    //posts routes
    Route::get('/post/create','postController@create')->name('post.create');
    Route::post('/post/store', 'postController@store')->name('post.store');
    Route::get('/posts', 'postController@getPosts')->name('post.get');
    Route::put('/post/update/{id}', 'postController@update')->name('post.update');
    Route::get('/post/delete/{id}', 'postController@delete')->name('post.delete');

    //comments routes
    Route::post('/comment/store/{id}', 'commentController@store')->name('comment.store');
    Route::get('/comments/{id}', 'commentController@getComments')->name('comments.get');
    Route::put('/comment/update/{id}', 'commentController@update')->name('comment.update');
    Route::get('/comment/delete/{id}', 'commentController@delete')->name('comment.delete');

});

