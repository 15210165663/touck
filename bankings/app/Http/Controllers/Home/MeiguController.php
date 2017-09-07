<?php
namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class MeiguController extends CommonController
{
	/**
	 * 美股页面
	 * @return [type] [description]
	 */
	public function index()
	{
		$data = file_get_contents('http://web.juhe.cn:8080/finance/stock/usaall?page=&type=&key=869fc55897a8cfa99ad7029e86459972');
		$datas = json_decode($data,true);
		$list = $datas['result'];
		// print_r($list);die;
		return view('home.meigu',$list);
	}
	/**
	 * 美股的详细页面
	 */
	public function firmshow(Request $request){
		  $Ame_stock =  $request->id;
		  $Ame_stock_html = file_get_contents('http://web.juhe.cn:8080/finance/stock/usa?gid='.$Ame_stock.'&key=869fc55897a8cfa99ad7029e86459972');
		  $datas = json_decode($Ame_stock_html,true);
		  if ($datas['resultcode'] == 200) {
		  		return view('home/mg_minute');	
		  }else{

		  }
		  
	}
	/**
	 * 更多
	 */
	public function more(Request $request){
		 $id = $request->id;
		 if (isset($id)) {
			 $zhi = strlen($id);
			 if ($zhi > 3) {
			 	 $arr_zhi = explode('_', $id);
			 	 $id = $arr_zhi[1];
			 	 $id = $id+1;
			 }
		 
		 	$more_html = file_get_contents('http://web.juhe.cn:8080/finance/stock/usaall?page='. $id.'&type=&key=869fc55897a8cfa99ad7029e86459972');
			$more_html = json_decode($more_html,true);
			$list = $more_html['result'];
			// echo $id;die;
			return view('home.mg_minutes',['list'=>$list['data'],'page'=>$id]);
		 }else{
		 	
		 	$more_html = file_get_contents('http://web.juhe.cn:8080/finance/stock/usaall?page=&type=&key=869fc55897a8cfa99ad7029e86459972');
			$more_html = json_decode($more_html,true);
			$list = $more_html['result'];
			return view('home.mg_minutes',['list'=>$list['data'],'page'=>1]);
		 }
	}
}