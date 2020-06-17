<?php

namespace App\Http\Controllers\CopyStatic;

use Illuminate\Routing\Controller as BaseController;

class ChartController extends BaseController
{
    function echarts(){
    	return view('copystatic.chart.echarts');
    }

    function c3(){
    	return view('copystatic.chart.c3');
    }

    function morris(){
    	return view('copystatic.chart.morris');
    }

    function flot(){
    	return view('copystatic.chart.flot');
    }

    function chartjs(){
    	return view('copystatic.chart.chartjs');
    }

    function sparkline(){
    	return view('copystatic.chart.sparkline');
    }

    function knob(){
    	return view('copystatic.chart.knob');
    }
}