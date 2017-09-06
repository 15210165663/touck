<?php

namespace App\Http\Controllers\Home;
use App\Models\Users;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
	//登录页面
    public function index()
    {
    	return view('home.login');
    }
    //注册页面
    public function register()
    {
    	return view('home.register');
    }
     //注册
    public function registers(Request $res)
    {
        $this -> validate($res,[
            'Name' => 'required|max:6|min:2',
            'Email' => 'required',
            'Phone_Number' => 'required|regex:[[0-9]+]',
        ],[
            'Name.required' => '名称不能为空',
            'Name.max' => '请输入2-6位的名称',
            'Name.min' => '请输入2-6位的名称',
            'Email.required' => '邮箱不能为空',
            'Phone_Number.required' => '手机号不能为空',
            'Phone_Number.regex' => '手机号请输入数字',
        ]);
    	$name = $res->input('Name');
    	$email =  $res->input('Email');
        $pwd =  $res->input('Password');
    	$pwd1 =  $res->input('Password1');
    	$phone_number = $res->input('Phone_Number');
        $list = Users::where(['users_email_unique'=>$email])->select(['users_email_unique'])->first()->toArray();
        if($list){
            return redirect('project/register')->with('hasExists','邮箱请重新输入');
        }
        if($pwd != $pwd1){
            return redirect('project/register')->with('hasExists','两次密码不相等请重新输入');
        }
    	$list = DB::insert('insert into users(name,users_email_unique,password,phone_number) values(?,?,?,?)',[$name,$email,$pwd,$phone_number]);
    	if($list){
    		return redirect('project/login');
    	}else{
    		return redirect('project/login')->with('hasExists','注册失败');
    	}
    }
    //登录
    public function logins(Request $login)
    {
    	$name = $login->input('Username');
    	$pwd = $login->input('Password');
    	$brand = $login->check;
    	// echo $login->session()->get('hang');
    	// $lists = Users::where(['name'=>$name,'password'=>$pwd])->first()->toArray();
    	$lists = Users::first()->toArray();
    	if($name == $lists['users_name'] && $pwd == $lists['users_password']){
	    	$login->session()->put('Password',$pwd);
            $login->session()->put('Username',$name);
	    	$login->session()->put('user_id',$lists['id']);
			if($brand != ' '){
                $login->session()->put('pwd',$pwd);
                $login->session()->put('name',$name);
			}
            return redirect('project/show');
    	}else{
    		return redirect('project/login')->with('hasExists','用户名或密码错误');
    	}
    }
    // 退出登录
    public function del_login()
    {
        \Session::forget('Username');
        \Session::forget('Password');
        return redirect('project/show');
    }
    //个人中心
    public function personal(Request $request)
    {
    	$list = DB::select('select * from stock_image  ORDER BY img_id DESC limit 1');
		$lists = json_decode(json_encode($list),true);
		foreach ($lists as $k => $v) {
			$oppo[$k] = $v['img_url'];
		}
		$name = $request->session()->get('Username');
    	return view('home.personal',['name'=>$name,'lists'=>$lists[0]]);
    }
    //个人资料修改
    public function ge(Request $request)
    {
		$id = $request->session()->get('user_id');
		$nam = DB::select("select users_name from users where id = $id");
		$name = json_decode(json_encode($nam),true);
		$list = DB::select('select * from stock_image  ORDER BY img_id DESC limit 1');
		$lists = json_decode(json_encode($list),true);
		foreach ($lists as $k => $v) {
			$oppo[$k] = $v['img_url'];
		}
		foreach ($name as $k => $v) {
			$name2 = $v['users_name'];
		}
    	return view('home.ge',['name'=>$name2,'lists'=>$lists[0]]);
    }
    public function ajax(Request $request)
    {
    	$name = $request->name;
    	$id = $request->session()->get('user_id');
    	$upda = DB::update("update users set users_name = '$name' where id = '$id'");
    	if($upda){
    		echo "1";
    	}else{
    		echo "0";
    	}
    }
}
