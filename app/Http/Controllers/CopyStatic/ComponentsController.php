<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class ComponentsController extends BaseController
{
    function ui(){
    	return view('copystatic.components.ui');
    }

    function alerts(){
    	return view('copystatic.components.alerts');
    }

    function collapse(){
    	return view('copystatic.components.collapse');
    }

    function colors(){
    	return view('copystatic.components.colors');
    }

    function dialogs(){
        return view('copystatic.components.dialogs');
    }

    function list(){
    	return view('copystatic.components.list');
    }

    function media(){
    	return view('copystatic.components.media');
    }

    function modals(){
    	return view('copystatic.components.modals');
    }

    function notifications(){
    	return view('copystatic.components.notifications');
    }

    function progressbars(){
    	return view('copystatic.components.progressbars');
    }

    function range(){
    	return view('copystatic.components.range');
    }

    function sortable(){
    	return view('copystatic.components.sortable');
    }

    function tabs(){
    	return view('copystatic.components.tabs');
    }

    function waves(){
    	return view('copystatic.components.waves');
    }
}
