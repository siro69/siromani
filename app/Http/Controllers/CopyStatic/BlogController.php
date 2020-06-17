<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class BlogController extends BaseController
{
    function dashboard(){
    	return view('copystatic.blog.dashboard');
    }

    function newPost(){
    	return view('copystatic.blog.new-post');
    }

    function list(){
        return view('copystatic.blog.list');
    }

    function grid(){
        return view('copystatic.blog.grid');
    }

    function detail(){
    	return view('copystatic.blog.detail');
    }
}