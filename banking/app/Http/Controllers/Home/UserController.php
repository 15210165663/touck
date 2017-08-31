<?php
namespace App\Http\Controllers\Home;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Core;
use App\Models\Market;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class UserController extends Controller
{
	/**
	 * 余额充值
	 * @return [type] [description]
	 */
	public function balance()
	{
		$lists = Core::all()->toArray();
		// echo "<pre>";
		// print_r($lists);
		return view('home.balance', ['list' => $lists]);
	}
	/**
	 * 股票信息
	 * @return [type] [description]
	 */
	public function touck()
	{
		$lists = Market::all()->toArray();
		return view('home.touck', ['list' => $lists]);
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
