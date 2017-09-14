<?php 
namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class Money_flowController extends CommonController
{
	public function Money_cai(){

		//泸深两市资金流向页面采集
		set_time_limit(0);
		for ($i=1;;$i++) {
			$file = iconv('gbk','utf-8',file_get_contents('http://data.10jqka.com.cn/funds/ggzjl/field/zdf/order/desc/page/'.$i.'/ajax/1'));
			$money_prge = '#<table class="m-table J-ajax-table">.*<tbody>(.*)</tbody>.*</table>#isU';
			preg_match($money_prge,$file,$arr);
			$money_data = '#<tr.*>.*<td.*>.*</td>.*<a.*>(.*)</a>.*<a.*>(.*)</a>.*<td.*>(.*)</td>.*<td.*>(.*)</td>.*<td.*>(.*)</td>.*<td.*>(.*)</td>.*<td.*>(.*)</td>.*<td.*>(.*)</td>.*<td.*>(.*)</td>.*<td.*>(.*)</td>.*</tr>#isU';
			preg_match_all($money_data,$arr[1],$arr2);
			if(empty($arr2[1]))
			{	
				echo '数据采集成功';exit;
			}
			$data = [];
			foreach ($arr2[1] as $k => $moneyflow_code) {
				$data[$k]['moneyflow_code'] = $moneyflow_code;
				$data[$k]['moneyflow_abbreviation'] = $arr2[2][$k];
				$data[$k]['moneyflow_lateprice'] = $arr2[3][$k];
				$data[$k]['moneyflow_fluct'] = $arr2[4][$k];
				$data[$k]['moneyflow_rate'] = $arr2[5][$k];
				$data[$k]['moneyflow_funds'] = $arr2[6][$k];
				$data[$k]['moneyflow_outfunds'] = $arr2[7][$k];
				$data[$k]['moneyflow_net'] = $arr2[8][$k];
				$data[$k]['moneyflow_turnover'] = $arr2[9][$k];
				$data[$k]['moneyflow_inflow'] = $arr2[10][$k];
			}
			DB::table('moneyflow')->insert($data);
		}
	}
	//资金流向
	public function money_liu(){
		$add_list = DB::table('moneyflow')->paginate();
		return view("home/money_flow",['add_list'=>$add_list]);
	}
	//数据分析
	public function Data_analysis(){

		$add_list = DB::table('analysis')->paginate();
		return view("home/Data_analysis",['add_list'=>$add_list]);

	}
}
?>