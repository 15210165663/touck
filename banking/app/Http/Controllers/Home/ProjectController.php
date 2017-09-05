<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
header('content-type:text/html;charset=utf-8');
class ProjectController extends Controller
{
    /**
     * 首页显示股票
     * @return [type] [description]
     */
    public function index()
    {
        //测试数据显示首页股票
        $market = DB::select('select * from stock_market inner join stock_type where stock_type.type_id=stock_market.stock_type');
        $data =  json_decode(json_encode($market),true);
        $i=0;
        foreach ($data as $k => $v) {
            if($k%4==0){
                $i++;
            }
            $list[$i][$k]=$v;
        }
        return view('home.index',['data'=>$list]);
    }
    /**
     * 股票详情页
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function info($id)
    {
        //展示股票详情
        $market = DB::select('select * from stock_market inner join stock_type on stock_type.type_id=stock_market.stock_type where stock_id='.$id);
        $data = DB::table('change')->where('market_id',$id)->get();
        $market =  json_decode(json_encode($market),true);
        // print_r($market);die;
        // echo '<pre>';
        // print_r($market);
        $change =  json_decode(json_encode($data),true);
        foreach ($change as $k => $v) {
            $price[$k] = $v['change_price']*1;
            $qwert[$k]= date('m-d',$v['change_time']);
        }
         $prices = implode(',',$price);
         $qwerts = implode(',',$qwert);
        return view('home.elements',['market'=>$market,'prices'=>$prices,'qwerts'=>$qwerts]);

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
