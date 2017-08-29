<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
class WheelController extends CommonController
{
	/**
	 * 轮播图列表
	 * @return [type] [description]
	 */
	public function wheel()
	{
		return view('admin.wheel');
	}
	/**
	 * 轮播图添加
	 * @return [type] [description]
	 */
	public function wheeladd()
	{
		return view('admin.wheeladd');
	}

}
?>