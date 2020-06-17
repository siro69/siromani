<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'employer'], function () {
    Route::get('/dashboard', 'HomPageController@index')->name('dashboard');
    Route::get('/postajob', 'JobsController@index')->name('PostAJob');
    Route::get('/resumebasket', 'HomPageController@resumeBasket')->name('resumeBasket');
    Route::get('/myposted-job', 'HomPageController@myPostedJob')->name('myPostedJob');
    Route::get('/livejob', 'HomPageController@liveJob')->name('liveJob');
    Route::get('/resume-search', 'HomPageController@resumeSearch')->name('resumeSearch');
    Route::get('/offers', 'HomPageController@offers')->name('offers');
    Route::get('/package', 'HomPageController@package')->name('package');
    Route::get('/subscription', 'HomPageController@subscription')->name('subscription');
});
