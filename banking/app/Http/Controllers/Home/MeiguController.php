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
		$data = $this->curl_contents('http://web.juhe.cn:8080/finance/stock/usaall?page=&type=&key=869fc55897a8cfa99ad7029e86459972');
		$datas = json_decode($data,true);
		$list = $datas['result'];
		//金融界美股新闻
		//要闻
		$list['yw'] = $this->meigu_index('http://usstock.jrj.com.cn/list/mgyw.shtml');
		//中国概念股
		$list['gng'] = $this->meigu_index('http://usstock.jrj.com.cn/list/zggng.shtml');
		//研究分析
		$list['yjfx'] = $this->meigu_index('http://usstock.jrj.com.cn/list/yjfx.shtml');
		return view('home.meigu',$list);
	}
	//美股公司详情
	public function meigu_info($symbol)
	{
		//美股详情
		$url = 'http://web.juhe.cn:8080/finance/stock/usa?gid='.$symbol.'&key=c186b517ccac207266d11e1045778190';
		$jk = json_decode($this->curl_contents($url),true);
		if($jk['resultcode']==200)
		{
			$data = $jk['result'][0];
			$data['err'] = 1;
			//公司信息
			$company = $this->curl_contents('http://www.baike.com/wiki/'.$data['data']['name']);
			//采集简介
			$info_prge = '#<div class="summary" name="anchor" id="anchor"><p>(.*)</p>.*</div>#isU';
			preg_match($info_prge,$company,$arr1);
			if(empty($arr1)){
				$info_prge = '#<div id="anchor" name="anchor" class="summary"><p>(.*)</p>.*</div>#isU';
				preg_match($info_prge,$company,$arr1);
				if(empty($arr1)){
					$data['info'] = '没有找到相关信息';
				}else{
					$data['info'] = $arr1[1];
				}
			}else{
				$data['info'] = $arr1[1];
			}
			//采集基本信息
			$info_prge2 = '#<div id="datamodule" name="datamodule" appcode="datamodule">.*<table>(.*)</table>#isU';
			preg_match($info_prge2,$company,$arr2);
			if(empty($arr2)){
				$info_prge2 = '#<div name="datamodule" id="datamodule" appcode="datamodule">.*<table>(.*)</table>#isU';
				preg_match($info_prge2,$company,$arr2);
				if(empty($arr2)){
					$data['info2'] = '没有找到相关信息';
				}else{
					$data['info2'] = preg_replace('/\r|\n| /','',$arr2[1]);
				}
			}else{
				$data['info2'] = preg_replace('/\r|\n| /','',$arr2[1]);
			}
		}else{
			$data['err'] = 0;
			$data['msg'] = '没有找到相关信息';
		}
		return view('home.meigu_info',$data);
	}	
	//美股市场首页显示新闻
	public function meigu_index($url)
	{
		$url_jrj_data = iconv('gbk','utf-8',$this->curl_contents($url));
		//采集ul
		$jrg_prge = '#<ul class="ull">.*</ul>#isU';
		preg_match($jrg_prge,$url_jrj_data,$jrj);
		//采集href span
		$jrg_prge1 = '#<li><a href="(.*)".*>(.*)</a><span>(.*)</span></li>#isU';
		preg_match_all($jrg_prge1,$jrj[0],$jrj1);

		//采集内容放入list 显示八条
		foreach ($jrj1[1] as $k => $link) {
			if($k==8) break;
			$list[$k]['link'] = $link;
			$list[$k]['title'] = $jrj1[2][$k];
			$list[$k]['time'] = $jrj1[3][$k];
		}
		return $list;
	}
	//美股要闻页
	public function meigu_newpage()
	{
		$rows['page'] = isset($_GET['page'])?$_GET['page']:'1';
		$rows['type'] = $_GET['type'];
		//金融界美股新闻
		$get = isset($_GET['link']) ? $_GET['link'] : 'http://usstock.jrj.com.cn/list/'.$rows['type'].'.shtml';
		$url_jrj_data = iconv('gbk','utf-8',$this->curl_contents($get));
		//采集ul
		$jrg_prge = '#<ul class="ull">.*</ul>#isU';
		preg_match($jrg_prge,$url_jrj_data,$jrj);
		//采集href span
		$jrg_prge1 = '#<li><a href="(.*)".*>(.*)</a>.*</li>#isU';
		preg_match_all($jrg_prge1,$jrj[0],$jrj1);
		foreach ($jrj1[1] as $k => $link) {
			$jrj_new = iconv('gb18030','utf-8',$this->curl_contents($link));
			$jrj_preg = '#<div class="titmain">.*<span><!--jrj_final_date_start-->(.*)<!--jrj_final_date_end-->.*</span>.*<div class="texttit_m1">(.*)<!--爱投顾 begin -->.*</div>#isU';
			preg_match($jrj_preg,$jrj_new,$new);
			$rows['jrj_new_rows'][$k]['link'] = $link;
			$rows['jrj_new_rows'][$k]['title'] = $jrj1[2][$k];
			$rows['jrj_new_rows'][$k]['time'] = preg_replace('/\r|\n/','',$new[1]);
			$content = mb_substr(preg_replace('/\r|\n/','',strip_tags($new[2])),1,100).'...';
			$rows['jrj_new_rows'][$k]['content'] = $content;
		}
		return view('home.meigu_newpage',$rows);
	}
	//美股新闻详情页
	public function meigu_new()
	{
		//金融界新闻详情页面
		$jrj_new = iconv('gb18030','utf-8',$this->curl_contents($_GET['link']));
		$jrj_preg = '#<div class="titmain">.*<h1>.*<!--jrj_final_title_start-->(.*)<!--jrj_final_title_end-->.*</h1>.*<span><!--jrj_final_date_start-->(.*)<!--jrj_final_date_end-->.*</span><span>来源：<!--jrj_final_source_start-->(.*)<!--jrj_final_source_end-->.*</span>.*<div class="texttit_m1">(.*)<!--爱投顾 begin -->.*</div>#isU';
		preg_match($jrj_preg,$jrj_new,$new);
		$news = [
			'title'   => preg_replace('/\r|\n/','',$new[1]),
			'time'    => preg_replace('/\r|\n/','',$new[2]),
			'source'  => preg_replace('/\r|\n/','',$new[3]),
			'content' => preg_replace('/\r|\n/','',$new[4]),
			'type'    => $_GET['type'],
		];
		return view('home.meigu_new',$news);
	}

	//curl
	public function curl_contents($url){
		 $curl = curl_init();   
		curl_setopt($curl, CURLOPT_URL, $url);  
		curl_setopt($curl, CURLOPT_HEADER, 0);  
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$html = curl_exec($curl);
		curl_close($curl);
		return $html;
	}
}