<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
class UserController extends CommonController
{
	/**
	 * 用户列表首页
	 * @return [type] [description]
	 */
	public function user()	
	{
		$datas = DB::select("select * from stock_user a,stock_message s where a.user_id=s.message_id");
		$data =  json_decode( json_encode( $datas),true);
		return view('admin.user')->with('data',$data);
	}

	/**
	 * 用户添加页面
	 * @return [type] [description]
	 */
	public function useradd()
	{
		return view('admin.useradd');
	}
}
?>