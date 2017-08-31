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
		$username = isset($_POST['username'])?$_POST['username']:null;
		$password = isset($_POST['password'])?$_POST['password']:null;
		$list = DB::table('user')->where('username', "$username")->first();
		if($list){
			if ($username==$list->username && $password==$list->password) {
				$request->session()->put('username',"$username");
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
		$username=$request->input('username');
		$pass = $request->input('pass');
		$word = $request->input('word');
		if($pass == $word){
          $list = DB::table('user')->where('username', "$username")->first();
          if ($list) {
          	return '账户已被注册';
          }else{
          	$arr=DB::table('user')->insert(
               ['username' => "$username",'password' => "$pass"]
               );
          	return view('admin.login');
          }
		}else{
			return '两次密码输入不一致,请重新输入';
		}
	}
	public function loginout(Request $request)
	{
		$value = $request->session()->pull('username');
			return redirect('admin/login');
	}
}