<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
class LogController extends CommonController
{
	/**
	 * 日志列表
	 * @return [type] [description]
	 */
	public function log()
	{
		return view('admin.log');
	}

}
?>