<?php
namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class IndentController extends Controller
{
	public function indent()
	{
		$sum = $_POST['sum'];
		$price = $_POST['price'];
		$name = $_POST['stock_name'];
		$stock_id = $_POST['stock_id'];
		$res = DB::insert('insert into stock_indent(user_id,stock_name,stock_price,stock_num,stock_id,pay_status) values(?,?,?,?,?,?)',['1',$name,$price,$sum,$stock_id,'0']);
		if($res){
			echo '成功';
		}else{
			echo '失败';
		}
	}
}