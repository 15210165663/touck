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

// Route::group(['middleware' => ['web'],'namespace' => 'Home'], function () {
//     Route::get('project/index', ['uses' => 'ProjectController@index']);
//     Route::get('project/elements', ['uses' => 'ProjectController@elements']);
//     Route::get("project/portfolio", ['uses' => 'ProjectController@portfolio']);
//     Route::get('project/blog', ['uses' => 'ProjectController@blog']);
//     Route::get('project/blog_single', ['uses' => 'ProjectController@blog_single']);
//     Route::get('project/contact', ['uses' => 'ProjectController@contact']);
//     Route::get('project/balance', ['uses' => 'UserController@balance']);
//     Route::get('project/touck', ['uses' => 'UserController@touck']);
//     Route::get('project/sell', ['uses' => 'UserController@sell']);
//     Route::get('project/about', ['uses' => 'UserController@about']);
//     Route::get('project/info/{id}','ProjectController@info');
//     Route::any('project/login', function () {
//     	return view('home.login');
//     });
//     Route::get('project/register', function () {
//     	return view('home.register');
//     });
//     Route::get('project/centre', function () {
//         return view('home.centre');
//     });
//     Route::post('project/registers', ['uses' => 'ProjectController@registers']);
//     Route::any('project/logins', ['uses' => 'ProjectController@logins']);
//     //加入订单
//     Route::post('project/indent', ['uses' => 'IndentController@indent']);


//     Route::get('/auth/login',  'Auth\AuthController@getLogin');
//     Route::post('/auth/login','Auth\AuthController@postLogin');
//     Route::get('/auth/register','Auth\AuthController@getRegister');
//     Route::post('/auth/register', 'Auth\AuthController@postRegister');
//     Route::get('/auth/logout', 'Auth\AuthController@logout');


// });



/**
 * 前台
 */
Route::group(['middleware'=>'web','namespace' => 'Home'], function(){
    Route::group(['prefix'=>'project'],function(){
        //首页
        Route::match(['get','post'],'/show','InfoController@index');
        //美国股市页面
        Route::match(['get','post'],'/meigu','MeiguController@index');
        // 添加美股数据
        Route::match(['get','post'],'/add_meigu','MeiguController@add_meigu');
          // 大数据统计
        Route::match(['get','post'],'/shuju','MeiguController@shuju');
        //美股详情页
        Route::match(['get','post'],'/firmshow','MeiguController@index');
        //登录
        Route::match(['get','post'],'/login','LoginController@index');
        //登录验证
        Route::match(['get','post'],'/logins','LoginController@logins');
        //注册验证
        Route::match(['get','post'],'/registers','LoginController@registers');
        //退出登录
        Route::match(['get','post'],'/del_login','LoginController@del_login');
        //个人中心
        Route::match(['get','post'],'/personal','LoginController@personal');
        //个人资料
        Route::match(['get','post'],'/ge','LoginController@ge');
        //申请大师
        Route::match(['get','post'],'/Apply','PersonalController@Apply');
        //登录
        Route::match(['get','post'],'/register','LoginController@register');
        //上传文件
        Route::match(['get','post'], '/info','FileController@info');
        //上传文件
        Route::match(['get','post'], '/ajax','loginController@ajax');

    });
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
    //退出登录
    Route::match(['get','post'],'/loginout','LoginController@loginout');
    //注册页面
    Route::match(['get','post'],'/register','LoginController@register');
    //注册入库
    Route::match(['get','post'],'/registerin','LoginController@registerin');
    //首页
    Route::match(['get','post'],'/show','InfoController@index');
    //用户列表
    Route::match(['get','post'],'/user','UserController@user');
    //用户添加
    Route::match(['get','post'],'/useradd','UserController@useradd');
    //权限列表
    Route::match(['get','post'],'/limits','LimitsController@limits');
    //权限添加
    Route::match(['get','post'],'/limitsadd','LimitsController@limitsadd');
    //权限添加入库
    Route::match(['get','post'],'/limitsin','LimitsController@limitsin');
    //权限删除
    Route::match(['get','post'],'/limitsdel','LimitsController@limitsdel');
    //管理员列表
    Route::match(['get','post'],'/adminshow','LimitsController@adminshow');
    //分配权限
    Route::match(['get','post'],'/allot','LimitsController@allot');
    //企业列表
    Route::match(['get','post'],'/firm','FirmController@firm');
    //企业列表状态ajax修改
    Route::match(['get','post'],'/firm/firm_status','FirmController@firm_status');
    //企业添加
    Route::match(['get','post'],'/firmadd','FirmController@firmadd');
    //企业删除
    Route::get('/firm/firm_del/{firm_id}','FirmController@firm_del');
    //股票删除
    Route::match(['get','post'],'/delete/{id}','TouckController@delete');
    //股票列表
    Route::match(['get','post'],'/touck','TouckController@touck');
    //股票添加
    Route::match(['get','post'],'/touckadd','TouckController@touckadd');
    //分类列表
    Route::match(['get','post'],'/type','TypeController@type');
    //分类添加
    Route::match(['get','post'],'/typeadd','TypeController@typeadd');
    //分类删除
    Route::match(['get','post'],'/del','TypeController@del');
    //分类修改
    Route::match(['get','post'],'/upda/{id}','TypeController@upda');
    //修改提交
    Route::match(['get','post'],'/update','TypeController@update');
     //轮播图列表
    Route::match(['get','post'],'/wheel','WheelController@wheel');
    //轮播图渲染页面
    Route::match(['get','post'],'/wheeladd','WheelController@wheeladd');
    //轮播图添加
    Route::match(['get','post'],'/wheeladdd','WheelController@wheeladdd');
    //轮播图删除
    Route::match(['get','post'],'/wheeldei/{id}','WheelController@wheeldei');
    //日志管理
    Route::match(['get','post'],'/log','LogController@log');
    });
});
