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
	public function loginin()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data = DB::table('admin')->get();
		$list =  json_decode( json_encode( $data),true);
		if($username==$list[0]['adminname'] && $password==$list[0]['password']){
			// $request->session->put('admin',$list);
			echo "<script>alert('恭喜，登陆成功');location.href=('/admin/show')</script>";
		}else{
			echo "<script>alert('登录失败，请重新登陆');location.href=('/admin/login')</script>";
		}
	}
	/**
	 * 注册页面
	 * @return [type] [description]
	 */
	public function register()
	{
		// $admin = $request->session->get('admin');
		// print_r($admin);die;
		return view('admin.register');
	}
	public function registerin()
	{
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$word = $_POST['word'];
		if($pass == $word){

		}else{
			echo "<script>alert('两次密码输入不一致,请重新输入');location.href=('/admin/register')</script>";
		}
	}
}