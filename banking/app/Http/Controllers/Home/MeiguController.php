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
<<<<<<< .merge_file_a08688
<<<<<<< .merge_file_a08832
		$add_list = DB::select('select count(*) / 8100 as num,round(high-low,2) as shu from stock_meigu_list GROUP BY  shu>0 and shu<=0.5 , shu > 0.5 and shu<1,shu>1 and shu < 2.5 , shu>2.5 and shu <= 5,shu>5 and shu<=10,shu>10 and shu>=15,shu<15 and shu>=20,shu>20');
		// print_r($add_list);die;
		 $add_list = json_decode(json_encode($add_list),true);
		 // print_r($add_list);die;

		 foreach ($add_list as $key => $value) {
		 	$add[$key] = $value['num']*100;
		 }

		 // print_r($add);die;
		  $add = implode(',', $add);

		return view('home.meigu',$list,['name'=>$name,'add_list'=>$add]);
	}
	public function add_meigu(){
	for ($i=1; $i < 135; $i++) { 
		$zhi  = file_get_contents('http://web.juhe.cn:8080/finance/stock/usaall?page='.$i.'&type=3&key=e7953b51094bdac7dc4468d46358824e');
		 $zhi = json_decode($zhi,true);
		if ($zhi['error_code'] == 0) {
				 $meigu_list = $zhi['result']['data'];
				 foreach ($meigu_list as $key => $value) {

				 	  $row['cname'] = $value['cname'];
				 	  $row['category'] = $value['category'];
				 	  $row['symbol'] = $value['symbol'];
				 	  $row['price'] = $value['price'];
				 	  $row['diff'] = $value['diff'];
				 	  $row['chg'] = $value['chg'];
				 	  $row['preclose'] = $value['preclose'];
				 	  $row['open'] = $value['open'];
				 	  $row['high'] = $value['high'];
				 	  $row['low'] = $value['low'];
				 	  $row['amplitude'] = $value['amplitude'];
				 	  $row['volume'] = $value['volume'];
				 	  $row['mktcap'] = $value['mktcap'];
				 	  $row['market'] = $value['market'];
				 	  $row['date'] = date('Y-m-d');

     			 	  DB::table('stock_meigu_list')->insert($row);

				 }

				
				
			}else{

			}	
	
		}
	

	}
public function shuju(){

	$add_list = DB::select('select count(*),round(high-low,2) as shu from stock_meigu_list GROUP BY  shu>0 and shu<=0.5 , shu > 0.5 and shu<1,shu>1 and shu < 2.5 , shu>2.5 and shu <= 5,shu>5 and shu<=10,shu>10 and shu>=15,shu<15 and shu>=20,shu>20');


		return view('home.shuju',['add_list'=>$add_list]);


}


=======
=======
>>>>>>> .merge_file_a08684
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
<<<<<<< .merge_file_a08688
>>>>>>> .merge_file_a08880
=======
>>>>>>> .merge_file_a08684
}