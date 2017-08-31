<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Models\Core;
class SharesController extends Controller
{
    /*
	 * 发布股票
	 */
	public function balanceadd(Request $request)
	{
		$id = $request->session()->get('id');
		$name = $request->input("Stock_name");
		$text = $request->input("Stock_text");
		$price = $request->input("Stock_price");
		$number = $request->input("Stock_number");
		$type = $request->input("Stock_type");
		// 接收图片信息
    	$file = Input::file('img');
        // 允许类型
        $allowed_extensions = ["png", "jpg", "gif"];
        // 判断是否允许
        if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
            return ['error' => 'You may only upload png, jpg or gif.'];
        }
        // 保存路劲
        $destinationPath = 'storage/uploads/'; //public 文件夹下面建 storage/uploads 文件夹
        $extension = $file->getClientOriginalExtension();
        $fileName = str_random(10).'.'.$extension;
        // 保存图片
        $file->move($destinationPath, $fileName);
        $filePath = $destinationPath.$fileName;
        // echo $filePath;die;
		$res = DB::insert('insert into stock_market(Stock_name,Stock_imgurl,Stock_text,Stock_price,Stock_number,Stock_type,Firm_id) values(?,?,?,?,?,?,?)',[$name,$filePath,$text,$price,$number,$type,$id]);
		if($res){
			return redirect('project/touck');
		}else{
			return redirect('project/balance');
		}
	}
}
