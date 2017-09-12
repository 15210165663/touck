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
            'Name' => 'required|max:8|min:2',
            'Email' => 'required',
        ],[
            'Name.required' => '名称不能为空',
            'Name.max' => '请输入2-6位的名称',
            'Name.min' => '请输入2-6位的名称',
            'Email.required' => '邮箱不能为空',
        ]);
    	$name = $res->input('Name');
    	$email =  $res->input('Email');
        $pwd =  $res->input('Password');
    	$pwd1 =  $res->input('Password1');
        $list = Users::first(['email'])->toArray();
        if($email == $list['email']){
            return redirect('project/register')->with('hasExists','邮箱重复请重新输入');
        }
        if($pwd != $pwd1){
            return redirect('project/register')->with('hasExists','两次密码不相等请重新输入');
        }
<<<<<<< .merge_file_a08436
    	$list = DB::insert('insert into stock_users(name,email,password) values(?,?,?)',[$name,$email,$pwd]);
=======
        $pwds = md5($pwd);
    	$list = DB::insert('insert into stock_users(user_name,email,user_password) values(?,?,?)',[$name,$email,$pwds]);
>>>>>>> .merge_file_a08312
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
<<<<<<< .merge_file_a08436
        $brand = $login->check;
        // echo $login->session()->get('hang');
        $lists = Users::where(['name'=>$name,'password'=>$pwd])->first()->toArray();
        // $lists = Users::first()->toArray();
        // echo "<pre>";
        // print_r($lists);die;
        if($name == $lists['name'] && $pwd == $lists['password']){
=======
        $pwds = md5($pwd);
        $brand = $login->check;
        $lists = DB::select("select * from stock_users where user_name = '$name' and user_password = '$pwds'");
        $lists1 = json_decode(json_encode($lists),true);
        if($lists1){
>>>>>>> .merge_file_a08312
            $login->session()->put('Password',$pwd);
            $login->session()->put('Username',$name);
	    	$login->session()->put('user_id',$lists1[0]['id']);
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
        $opp = DB::select('select * from stock_zixuan');
        $ppo = json_decode(json_encode($opp),true);
        // foreach ($ppo as $k => $v) {
        //     $vivo[$k] = $v;
        // }
        // echo "<pre>";
        // print_r($ppo);die;
    	return view('home.personal',['name'=>$name,'lists'=>$lists[0],'ppo'=>$ppo]);
    }
    //个人资料修改
    public function ge(Request $request)
    {
		$id = $request->session()->get('user_id');
<<<<<<< .merge_file_a08436
		$nam = DB::select("select name from stock_users where id = $id");
=======
		$nam = DB::select("select user_name,center from stock_users where id = $id");
>>>>>>> .merge_file_a08312
		$name = json_decode(json_encode($nam),true);
		$list = DB::select('select * from stock_image ORDER BY img_id DESC limit 1');
		$lists = json_decode(json_encode($list),true);
		foreach ($lists as $k => $v) {
			$oppo[$k] = $v['img_url'];
		}
		foreach ($name as $k => $v) {
<<<<<<< .merge_file_a08436
			$name2 = $v['name'];
=======
            $name2 = $v['user_name'];
			$center = $v['center'];
>>>>>>> .merge_file_a08312
		}
    	return view('home.ge',['name'=>$name2,'lists'=>$lists[0],'center'=>$center]);
    }
    public function ajax(Request $request)
    {
    	$name = $request->name;
    	$id = $request->session()->get('user_id');
    	$upda = DB::update("update stock_users set user_name = '$name' where id = '$id'");
    	if($upda){
    		echo "1";
    	}else{
    		echo "0";
    	}
    }
    public function center(Request $request)
    {
        $name = $request->name;
        $id = $request->session()->get('user_id');
        $upda = DB::update("update stock_users set center = '$name' where id = '$id'");
        if($upda){
            echo "1";
        }else{
            echo "0";
        }
    }
}
