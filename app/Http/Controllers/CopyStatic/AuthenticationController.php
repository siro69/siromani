<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class AuthenticationController extends BaseController
{
    function login(){
    	return view('copystatic.authentication.login');
    }

    function register(){
    	return view('copystatic.authentication.register');
    }

    function lockscreen(){
        return view('copystatic.authentication.lockscreen');
    }

    function forgot(){
    	return view('copystatic.authentication.forgot');
    }
    
    function page404(){
    	return view('copystatic.authentication.page404');
    }

    function page500(){
        return view('copystatic.authentication.page500');
    }

    function offline(){
    	return view('copystatic.authentication.offline');
    }
}
