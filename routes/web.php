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
    return view('welcome');
})->name('homepage');

Route::get('profile/me', 'DashboardController@profile')->name('profile.me');

Route::group(['prefix' => 'blog'], function() {
    Route::get('/posts', 'PostController@index')->name('posts.index');
    Route::get('/post/{post}', 'PostController@show')->name('posts.show');
});

Auth::routes();

Route::group(['prefix' => 'admin'], function() {
    Route::resource('posts', 'Admin\PostController', ['except' => 'show', 'as' => 'admin']);
});
