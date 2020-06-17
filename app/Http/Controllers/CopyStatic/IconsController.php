<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class IconsController extends BaseController
{
    function material(){
    	return view('copystatic.icons.material');
    }

    function themify(){
    	return view('copystatic.icons.themify');
    }

    function weather(){
    	return view('copystatic.icons.weather');
    }
}