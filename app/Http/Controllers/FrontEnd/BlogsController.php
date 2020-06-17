<?php

namespace App\Http\Controllers\FrontEnd;

use App\Group;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public  function  index(){

            return view('frontend.blogs.index');
    }
}
