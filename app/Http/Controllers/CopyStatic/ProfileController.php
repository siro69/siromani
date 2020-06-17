<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class ProfileController extends BaseController
{
    function myProfile(){
    	return view('copystatic.profile.my-profile');
    }
}