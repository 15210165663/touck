<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
header('content-type:text/html;charset=utf-8');
class LoginController extends Controller
{
	/**
	 * 登录页面
	 * @return [type] [description]
	 */
	public function login()
	{
		return view('admin.login');
	}
	/**
	 * 验证登录
	 * @return [type] [description]
	 */
	public function loginin(Request $request)
	{
		$adminname = isset($_POST['adminname'])?$_POST['adminname']:null;
		$password = isset($_POST['password'])?$_POST['password']:null;
		$list = DB::table('admin')->where('adminname', "$adminname")->first();
		if($list){
			if ($adminname==$list->adminname && $password==$list->password) {
				$request->session()->put('adminname',"$adminname");
				return view('admin.index');
			}		  
		}else{
			return '登录失败，请重新登陆';
		}
	}
	/**
	 * 注册页面
	 * @return [type] [description]
	 */
	public function register()
	{
		return view('admin.register');
	}
	/**
	 * 注册
	 * @return [type] [description]
	 */
	public function registerin(Request $request)
	{
		$adminname=$request->input('adminname');
		$pass = $request->input('pass');
		$word = $request->input('word');
		if($pass == $word){
          $list = DB::table('admin')->where('adminname', "$adminname")->first();
          if ($list) {
          	return '账户已被注册';
          }else{
          	$arr=DB::table('admin')->insert(
               ['adminname' => "$adminname",'password' => "$pass"]
               );
          	return view('admin.login');
          }
		}else{
			return '两次密码输入不一致,请重新输入';
		}
	}
	/**
	 * 退出登录
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function loginout(Request $request)
	{
		$value = $request->session()->pull('adminname');
			return redirect('admin/login');
	}
}