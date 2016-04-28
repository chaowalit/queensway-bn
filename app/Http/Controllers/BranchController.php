<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\QwcAdminController;

class BranchController extends QwcAdminController{
	public function __construct()
    {
        $this->middleware('auth'); //Auth::user()->name , {!! csrf_field() !!} , Auth::guest() , {{ url('/logout') }}
    }

	public function index(){
		$branch = array();
		$param = [
			"password" => "a93490dea95f1bf527827bdc047e8a3f11371081",
		];
		$result = curlPost("http://rm9.qwc-th.com/public/api/v1/getCompanyInfo", $param); //json_decode($server_output, true);
		$res = json_decode($result, true);

		if($res['header']['code'] == 200){
			foreach($res['data']['item'] as $val){
				$branch[] = $val;
			}
		}

		$data = array(
			"branch" => $branch,
		);
		$this->render_view('branch/main_branch', $data, 'branch');
	}
}
?>
