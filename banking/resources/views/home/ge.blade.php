<!DOCTYPE html>
<html lang="en">
<!-- head start -->
<head>
	<meta charset="UTF-8">
	<!-- 兼容pc客户端内置浏览器大小 去掉下面的meta标签-->
			<meta name="window-size" content="width=1300&height=800"/>
		<title>资料修改 个人中心</title>
	<link rel="shortcut icon" href="//t.10jqka.com.cn/circle/images/favicon.ico"/>
	    	<!-- css -->
<!-- 正式环境 -->
<!-- 7个CSS 别往后面加CSS了 -->
<link rel="stylesheet" href="//s.thsi.cn/cb?sns/css/circle/5.0.1/;base-051faa.css;btn-290708.css;find-00a75c.css;im-7690b8.css;mod-dialog-0a300d.css;snsueditor-a92821.css;;sns/sea-modules/gallery/tinyscrollbar/tinyscrollbar2.4.2/tinyscrollbar.css">

<!-- 10个CSS -->
<link rel="stylesheet" href="//s.thsi.cn/cb?sns/css/circle/5.0.1/;index-315b04.css;theme-introduce-611579.css;postlist-316d31.css;newcircle-dialog-ace2c9.css;dongmi-3f250c.css;postdetail-3171f2.css;usercard-a2df1c.css;message-77f9e2.css;apply-032ab1.css;account-manage-758edf.css">
<!-- 7个CSS  -->
<link rel="stylesheet" href="//s.thsi.cn/cb?sns/css/circle/5.0.1/;follow-b31640.css;productcircle-06d230.css;homepage-8bd808.css;share-f6f732.css;mulit-48105f.css;pay-81970b.css;themeServiceCommon-952378.css">
<!--1个css-->
<link rel="stylesheet" href="//s.thsi.cn/cb?sns/css/circle/5.0.1/;detail-bf948d.css">

<!-- css -->

<!-- js -->
	<!-- 正式环境 -->
	<!-- 4 -->
	<script src="//s.thsi.cn/cb?sns/sea-modules/;jquery/jquery/1.11.0/jquery.js;/gallery/highcharts/4.04/highcharts.js;;sns/require-modules/require.min.js;;sns/js/lib/json/json2.js&20160113"></script>
	<!-- 3 -->
	<script src="//s.thsi.cn/cb?js/ta.min.201511060941.js;;sns/js/core/;Ta/ta-plus-1.0.0.js;;sns/js/SNS-1.0.5.min.js&20170519"></script>
	
<script>
	if(!(navigator.userAgent.toLowerCase().indexOf('chrome') > 0) ){
		window.onerror = function(){
            return true;
        }
	}
</script>
<!--[if IE 6]>
<script src="//s.thsi.cn/sns/js/ie/opacity.ie6.js" ></script>
<script>
    DD_belatedPNG.fix('.png');
    document.execCommand("BackgroundImageCache",false, true);
</script>
<link rel="stylesheet" href="http://s.thsi.cn/sns/js/ie/ieBlocker.min.css">
<script src="//s.thsi.cn/cb?sns/js/ie/ieBlocker.min.2017.js"></script>
<![endif]-->


