<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    //return view('welcome');
    return redirect('dashboard');
});
Route::get('/search_customer', function () {
    return view('form_search_customer');
});
Route::get('result_search_customer', 'HomeController@result_search_customer');
Route::post('list_search_customer', 'HomeController@list_search_customer');

Route::auth();

Route::get('dashboard', 'DashboardController@index');

Route::get('branch', 'BranchController@index');
Route::post('branch/show_edit_branch', 'BranchController@show_edit_branch');
Route::post('branch/update_edit_branch', 'BranchController@update_edit_branch');
Route::post('branch/update_login_branch', 'BranchController@update_login_branch');

Route::get('report/month', 'ReportController@show_month');
Route::get('report/year', 'ReportController@show_year');
Route::post('report/gen_report_month', 'ReportController@gen_report_month');
Route::post('report/gen_report_year', 'ReportController@gen_report_year');