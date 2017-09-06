<?php
namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class InfoController extends CommonController
{
	/**
	 * 首页
	 * @return [type] [description]
	 */
	public function index()
	{
		return view('home.index');
	}
}