<script>
//用于登出之后跳回的地址
// Gst变量用于记录系统时间，仅圈子主页会渲染
//GchatTime变量 pc端本地系统时间。用于同步聊天室已存在发言的时间
var Gloginouturl = 'http://t.10jqka.com.cn/?showlogin=1';window.GchatTime = new Date();
require(['common'],function(){});
</script>
<script>
var SEAJSMAP={"myProtoMain.js":"211d34","common.js":"8c38d9","chatCommentMain.js":"3a6c4f","circleManageMain.js":"e4d5a2","findMain.js":"934d2e","followMain.js":"7509e3","groupPageMain.js":"6d190c","groupPageSingleMain.js":"f7ce06","homePageMain.js":"cc0c01","joinCircleMain.js":"88e401","liveCataMain.js":"e0a40b","memberManageMain.js":"bb51d3","messageMain.js":"e38cd2","myBookMain.js":"60f573","postCommentMain.js":"609912","postDetailMain.js":"76cec9","productMain.js":"092711","profileMain.js":"55d8c9","setBannerMain.js":"d4d54c","setLinkMain.js":"3e6371","stockMain.js":"88b7ea","themeMain.js":"f62335","qualifyMain.js":"d4ebb5","payMain.js":"7a3fe1","rightMain.js":"801e26","applyCircleMain.js":"7874a9","newWmIndexMain.js":"066496","wmPostMain.js":"f60982","debateMain.js":"98d4e1","sortManageMain.js":"e8a620","workBenchMain.js":"d13908","strategyCommentMain.js":"056b4b","groupLiveMain.js":"c5e423","circlerAnswerSearchMain.js":"715bee","videoDetailMain.js":"b53c1c","flashDetailMain.js":"ef534d","themeOrientMain.js":"e21595","circleTacticManageMain.js":"cd629d","videoManageMain.js":"44be41","myLikesMain.js":"06fd10","follow.js":"4fecc1","rightRegisterMain.js":"c0c7ae","myGameMain.js":"501d0c","groupLiveMain.es5.js":"34a83f","thsApi.es5.js":"6a4af8","pcindex.js":"6fc9f9","pcindex.es5.js":"62bdbf","pcadviserList.js":"30e094","pcadviserList.es5.js":"bd1502"};
</script><script>
	
	var requirejspath = {
		'domReady'       :'//s.thsi.cn/sns/require-modules/domReady/domReady'
		,'text'          :'//s.thsi.cn/sns/require-modules/text-master/text'
		,'tinyscrollbar' :'//s.thsi.cn/sns/sea-modules/gallery/tinyscrollbar/tinyscrollbar2.4.2/jquery.tinyscrollbar'
		,'store'         :'//s.thsi.cn/sns/sea-modules/gallery/store/1.3.7/store2'
		,'EditorSmall'   :'//s.thsi.cn/sns/require-modules/editor/EditorSmall'
		,'Editor'        :'//s.thsi.cn/sns/require-modules/editor/Editor'
		,'artTemplate'   :'//s.thsi.cn/sns/sea-modules/gallery/artTemplate/3.0/template-debug'
		,'WdatePicker'   :'//s.thsi.cn/sns/sea-modules/gallery/My97DatePicker/4.8.4/WdatePicker'
		,'Autoplate.es5' :'//s.thsi.cn/sns/require-modules/Autoplate.es5'
		,'Autoplate-v2'  :'//s.thsi.cn/sns/require-modules/Autoplate'
	}

	$.each(SEAJSMAP, function(key, value){
	    var reg = new RegExp(key, 'g');
	    var mapKey = key.replace('.js','');
	    var result = key.replace('.js', '-' + value);
	    requirejspath[mapKey] = result;
	});

	
	//正式环境
	require.config({
		baseUrl: '//s.thsi.cn/sns/sea-modules/circle/deploy/2.0.1',
		paths:requirejspath,
		map:{
			'*':{
				'requirePath':'//s.thsi.cn/sns/require-modules'	
			}
		},
		watiSeconds:0
	});
	</script>
<!-- js--></head>
<!-- head end --><script type="text/javascript">
	require(['profileMain'],function(){});
</script>
<body>
<!-- 导航 start -->
<script>var loginUserJson	= {"userid":"412608137","nickname":"co_**1373n3"};</script>
<link rel="stylesheet" href="//s.thsi.cn/sns/css/circle/5.0.1/header-a25f0a.css">
<script src="//s.thsi.cn/sns/sea-modules/gallery/autoComplete/newAutoComplete.js?20160524"></script>
<<<<<<< .merge_file_a08428
<<<<<<< .merge_file_a06804
<script type="text/javascript">
//广告初始化对象
//判断是PC还是移动设备，两个平台传的数据不一样
var sUserAgent = navigator.userAgent.toLowerCase();
var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
var bIsMidp = sUserAgent.match(/midp/i) == "midp";
var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
var bIsAndroid = sUserAgent.match(/android/i) == "android";
var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";

