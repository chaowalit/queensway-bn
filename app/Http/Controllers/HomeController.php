<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\QwcBranch;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function result_search_customer(Request $request){
        $keyword = $request->get('keyword', null);

        $QwcBranch = new QwcBranch;
		$result = $QwcBranch->getQwcBranchAll();
        //dump($result);
        $url = "http://rm9.qwc-th.com/public/api/v1/search_customer?keyword=1670700183593";
        $res = curlGet($url);
        //dd(json_decode($res, true));
        $data = array(

        );
        return view('result_search_customer', $data);
    }
}
