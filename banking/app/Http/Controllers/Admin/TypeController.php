<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
class TypeController extends CommonController
{
	/**
	 * 分类列表
	 * @return [type] [description]
	 */
	public function type()
	{
		return view('admin.type');
	}
	/**
	 * 分类添加
	 * @return [type] [description]
	 */
	public function typeadd()
	{
		return view('admin.typeadd');
	}

}
?>