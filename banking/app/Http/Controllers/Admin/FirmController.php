<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
class FirmController extends CommonController
{
	/**
	 * 企业列表
	 * @return [type] [description]
	 */
	public function firm()
	{
		return view('admin.firm');
	}
	/**
	 * 企业添加
	 * @return [type] [description]
	 */
	public function firmadd()
	{
		return view('admin.firmadd');
	}

}
?>