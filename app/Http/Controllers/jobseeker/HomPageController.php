<?php

namespace App\Http\Controllers\jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomPageController extends Controller
{
    public  function index(){

        return view('jobseeker.profile-information');
    }

    public  function profilePreferences(){
        return view('jobseeker.profile-preferences');
    }

    public  function profileExperience(){
        return view('jobseeker.profile-experience');
    }

    public  function profileEducation(){
        return view('jobseeker.profile-education');
    }

    public  function profileSkill(){
        return view('jobseeker.profile-skill');
    }

    public  function profileReference(){
        return view('jobseeker.profile-reference');
    }

    public  function profileAward(){
        return view('jobseeker.profile-award');
    }

    public  function profileTraining(){
        return view('jobseeker.profile-training');
    }

    public  function profileLanguage(){
        return view('jobseeker.profile-language');
    }

}
