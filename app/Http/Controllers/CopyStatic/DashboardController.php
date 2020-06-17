<?php

namespace App\Http\Controllers\CopyStatic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(){
    	return view('copystatic.dashboard.index');
    }
}
