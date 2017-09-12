<?php
namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class MasterController extends CommonController
{
	/**
	 * 炒股大师
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function master(Request $request)
	{
		$name = $request->session()->get('Username');
		$uid = $request->session()->get('user_id');
		$list = [];
		$show = [];
		if($uid==''){
			$list = [];
			$show = [];
		}else{
			$lists = DB::table('master_like')->where('user_id',$uid)->get();
			$listes =  json_decode( json_encode( $lists),true);
			foreach ($listes as $k => $v) {
				$list[$k] = $v['master_id'];
			}
			$shows = DB::table('master_attention')->where('user_id',$uid)->get();
			$showes =  json_decode( json_encode( $shows),true);
			foreach ($showes as $key => $value) {
				$show[$key] = $value['master_id'];
			}
		}
		$datas = DB::table('master')->where('master_static','1')->get();
		$data =  json_decode( json_encode( $datas),true);
		
		return view('home.master',['name'=>$name,'data'=>$data,'list'=>$list,'show'=>$show]);
	}
	/**
	 * 点赞
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function dianz(Request $request)
	{
		$id = $_POST['m_id'];
		$uid = $request->session()->get('user_id');
		if($uid==''){
			return 0;
		}
		$res = DB::insert('insert into stock_master_like(master_id,user_id) value(?,?)',[$id,$uid]);
		$arrs = DB::select('select count(*) from stock_master_like where master_id = ?',[$id]);
		$arr =  json_decode( json_encode( $arrs),true);
		$num = $arr[0]['count(*)'];
		$master = DB::update('update stock_master set master_zan='.$num.' where master_id=?',[$id]);
		if($res&&$master){
			return 1;
		}else{
			return 2;
		}
	}
	/**
	 * 关注
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function guan(Request $request)
	{
		$id = $_POST['m_id'];
		$uid = $request->session()->get('user_id');
		$shows = DB::table('master_attention')->where('user_id',$uid)->where('master_id',$id)->get();
		if($shows){
			$dels = DB::delete('delete from stock_master_attention where master_id = ? and user_id = ?',[$id,$uid]);
			$arrsd = DB::select('select count(*) from stock_master_attention where master_id = ?',[$id]);
			$arrd =  json_decode( json_encode( $arrsd),true);
			$numd = $arrd[0]['count(*)'];
			$masterd = DB::update('update stock_master set master_guan='.$numd.' where master_id=?',[$id]);
			return 3;die;
		}
		if($uid==''){
			return 0;die;
		}
		$res = DB::insert('insert into stock_master_attention(master_id,user_id) value(?,?)',[$id,$uid]);
		$arrs = DB::select('select count(*) from stock_master_attention where master_id = ?',[$id]);
		$arr =  json_decode( json_encode( $arrs),true);
		$num = $arr[0]['count(*)'];
		$master = DB::update('update stock_master set master_guan='.$num.' where master_id=?',[$id]);
		if($res&&$master){
			return 1;die;
		}else{
			return 2;die;
		}
	}
	/**
	 * 炒股大师详情页
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function mastershow(Request $request){
		$m_id = $_GET['id'];
		$name = $request->session()->get('Username');
		$uid = $request->session()->get('user_id');
		$list = [];
		$show = [];
		if($uid==''){
			$list = [];
			$show = [];
		}else{
			$lists = DB::table('master_like')->where('user_id',$uid)->get();
			$listes =  json_decode( json_encode( $lists),true);
			foreach ($listes as $k => $v) {
				$list[$k] = $v['master_id'];
			}
			$shows = DB::table('master_attention')->where('user_id',$uid)->get();
			$showes =  json_decode( json_encode( $shows),true);
			foreach ($showes as $key => $value) {
				$show[$key] = $value['master_id'];
			}
		}
		$datas = DB::table('master')->where('master_id',$m_id)->get();
		$data =  json_decode( json_encode( $datas),true);
		
		return view('home.masterlist',['name'=>$name,'data'=>$data,'list'=>$list,'show'=>$show]);
	}
}
?>