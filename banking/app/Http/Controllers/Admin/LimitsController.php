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
		$data = DB::table('type')->where('father_id','0')->get();
		$data =  json_decode( json_encode( $data),true);
		// print_r($data);die;
		return view('admin.limitsadd')->with('data',$data);;
	}
	/**
	 * 权限添加入库
	 * @return [type] [description]
	 */
	public function limitsin()
	{
		$colename = $_POST['colename'];
		$coleurl = $_POST['coleurl'];
		$data = DB::insert('insert into stock_authority(authority_name,sole_url) value(?,?)',[$colename,$coleurl]);
		if($data){
			return redirect('admin/limits');
		}else{
			echo "<script>alert('添加权限失败')</script>";
		}
	}
	/**
	 * 权限删除
	 * @return [type] [description]
	 */
	public function limitsdel()
	{
		$id = $_GET['id'];
		$data = DB::delete('delete from stock_authority where authority_id=?',[$id]);
		if($data){
			return redirect('admin/limits');
		}else{
			echo "<script>alert('删除失败')</script>";
		}
	}
	/**
	 * 管理员列表
	 * @return [type] [description]
	 */
	public function adminshow()
	{
		$datas = DB::table('admin')->paginate(10);
		$data =  json_decode( json_encode( $datas),true);
		return view('admin.adminshow')->with('data',$data);
	}
	/**
	 * 分配权限页面
	 * @return [type] [description]
	 */
	public function allot()
	{
		$id = $_GET['id'];
		$data = DB::table('admin_authority')->where('admin_id',$id)->get();
		$data =  json_decode( json_encode( $data),true);
		$arr = '';
		foreach ($data as $k => $v) {
			$arr .= $v['authority_id'].',';
		}
		$arrs = substr($arr,0,-1);
		$list = DB::select('select * from stock_authority where authority_id in('.$arrs.')');
		$list =  json_decode( json_encode( $list),true);
		$listshow = DB::select('select * from stock_authority');
		$listshow =  json_decode( json_encode( $listshow),true);
		return view('admin.listshow')->with(['data'=>$list,'list'=>$listshow]);
	}
}
?>