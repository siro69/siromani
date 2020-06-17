<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class EcommerceController extends BaseController
{
    function dashboard(){
    	return view('copystatic.ecommerce.dashboard');
    }

    function product(){
    	return view('copystatic.ecommerce.product');
    }

    function productList(){
        return view('copystatic.ecommerce.product-list');
    }

    function productDetail(){
    	return view('copystatic.ecommerce.product-detail');
    }
}