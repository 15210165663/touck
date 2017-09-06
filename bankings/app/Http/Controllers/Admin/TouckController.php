<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
class TouckController extends CommonController
{
	/**
	 * 股票列表
	 * @return [type] [description]
	 */
	public function touck()
	{
		$res = DB::table('market')->paginate(3);
		// print_r($res);die;
		// $ren = DB::select("SELECT * from stock_market a INNER JOIN stock_type b on a.firm_id = b.tier_id");
		// print_r($ren);die;
		return view('admin.touck',['ren'=>$res]);
	}

	/**
	 * 股票添加
	 * @return [type] [description]
	 */
	public function touckadd()
	{
		return view('admin.touckadd');
	}

	PUBLIC function delete(){
		echo '123';
	}
}
?>