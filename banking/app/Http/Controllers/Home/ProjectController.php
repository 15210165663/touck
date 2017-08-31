<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
class ProjectController extends Controller
{
    /**
     * 首页显示股票
     * @return [type] [description]
     */
    public function index()
    {
        //测试数据显示首页股票
        $market = DB::select('select stock_id,stock_name,stock_imgurl from stock_market limit ?',[8]);
        $market =  json_decode(json_encode($market),true);
        foreach ($market as $k => $v) {
            if($k<=3) $market1[] = $v;
            if($k>3) $market2[] = $v;  
        }
        return view('home.index',['market1'=>$market1,'market2'=>$market2]);
    }
    /**
     * 股票详情页
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function info($id)
    {
        //展示股票详情
        $market = DB::table('market')->where('stock_id',$id)->first();
        $market =  json_decode(json_encode($market),true);
        return view('home.elements',$market);

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
    //预约
    public function blog_single()
    {
        return view('blog.blog-single');
    }
    //持股大师
    public function blog(Request $login)
    {
        $name = $login->session()->get('Username');
        $master_array = DB::select('select * from stock_master');
        $master_array =  json_decode( json_encode( $master_array), true);
        // print_r($master_array);die;
        return view('blog.blog',['name'=>$name, 'master_array' => $master_array]);
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
    		echo "成功".'<br>';
    		echo "<a href=".'login'.">点击返回登录页面</a>";
    	}else{
    		echo "失败".'<br>';
    		echo "<a href=".'login'.">点击返回登录页面</a>";
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
			if($brand != ' '){
                $login->session()->put('pwd',$pwd);
                $login->session()->put('name',$name);
			}
	    	echo "登陆成功".'<br>';
    		echo "<a href=".'index'.">首页</a>";
    	}else{
    		echo "用户名或密码错误".'<br>';
    		echo "<a href=".'login'.">首页</a>";
    	}
    }
}
