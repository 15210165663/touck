<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
class ProjectController extends Controller
{
	//首页
    public function index(Request $login)
    {
        $name = $login->session()->get('Username');
    	return view('index.index',['name'=>$name]);
    }
    //股票详情
    public function elements(Request $login)
    {
        $name = $login->session()->get('Username');
        return view('elements.elements',['name'=>$name]);
    }
    //股票列表
    public function portfolio(Request $login)
    {
        $name = $login->session()->get('Username');
        return view('portfolio.portfolio',['name'=>$name]);
    }
    //持股大师
    public function blog(Request $login)
    {
        $name = $login->session()->get('Username');
        return view('blog.blog',['name'=>$name]);
    }
    //评论
    public function contact(Request $login)
    {
        $name = $login->session()->get('Username');
        return view('contact.contact',['name'=>$name]);
    }
    //注册
    public function registers(Request $res)
    {
    	$name = $res->input('Name');
    	$email =  $res->input('Email');
    	$pwd =  $res->input('Password');
    	$phone_number = $res->input('Phone_Number');
    	$list = DB::insert('insert into users(name,email,password,phone_number) values(?,?,?,?)',[$name,$email,$pwd,$phone_number]);
    	if($list){
    		return redirect('project/login');
    	}else{
    		return redirect('project/login')->with('hasExists','注册失败');
    	}
    }
    //登录
    public function logins(Request $login)
    {
    	$name = $login->input('Userame');
    	$pwd = $login->input('Password');
    	$brand = $login->check;
    	// echo $login->session()->get('hang');
    	// $lists = Users::where(['name'=>$name,'password'=>$pwd])->first()->toArray();
    	$lists = Users::first()->toArray();
    	if($name == $lists['name'] && $pwd == $lists['password']){
	    	$login->session()->put('Password',$pwd);
            $login->session()->put('Username',$name);
	    	$login->session()->put('id',$lists['id']);
			if($brand != ' '){
                $login->session()->put('pwd',$pwd);
                $login->session()->put('name',$name);
			}
            return redirect('project/about');
    	}else{
    		return redirect('project/login')->with('hasExists','用户名或密码错误');
    	}
    }
    // 退出登录
    public function del_login()
    {
        \Session::forget('Username');
        \Session::forget('Password');
        return redirect('project/index');
    }
}
