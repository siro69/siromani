<?php

use Illuminate\Support\Facades\Route;

//Auth routes
Route::get('login', function () {
    return redirect()->route('frontend.home');
});

Route::post('login', 'Auth\LoginController@login')->name('login');;
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', function () {
    return redirect()->route('frontend.home');
});

Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
//End of Auth routes




Route::group(['namespace' => 'CopyStatic'], function () {
    Route::get('authentication', function () {
        return redirect('authentication/login');
    });
    Route::get('authentication/login', 'AuthenticationController@login')->name('authentication.login');
    Route::get('authentication/register', 'AuthenticationController@register')->name('authentication.register');
    Route::get('authentication/lockscreen', 'AuthenticationController@lockscreen')->name('authentication.lockscreen');
    Route::get('authentication/forgot', 'AuthenticationController@forgot')->name('authentication.forgot');
    Route::get('authentication/page404', 'AuthenticationController@page404')->name('authentication.page404');
    Route::get('authentication/page500', 'AuthenticationController@page500')->name('authentication.page500');
    Route::get('authentication/offline', 'AuthenticationController@offline')->name('authentication.offline');
});
