<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class ProjectController extends BaseController
{
    function projectList(){
    	return view('copystatic.project.project-list');
    }

    function taskboard(){
    	return view('copystatic.project.taskboard');
    }

    function ticketList(){
    	return view('copystatic.project.ticket-list');
    }

    function ticketDetail(){
    	return view('copystatic.project.ticket-detail');
    }
}
