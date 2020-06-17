<?php

namespace App\Http\Controllers\employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class HomPageController extends Controller
{

    public  function index(){

        return view('employer.index');
    }



    public  function resumeBasket(){

        return view('employer.resume-basket');
    }
    public  function myPostedJob(){
        return view('employer.myposted-job');
    }

    public  function liveJob(){
        return view('employer.livejob');
    }

    public  function resumeSearch(){
        return view('employer.resume-search');
    }

    public  function offers(){
        return view('employer.offers');
    }

    public  function package(){
        return view('employer.package');
    }

    public  function subscription(){
        return view('employer.subscription');
    }
}
