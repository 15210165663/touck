<?php
namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
<<<<<<< .merge_file_a02424
header('content-type:text/html;charset=utf-8');
class PersonalController extends Controller
{
=======
use Illuminate\Support\Facades\Input;
use Storage;
header('content-type:text/html;charset=utf-8');
class PersonalController extends Controller
{
    // 首页
>>>>>>> .merge_file_a05196
	public function Apply()
	{
		return view('home.apply');
	}
<<<<<<< .merge_file_a02424
=======
    //删除自选
    public function del(Request $res)
    {
        $id = $res->id;
        $res = DB::delete("delete from stock_zixuan where id = '$id'");
        if($res){
            return '1';
        }else{
            return '2';
        }
    }
    //申请大师
	public function applyadd(Request $request)
	{
		//姓名
		$name = $request->Master_name;
		echo $name;
		//工龄
		$suffer = $request->Master_suffer;
		//手机号
		$phone = $request->Master_phone;
		//身份证号
		$prove = $request->Master_prove;
		//邮箱
		$email = $request->Master_email;
		//介绍
		$text = $request->Master_text;
		//级别
		$jib = $request->master_jib;
		//id
		$user_id = $request->session()->get('user_id');
		// 接收图片信息
    	$file = Input::file('Master_url');
        // 允许类型
        $allowed_extensions = ["png", "jpg", "gif"];
        // 判断是否允许
        if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
            return ['error' => 'You may only upload png, jpg or gif.'];
        }
        // 保存路劲
        $destinationPath = 'storage/uploads/Master_url/'; //public 文件夹下面建 storage/uploads 文件夹
        $extension = $file->getClientOriginalExtension();
        $fileName = str_random(10).'.'.$extension;
        // 保存图片
        $file->move($destinationPath, $fileName);
        $filePath_url = asset($destinationPath.$fileName);

		// 接收图片信息
    	$file = Input::file('Prove_url');
        // 允许类型
        $allowed_extensions = ["png", "jpg", "gif"];
        // 判断是否允许
        if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
            return ['error' => 'You may only upload png, jpg or gif.'];
        }
        // 保存路劲
        $destinationPath = 'storage/uploads/Prove_url/'; //public 文件夹下面建 storage/uploads 文件夹
        $extension = $file->getClientOriginalExtension();
        $fileName = str_random(10).'.'.$extension;
        // 保存图片
        $file->move($destinationPath, $fileName);
        $filePath_purl = asset($destinationPath.$fileName);

        $add = DB::insert('insert into stock_master(master_name,master_suffer,master_phone,master_email,master_prove,master_url,master_text,user_id,prove_url,master_jib) values(?,?,?,?,?,?,?,?,?,?)',[$name,$suffer,$phone,$email,$prove,$filePath_url,$text,$user_id,$filePath_purl,$jib]);
        if($add){
        	return view('home.personal');
        }else{
        	return view('home.apply');
        }
	}
>>>>>>> .merge_file_a05196
}