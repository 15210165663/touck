<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
class FileController extends Controller
{
    public function upload()
    {
        return view('home.upload');
    }
    public function info()
    {
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
        $filePath = asset($destinationPath.$fileName);
        // 添加
        // $info = DB::insert("insert into ourteam(name,img,per_url,per_info,add_time) VALUES ('$name','$filePath','$pre_url','$desc','$add_time')");
		if($filePath) {
			// return redirect('/admin/memberShow');
			echo "yes";
		} else {
		 	echo "no";
		}
    }
}
