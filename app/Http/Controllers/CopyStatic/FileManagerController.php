<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class FileManagerController extends BaseController
{
    function all(){
    	return view('copystatic.file-manager.all');
    }

    function documents(){
    	return view('copystatic.file-manager.documents');
    }

    function media(){
        return view('copystatic.file-manager.media');
    }

    function image(){
    	return view('copystatic.file-manager.image');
    }
}
