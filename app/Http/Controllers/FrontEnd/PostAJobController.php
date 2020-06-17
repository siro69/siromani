<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostAJobController extends Controller
{
    public  function  index(){
        return view('frontend.postAJob.index');
    }
}
