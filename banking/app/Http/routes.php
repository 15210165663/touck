<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web'],'namespace' => 'Home'], function () {
    Route::get('project/index', ['uses' => 'ProjectController@index']);
    Route::get('project/elements', ['uses' => 'ProjectController@elements']);
    Route::get("project/portfolio", ['uses' => 'ProjectController@portfolio']);
    Route::get('project/blog', ['uses' => 'ProjectController@blog']);
    Route::get('project/contact', ['uses' => 'ProjectController@contact']);
    Route::any('project/login', function () {
    	return view('home.login');
    });
    Route::get('project/register', function () {
    	return view('home.register');
    });
    Route::post('project/registers', ['uses' => 'ProjectController@registers']);
    Route::any('project/logins', ['uses' => 'ProjectController@logins']);
});
/**
 * 后台
 */
Route::group(['middleware'=>'web','namespace' => 'Admin'], function(){
    Route::group(['prefix'=>'admin'],function(){
    //登录页面
    Route::match(['get','post'],'/login','LoginController@login');
    //验证登录
    Route::match(['get','post'],'/loginin','LoginController@loginin');
    //注册页面
    Route::match(['get','post'],'/register','LoginController@register');
    //注册入库
    Route::match(['get','post'],'/registerin','LoginController@registerin');
    //首页
    Route::match(['get','post'],'show','InfoController@index');
    //用户列表
    Route::match(['get','post'],'/user','UserController@user');
    //用户添加
    Route::match(['get','post'],'/useradd','UserController@useradd');
    //权限列表
    Route::match(['get','post'],'/limits','LimitsController@limits');
    //权限添加
    Route::match(['get','post'],'/limitsadd','LimitsController@limitsadd');
    //企业列表
    Route::match(['get','post'],'/firm','FirmController@firm');
    //企业添加
    Route::match(['get','post'],'/firmadd','FirmController@firmadd');
    //股票列表
    Route::match(['get','post'],'/touck','TouckController@touck');
    //股票添加
    Route::match(['get','post'],'/touckadd','TouckController@touckadd');
    //分类列表
    Route::match(['get','post'],'/type','TypeController@type');
    //分类添加
    Route::match(['get','post'],'/typeadd','TypeController@typeadd');
    //轮播图列表
    Route::match(['get','post'],'/wheel','WheelController@wheel');
    //轮播图添加
    Route::match(['get','post'],'/wheeladd','WheelController@wheeladd');
    //日志管理
    Route::match(['get','post'],'/log','LogController@log');
    });
});
