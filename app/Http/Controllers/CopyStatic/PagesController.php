<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class PagesController extends BaseController
{
    function blank(){
    	return view('copystatic.pages.blank');
    }

    function gallery(){
    	return view('copystatic.pages.gallery');
    }

    function invoices1(){
        return view('copystatic.pages.invoices1');
    }

    function invoices2(){
        return view('copystatic.pages.invoices2');
    }
    
    function pricing(){
        return view('copystatic.pages.pricing');
    }

    function profile(){
        return view('copystatic.pages.profile');
    }

    function search(){
        return view('copystatic.pages.search');
    }

    function timeline(){
    	return view('copystatic.pages.timeline');
    }
}
