<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'jobseeker',  ], function () {
    Route::get('/profile-preferences', 'HomPageController@profilePreferences')->name('profile-preferences');
    Route::get('/profile-information', 'HomPageController@index')->name('dashboard');
    Route::get('/profile-experience', 'HomPageController@profileExperience')->name('profile-experience');
    Route::get('/profile-education', 'HomPageController@profileEducation')->name('profile-education');
    Route::get('/profile-skill', 'HomPageController@profileSkill')->name('profile-skill');
    Route::get('/profile-reference', 'HomPageController@profileReference')->name('profile-reference');
    Route::get('/profile-award', 'HomPageController@profileAward')->name('profile-award');
    Route::get('/profile-training', 'HomPageController@profileTraining')->name('profile-training');
    Route::get('/profile-language', 'HomPageController@profileLanguage')->name('profile-language');

});
