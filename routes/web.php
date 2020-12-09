<?php

use Illuminate\Support\Facades\Route;




Route::get('admin/login', function () {
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
Route::resource('/contact', 'contact_controller');


Route::middleware('auth')->group(function () {


    Route::get('homepage', function () {
        return view('admin/homepage');
    });
    Route::get('add_slider', function () {
        return view('admin/add_slider');
    });
    Route::get('corona_update', function () {
        return view('admin/corona_update');
    });
    Route::post('/add_corona_update', 'Corona_update_controller@store')->name("add_corona_update");
    Route::resource('/services', 'Service_controller');
    Route::resource('/videos', 'Video_controller');

    Route::get('add_video', function () {
        return view('admin/add_video');
    });
    Route::get('add_service', function () {
        return view('admin/add_service');
    });
});


Auth::routes();


Route::get('/', 'Corona_update_controller@index')->name("user_homepage");

Route::get('/about', function () {
    return view('frontend/home/about');
});

Route::get('/services', function () {
    return view('frontend/home/services');
});

Route::get('/contact_page', function () {
    return view('frontend/home/contact');
});
Route::get('/important_video', function () {
    return view('users/important_video');
});

Route::get('/user_register', function () {
    return view('frontend/home/user_register');
});
Route::get('/user_login', function () {
    return view('frontend/home/user_login');
});
