<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers;
class FirmController extends CommonController
{
	/**
	 * 企业列表
	 * @return [type] [description]
	 */
	public function firm()
	{
		$company_name = isset($_GET['company_name']) ? $_GET['company_name'] : '';
		$principal = isset($_GET['principal']) ? $_GET['principal'] : '';
		$firminfo = DB::table('firm as a')
		->leftJoin('information as b','a.firm_id','=','b.firm_id')
		->where('b.company_name','like',"%$company_name%")
		->where('b.principal','like',"%$principal%")
		->paginate(10);
		$firminfo = json_decode(json_encode($firminfo),true);
		if($firminfo['current_page'] > $firminfo['last_page'])
		{
			$page = isset($_GET['page']) ? '?page='.$firminfo['last_page'] : '';
			return redirect('admin/firm'.$page);
		}
		return view('admin.firm',$firminfo);
	}
	/**
	 * 企业状态修改
	 * @return [type] [description]
	 */
	public function firm_status(Request $request)
	{
		$firm_id = $request->input('firm_id');
		$status = $request->input('status');
		$res = DB::table('information')
		->where('firm_id',$firm_id)
		->update(['static'=>$status]);
		if($res)
		{
			echo 1;
		}else
		{
			echo 0;
		}
	}
	/**
	 * 企业添加
	 * @return [type] [description]
	 */
	public function firmadd(Request $request)
	{
		if($request->isMethod('post'))
		{
			//账号密码
			$firm = [
			'firmname' => $request->input('firmname'),
			'password' => $request->input('password'),
			];
			//企业表入库 获取ID
			$firm_id = DB::table('firm')->insertGetId($firm);
			//信息
			$information = [
				'company_name' => $request->input('company_name'),
				'principal' => $request->input('principal'),
				'principal_phone' => $request->input('principal_phone'),
				'email' => $request->input('email'),
				'address' => $request->input('address'),
				'firm_id' => $firm_id,
				'static' => 0,
			];
			//企业信息表入库
			$res = DB::table('information')->insert($information);
			if($res)
			{
				return redirect('admin/firm');
			}
		}
		return view('admin.firmadd');
	}
	/**
	 * 企业删除
	 * @return [type] [description]
	 */
	public function firm_del($firm_id)
	{

		$re = DB::table('firm')->where('firm_id','=',$firm_id)->delete();
		if($re)
		{
			$res = DB::table('information')->where('firm_id','=',$firm_id)->delete();
			if($res)
			{
				$page = isset($_GET['page']) ? '?page='.$_GET['page'] : '';
				return redirect('admin/firm'.$page);
			}
		}
	}
}
?>