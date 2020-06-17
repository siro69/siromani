<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class FormController extends BaseController
{
    function basic(){
    	return view('copystatic.form.basic');
    }

    function advanced(){
    	return view('copystatic.form.advanced');
    }

    function examples(){
    	return view('copystatic.form.examples');
    }

    function validation(){
    	return view('copystatic.form.validation');
    }

    function wizard(){
    	return view('copystatic.form.wizard');
    }

    function editors(){
    	return view('copystatic.form.editors');
    }

    function upload(){
    	return view('copystatic.form.upload');
    }

    function summernote(){
    	return view('copystatic.form.summernote');
    }
}