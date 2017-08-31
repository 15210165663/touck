<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
class LimitsController extends CommonController
{
	/**
	 * 权限列表首页
	 * @return [type] [description]
	 */
	public function limits()
	{
		$datas = DB::table('authority')->paginate(10);
		$data =  json_decode( json_encode( $datas),true);
		return view('admin.limits')->with('data',$data);
	}
	/**
	 * 权限添加页面
	 * @return [type] [description]
	 */
	public function limitsadd()
	{
		return view('admin.limitsadd');
	}
	/**
	 * 管理员列表
	 * @return [type] [description]
	 */
	public function adminshow()
	{
		$datas = DB::table('admin')->paginate(10);
		$data =  json_decode( json_encode( $datas),true);
		// echo '<pre>';
		// print_r($data);die;
		return view('admin.adminshow')->with('data',$data);
	}
}
?>