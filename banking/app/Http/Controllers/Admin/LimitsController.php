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
		return view('admin.limits');
	}
	/**
	 * 权限添加页面
	 * @return [type] [description]
	 */
	public function limitsadd()
	{
		return view('admin.limitsadd');
	}
}
?>