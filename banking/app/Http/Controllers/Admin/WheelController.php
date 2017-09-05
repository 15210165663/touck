<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
use Illuminate\Support\Facades\Input;
class WheelController extends CommonController
{
	/**
	 * 轮播图列表
	 * @return [type] [description]
	 */
	public function wheel()
	{
		$data = DB::table('slideshow')->paginate(5);  //查询所有数据
		$data = json_decode( json_encode( $data), true);  //对象转化数组
        // print_r($data);die;
		return view('admin.wheel',['data'=>$data]); //渲染页面
	}
	/**
	 * 轮播图添加
	 * @return [type] [description]
	 */
	public function wheeladd()
	{
		return view('admin.wheeladd');
	}


	public function wheeladdd()
    {

    	// 接收图片信息
    	$file = Input::file('show_url');

    	// 接收名称
        $Static = $_POST['Static'];
        $sort = $_POST['sort'];

        // 允许类型
        $allowed_extensions = ["png", "jpg", "gif"];

        // 判断是否允许
        if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
            return ['error' => 'You may only upload png, jpg or gif.'];
        }

        // 保存路劲,,public 文件夹下面建 Admin/uploads 文件夹
        $destinationPath = 'uploads/'; //
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . mt_rand(100000, 999999) . '.' . $file ->getClientOriginalExtension();

        // 保存图片
        $file->move($destinationPath, $fileName);
        $filePath = asset($destinationPath.$fileName);

        // 添加,执行sql语句
        $info = DB::insert("insert into stock_slideshow(show_url,static,show_sort) VALUES ('$fileName','$Static','$sort')");
		if($info) {
            return redirect('admin/wheel');
		} else {
		 	echo "no";
		}
    }

    //删除 
    public function  wheeldei($id) {
      $data = DB::table('slideshow')->where('show_id',$id)->delete();
      return redirect('admin/wheel');
   }
}
?>