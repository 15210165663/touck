<?php
namespace App\Http\Controllers\Home;
use App\Models\Users;
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
	public function index(Request $request)
	{
		$lists = Users::first()->toArray();
		$name = $request->session()->get('Username');
		// echo $name;die;
		return view('home.index',['name'=>$name]);
	}
}