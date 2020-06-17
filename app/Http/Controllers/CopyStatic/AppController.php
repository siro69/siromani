<?php

namespace App\Http\Controllers\CopyStatic;


use Illuminate\Routing\Controller as BaseController;

class AppController extends BaseController
{
    function inbox(){
    	return view('copystatic.app.inbox');
    }

    function compose(){
    	return view('copystatic.app.compose');
    }

    function single(){
    	return view('copystatic.app.single');
    }

    function chat(){
    	return view('copystatic.app.chat');
    }

    function calendar(){
        return view('copystatic.app.calendar');
    }

    function contactList(){
    	return view('copystatic.app.contact-list');
    }
}
