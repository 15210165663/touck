<?php
namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Zixuan;
use App\Http\Controllers\Controller;
class MeiguController extends CommonController
{
	/**
	 * 美股页面
	 * @return [type] [description]
	 */
	public function index(Request $request)
	{
		$name = $request->session()->get('Username');
		$data = file_get_contents('http://web.juhe.cn:8080/finance/stock/usaall?page=&type=&key=869fc55897a8cfa99ad7029e86459972');
		$datas = json_decode($data,true);
		$list = $datas['result'];
		return view('home.meigu',$list,['name'=>$name]);
	}
	/**
	 * 加自选
	 */
	public function zixuan(Request $res)
	{
		$name = $res->name;
		$html = file_get_contents("http://web.juhe.cn:8080/finance/stock/usa?gid=".$name."&key=869fc55897a8cfa99ad7029e86459972");
		$data = json_decode($html,true);
		$list = $data['result'][0]['data'];
		$opp = Zixuan::Create($list);
		if($opp){
			return '1';
		}else{
			return '2';
		}
	}
}