if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
	var ad_obj = null;

	/**app推广**/

	require(['store'],function(store){
		$(document).ready(function() {

			function getPlatform(){
			    var browser={
			        versions:function(){
			            var u = navigator.userAgent, app = navigator.appVersion;
			            return {
			                iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1,
			                iPad: u.indexOf('iPad') > -1
			            };
			        }(),
			        language:(navigator.browserLanguage || navigator.language).toLowerCase()
			    };
			    if( browser.versions.iPhone || browser.versions.iPad )
			    {
			        var platform = "iphone";
			    }else{
			        var platform = "gphone";
			    }
			    return platform;
			}

			var gsjlDownLoad = store.get('gsjldownload');
			var day = new Date();
        	var today = ''+day.getDate();

        	// if( getPlatform()=='iphone' ){
        	// 	$('.suggest-appdownloadhref').attr('href','//a.app.qq.com/o/simple.jsp?pkgname=com.hexin.plat.android');
        	// 	$('.suggest-appdownloadhref').attr('data-statid','c_c_appdownload_iphone');
        	// }else{
        	// 	$('.suggest-appdownloadhref').attr('href','//a.app.qq.com/o/simple.jsp?pkgname=com.hexin.plat.android');
        	// 	$('.suggest-appdownloadhref').attr('data-statid','c_c_appdownload_gphone');
        	// }
	        if(typeof gsjlDownLoad == 'undefined' || gsjlDownLoad != today){
				$('.myadshow').show();
				TA.log({'id':'c_p_download_gsjl'});
	        }

			$('#gsjlDownload').click(function(){
				TA.log({'id':'c_c_download_gsjl'});
				window.location.href = '//a.app.qq.com/o/simple.jsp?pkgname=com.hexin.android.stocktrain';
			});
			$('.myadclose').click(function(event){
				store.set('gsjldownload',today);
				$('.myadshow').hide();
				TA.log({'id':'c_c_download_gsjl_close'});
				event.stopPropagation();
			});

	        /*$('.suggest-appdownload .suggest-appdownloadhref').click(function(event) {
	        	store.set('gsjldownload',today);
	        	$('.suggest-appdownload').hide();
	        });*/

	        // $('.suggest-appdownload .close').click(function(event) {
	        // 	store.set('gsjldownload',today);
	        // 	$('.suggest-appdownload').hide();
	        // });
		});
	});
} else {
    var ad_obj = null
}
</script>


<!-- 股市教练App下载二维码2 -->
<div class="navright-topma">
	<a href="//t.10jqka.com.cn/app/#R_576b77f7_955" target="_blank">
		<div class="topma-arrows"><div class="topma-arrows-in"></div></div>
		<div class="tac topma-wrap">
			<div class="topma-ewm center"><img src="//i.thsi.cn/sns/circle/img2/gsjl/app.postlist.png" alt=""></div>
			<p class="mt20 fwb">扫码下载客户端</p>
			<p class="redtext">看直播&nbsp;选策略&nbsp;找高手</p>
		</div>
	</a>
</div>
=======
>>>>>>> .merge_file_a08720
=======
>>>>>>> .merge_file_a08660


<!-- 股市教练app推荐 -->
<!-- <div class="suggest-appdownload" style="display:none;">
	<div class="mask"></div>
	<img src="//i.thsi.cn/sns/circle/newcircle/app/close.png" alt="" class="close">
	<img src="//i.thsi.cn/sns/circle/newcircle/app/app_det.png" alt="">
	<a class="suggest-appdownloadhref" data-statid="c_c_appdownload" href=""></a>
</div> -->
<div class="myadshow" id="gsjlDownload" style="display: none;">
	<div class="myadclose"></div>
	<div style="position: relative;">
		<img src="//i.thsi.cn/sns/circle/wapcircle/mlive/gsjldownload3.png">
	</div>
