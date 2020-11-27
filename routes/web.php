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
    Route::get('add_video', function () {
        return view('admin/add_video');
    });
    Route::get('add_service', function () {
        return view('admin/add_service');
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user_homepage', function () {
    return view('users/homepage');
});
