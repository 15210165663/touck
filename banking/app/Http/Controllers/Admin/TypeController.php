<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Type;
class TypeController extends CommonController
{
	/**
	 * 分类列表
	 * @return [type] [description]
	 */
	public function type()
	{
		$res = Type::paginate(3);
		return view('admin.type',['results'=>$res]);
	}
	/**
	 * 分类添加
	 * @return [type] [description]
	 */
	public function typeadd()
	{
		return view('admin.typeadd');
	}
	/**
	 * 分类删除
	 * @return [type] [description]
	 */
	public function del(Request $request)
	{
		$id = $request->id;
		$res = DB::delete("delete from stock_type where type_id = '$id'");
		if($res){
			echo "1";
		}else{
			echo "0";
		}
	}
	/**
	 * 分类修改
	 * @return [type] [description]
	 */
	public function upda($id)
	{
		$res1 = DB::select("select type_id,type_name,type_center from stock_type where type_id = '$id'");
		$res = json_decode(json_encode($res1),true);
		return view('admin.upda',['res'=>$res]);
	}
	/**
	 * 分类修改
	 * @return [type] [description]
	 */
	public function update(Request $request)
	{
		$name = $request->up_name;
		$center = $request->up_center;
		$id = $request->up_id;
		$res1 = DB::update("update stock_type set type_name = '$name',type_center = '$center' where type_id = '$id'");
		$res = Type::paginate(3);
		return view('admin.type',['results'=>$res]);
	}

}
?>