</div>
<!-- 导航end -->
<!-- ucenter的设置支付密码页面 和 充值财富点页面共用此头部。 -->
	<div class="main-wrap">
		<div class="w750 main-border">
			<div class="homepage-wrap">
				<center>
				<form action="{{url('project/info')}}" method="post" enctype="multipart/form-data">
					<table>
						<tr>
							<td>
		@if($lists != '')
			<a href="javascript:void(0);" class="avatar por db"><img class="homepage-avatar" src="{{$lists['img_url']}}" alt=""></a>
		@else
			<a href="javascript:void(0);" class="avatar por db"><img class="homepage-avatar" src="{{URL::asset('biu.jpg')}}" alt=""></a>
		@endif
							</td>
						</tr>
						<tr>
							<td><input type="file" name="img"></td>
						</tr>
						<tr>
							<td><input  style="width:100px;height:35px;line-height:15px;background:transparent url(http://www.gsh.com/9-xiaosan/banking/public/5.png) no-repeat;border:none;cursor:pointer;" type="submit" value="更改头像"></td>
						</tr>
					</table>
				</form>
					<p class="c444 fs24 ffyh homepage-name"><span class="por"><em id="nickname"><?=$name?></em><a href="javascript:;" id="editNN" class="icon-main icon-main-s-pen hp-nickname-pos"></a></span></p>
					<div class="homepage-name-wrap" style="display:none;" id="editNickName">
						<div class="hp-edit-wrap clearfix">
							<a class="icon-main-g-pen icon-main " id="edit-nn-submit"  href="javascript:;"></a>
							<input type="text" class="sub" value="<?=$name?>">
						</div>	
					</div>
				</center>
<script>
	$(function(){
		$(".sub").blur(function(){
			var name = $(this).val(); 
			var name1 = $("#nickname").html();
			if(name1 != name){
				$.ajax({
					type:"get",
					url:"{{url('project/ajax')}}",
					data:{"name":name},
					success:function(data){
						if(data==1){
							location.href=('{{url("project/ge")}}');
						}else{
							location.href=('{{url("project/ge")}}');
						}
					}
				})
			}
			window.getSelection().removeAllRanges();
		})
		$(".text").blur(function(){
			var name = $(this).val();
			$.ajax({
				type:"get",
				url:"{{url('project/center')}}",
				data:{"name":name},
				success:function(data){
					if(data==1){
						location.href=('{{url("project/ge")}}');
					}else{
						location.href=('{{url("project/ge")}}');
					}
				}
			})
			window.getSelection().removeAllRanges();
		})
	})
</script>
				<div class="homepage-self">
					<div class="fs16 c444 ffyh block-title por">
						个人简介
					</div>
					<div class="homepage-logic homepage-content">
						<span class="c444 hp-lg-content"><em id="selfInfo" class="wdwrap">{{$center}}</em><a href="javascript:;" id="editInfo" class="icon-main icon-main-s-pen hp-lg-pos"></a></span>
						<div id="edit-info-wrap" class="hp-edit-wrap clearfix" style="display:none;">
							<a id="edit-info-submit" class="icon-main-g-pen icon-main " href="javascript:;"></a><textarea class="text" id="hp-lg-textarea"></textarea>
						</div>
					</div>
					<div class="fs16 c444 ffyh block-title por">
						实名认证
<<<<<<< .merge_file_a08428
<<<<<<< .merge_file_a06804
						<a href="http://upass.10jqka.com.cn/identify?platform=pc&redir=http://t.10jqka.com.cn/newcircle/user/profile/" class="bluelink fz12 ml20">点击认证</a>										
=======
					<a href="http://upass.10jqka.com.cn/identify?platform=pc&redir=http://t.10jqka.com.cn/newcircle/user/profile/" class="bluelink fz12 ml20">点击认证</a>	
>>>>>>> .merge_file_a08720
=======
					<a href="http://upass.10jqka.com.cn/identify?platform=pc&redir=http://t.10jqka.com.cn/newcircle/user/profile/" class="bluelink fz12 ml20">点击认证</a>	
>>>>>>> .merge_file_a08660
					</div>
					<div class="homepage-realname">
						<ul class="pt0">
						</ul>
					</div>
					<div class="fs16 c444 ffyh block-title por">
						风险认证
					<a href="http://upass.10jqka.com.cn/risktest?platform=pc&redir=http://t.10jqka.com.cn/newcircle/user/profile/" class="bluelink fz12 ml20">点击认证</a>
					</div>
					<div class="homepage-risk">
						<ul class="pt0">
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>