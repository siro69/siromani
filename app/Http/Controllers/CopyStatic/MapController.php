<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class MapController extends BaseController
{
    function yandex(){
    	return view('copystatic.map.yandex');
    }

    function jvector(){
        return view('copystatic.map.jvector');
    }
}
