<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;
use Illuminate\Support\Facades\DB;
class FileController extends Controller
{
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
        $info = DB::insert("insert into stock_image(img_url) VALUES('$filePath')");
		if($filePath) {
			return redirect('project/ge');
		} else {
            return redirect('project/ge');
		}
    }
}
