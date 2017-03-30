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

Route::group(['prefix' => 'blog'], function() {
    Route::resource('posts', 'PostController');
});

Auth::routes();

Route::get('/profile/me', 'DashboardController@profile')->name('profile.me');
