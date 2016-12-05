<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\QwcAdminController;
use App\Models\QwcBranch;

class ReportController extends QwcAdminController{
	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
    }
    public function show_month(){
    	$data = array(
			
		);
		$this->render_view('report/show_month', $data, 'report', 1);
    }
    public function show_year(){
    	$data = array(
			
		);
		$this->render_view('report/show_year', $data, 'report', 2);
    }

    public function gen_report_month(Request $request){
    	dd($request->all());
    }
    public function gen_report_year(Request $request){
    	dd($request->all());
    }
}