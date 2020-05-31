<?php

use Illuminate\Support\Facades\Route;

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
});

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['prefix'=>'admin','as'=>'admin.', 'middleware' => 'auth'], function () {

    Route::get('/profile', 'Admin\ProfileController@index')->name('profile');
    Route::get('/profile/edit', 'Admin\ProfileController@edit')->name('profile.edit');
    Route::post('/profile/update', 'Admin\ProfileController@update')->name('profile.update');

    Route::get('/users', 'Admin\UserController@index')->name('users.index');
    Route::get('/users/create', 'Admin\UserController@create')->name('users.create');
    Route::post('/users/store', 'Admin\UserController@store')->name('users.store');

    Route::get('/all-blogs', 'Admin\AllBlogController@index')->name('allblogs');
    Route::get('/all-blogs/{id}/show', 'Admin\AllBlogController@show')->name('allblogs.show');
    Route::delete('/all-blogs/{id}/destroy', 'Admin\AllBlogController@destroy')->name('allblogs.destroy');

    Route::resource('/blog', 'Admin\BlogController');
    Route::put('/blog/image/{id}/update', 'Admin\BlogController@blogImageUpdate')->name('blog.image.update');
});
