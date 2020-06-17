<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class TablesController extends BaseController
{
    function normal(){
    	return view('copystatic.tables.normal');
    }

    function datatable(){
    	return view('copystatic.tables.datatable');
    }

    function editable(){
    	return view('copystatic.tables.editable');
    }

    function footable(){
    	return view('copystatic.tables.footable');
    }

    function color(){
    	return view('copystatic.tables.color');
    }
}