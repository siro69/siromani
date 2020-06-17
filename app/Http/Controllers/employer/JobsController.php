<?php

namespace App\Http\Controllers\employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Company_Cat;
use App\model\Job_Location;

class JobsController extends Controller
{
    public function index(){
        $categories =  Company_Cat::get();
        $locations = Job_Location::get();

        return view('employer.postajob', compact(['categories','locations' ]));
    }
}
