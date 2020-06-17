<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class WidgetsController extends BaseController
{
    function app(){
    	return view('copystatic.widgets.app');
    }

    function data(){
    	return view('copystatic.widgets.data');
    }
}