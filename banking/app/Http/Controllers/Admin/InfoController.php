<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class InfoController extends CommonController
{
	/**
	* 后台首页
	* @return [type] [description]
	*/
	public function index()
	{
		$datas = DB::table('authority')->get();
		$data =  json_decode( json_encode( $datas),true);
		foreach ($data as $k => $v) {
			if($v['father_id'] == 0){
				$list[$k] = $v;
			}
		}
		foreach ($list as $key => $value) {
			foreach ($data as $kk => $vv) {
				if($value['authority_id'] == $vv['father_id']){
					$value[$key]['value'][] = $vv;
					$lists[$key] = $value;
				}
			}
		}
		// print_r($lists/);die;
		return view('admin.index')->with('data',$lists);
	}
	/**
	 * 递归 无限极分类
	 * @param  [type]  $data  [description]
	 * @param  integer $pid   [description]
	 * @param  integer $lenal [description]
	 * @return [type]         [description]
	 */
	public function recursion($data,$pid=0,$lenal=0)
	{	
		// print_r($data);die;
		static $list=array();
		foreach ($data as $key => $value) {
			if($value['father_id'] == $pid){
				$value['lenal'] = $lenal;
				$list[] = $value;
				$this->recursion($data,$value['authority_id'],$lenal+1);
			}
		}
		// print_r($list);die;
		return $list;
	}
}
?>