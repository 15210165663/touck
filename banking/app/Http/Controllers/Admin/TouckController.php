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
		return view('admin.touck');
	}
	/**
	 * 股票添加
	 * @return [type] [description]
	 */
	public function touckadd()
	{
		return view('admin.touckadd');
	}

}
?>