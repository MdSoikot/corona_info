<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('admin/login');
});

Route::get('admin/register', function () {
    return view('admin/register');
});

Route::get('forgot_password', function () {
    return view('admin/forgot_password');
});
Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('front_end_logout', 'Auth\LoginController@front_end_logout')->name("front_end_logout");


Route::middleware('auth')->group(function(){
 
 
    Route::get('homepage', function () {
        return view('admin/homepage');
    });
    Route::get('add_slider', function () {
        return view('admin/add_slider');
    });
    Route::get('corona_update', function () {
        return view('admin/corona_update');
    });
    // dd("error");
    Route::post('add_corona_update', 'corona_update_controller@store')->name("add_corona_update");

    Route::get('add_video', function () {
        return view('admin/add_video');
    });
    Route::get('add_service', function () {
        return view('admin/add_service');
    });
});


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user_homepage', function () {
    return view('users/homepage');
});

Route::get('/about', function () {
    return view('users/about');
});

Route::get('/service', function () {
    return view('users/service');
});

Route::get('/contact', function () {
    return view('users/contact');
});
Route::get('/important_video', function () {
    return view('users/important_video');
});

Route::get('/join_us', function () {
    return view('users/join_us');
});