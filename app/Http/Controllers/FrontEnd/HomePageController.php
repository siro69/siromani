<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public  function  index(){
        return view('frontend.homepage.index');
    }

    public  function contactus(){
        return view('frontend.homepage.index-contact');
    }

    public function jobseekerregistter(){
        return view('frontend.homepage.index-jobseeker');

    }

    public  function employerregister(){
        return view('frontend.homepage.index-employer');
    }
}
