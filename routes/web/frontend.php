<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'FrontEnd'], function () {
    Route::get('/', 'HomePageController@index')->name('home');
    Route::get('/jobseeker/register', 'HomePageController@jobseekerregistter')->name('jobseekerregister');
    Route::get('/employer/register', 'HomePageController@employerregister')->name('employerregister');
    Route::get('/contactus', 'HomePageController@contactus')->name('contactus');
    Route::get('/blogs', 'BlogsController@index')->name('blog');
    Route::get('/training', 'TrainingController@index')->name('training');
    Route::get('/employer', 'EmployerController@index')->name('employer');
    Route::get('/jobseeker', 'JobSeekerController@index')->name('jobseeker');
    Route::get('/postjob', 'PostAJobController@index')->name('postjob');
});
