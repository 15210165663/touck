<?php
namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
	/**
	 * 余额充值
	 * @return [type] [description]
	 */
	public function balance()
	{
		return view('home.balance');
	}
	/**
	 * 股票信息
	 * @return [type] [description]
	 */
	public function touck()
	{
		return view('home.touck');
	}
	/**
	 * 出售股票
	 * @return [type] [description]
	 */
	public function sell()
	{
		return view('home.sell');
	}
	/**
	 * 预约信息
	 * @return [type] [description]
	 */
	public function about()
	{
		return view('home.about');
	}
}
?>