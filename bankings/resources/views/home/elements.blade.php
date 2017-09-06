<!DOCTYPE html>
<!--

Theme Name: Solana
Description: HTML/CSS Template
Author: Abcgomel 
Version: 1.0
Designed & Coded by Abcgomel

-->
<html>
<head>
<title>Solana - Responsive Multipurpose HTML Template</title>
<meta charset=utf-8 >
<base href="{{URL::asset('Home').'/'}}">
<meta name="robots" content="index, follow" > 
<meta name="keywords" content="" > 
<meta name="description" content="" > 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="favicon.ico">

<!-- CSS begin -->


<link rel="stylesheet" type="text/css" href="css/style.css" >
<link rel="stylesheet" type="text/css" href="css/skeleton.css" >

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css"  >
<link rel="stylesheet" href="css/switcher/style.css">
<link rel="stylesheet" href="css/layout/wide.css" id="layout">
<link rel="stylesheet" href="css/colors/yellow.css" id="colors">

<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie-warning.css" ><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" media="screen" href="css/style-ie.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ei8fix.css" ><![endif]-->



<!-- CSS end -->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>

<div id="wrap" class="boxed">
<div class="grey-bg"> <!-- Grey bg  -->	


<!--[if lte IE 7]>
<div id="ie-container">
<div id="ie-cont-close">
<a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
</div>
<div id="ie-cont-content" >
<div id="ie-cont-warning">
<img src='images/ie-warning.jpg' alt='Warning!'>
</div>
<div id="ie-cont-text" >
<div id="ie-text-bold">
You are using an outdated browser
</div>
<div id="ie-text">
For a better experience using this site, please upgrade to a modern web browser.
</div>
</div>
<div id="ie-cont-brows" >
<a href='http://www.firefox.com' target='_blank'><img src='images/ie-warning-firefox.jpg' alt='Download Firefox'></a>
<a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warning-opera.jpg' alt='Download Opera'></a>
<a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warning-safari.jpg' alt='Download Safari'></a>
<a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
</div>
</div>
</div>
<![endif]-->

<!-- HEADER -->
<header id="header" >
<div class="container clearfix">
<div class="sixteen columns">
	<div class="header-container m-top-30 clearfix">

		<div class="header-logo-container ">
			<div class="logo-container">	
				<a href="index.html" class="logo" rel="home" title="Home">
					<img src="images/logo-retina.png" alt="solana" >
				</a>
			</div>
		</div>

		<div class="header-menu-container right">
			<!-- TOP MENU -->
			<nav id="main-nav">
				<ul class="sf-menu clearfix">
					<li><a href="{{url('project/index')}}"><font color="red">首页</font></a></li>
					<!-- <li><a href="{{url('project/elements')}}"><font color="red">股票详情</font></a></li> -->
					<li><a href="{{url('project/portfolio')}}"><font color="red">股票列表</font></a></li>
					<li><a href="{{url('project/blog')}}"><font color="red">持股大师</font></a></li>
					<li><a href="{{url('project/contact')}}"><font color="red">评论</font></a></li>
							@if(Auth::user())
			<li>
			<a href="{{url('project/centre')}}" style="cursor:pointer;">欢迎<font color="red">{{Auth::user()->name }}</font>登录</a>
			<a style="cursor:pointer;" href="{{url('/auth/logout')}}">退出登录</a>

			</li>			

					@else
								<li><a href="{{url('project/login')}}"><font color="red">企业登录</font></a></li>
					<li><a href="{{url('/auth/login')}}"><font color="red">个人登录</font></a></li>

					@endif

			  </ul>
			</nav>
			
			<div class="search-container ">
				<form action="#" class="search-form">
					<input type="text" name="search-form-txt" class="search-text" >
					<input type="submit" value="" class="search-submit" name="submit">
				</form>
			</div>
			
		</div>
		
	</div>
</div>
</div>

</header>

<!-- PAGE TITLE -->
<div class="container m-bot-35 clearfix">
<div class="sixteen columns">
<div class="page-title-container clearfix">
<h1 class="page-title">{{$market[0]['stock_name']}}</h1><span class="page-title">详情</span>
</div>	
</div>
</div>	

</div>	<!-- Grey bg end -->	

<!-- CONTENT -->
<div class="container m-bot-35 clearfix">



<input type="hidden" class="price" value="<?php echo $prices?>">
<input type="hidden" class="qwert" value="<?php echo $qwerts?>">
<script type="text/javascript" src="quxian/ichart.1.2.min.js"></script>
<link rel="stylesheet" href="quxian/demo.css" type="text/css"/>
<script type="text/javascript">
	$(function(){
		var price = $('.price').val();
		//alert(price);
		var	arr=[]
		arr=price.split(",");
        //alert(arr)
		var qwert = $('.qwert').val();
		var flow=[];

      	for (var i = 0;i < arr.length;  i++) {
     
      		flow.push(arr[i]);
      	}
	 
		var data = [
		         	{
		         		name : 'PV',
		         		value:flow,
		         		color:'#0d8ecf',
		         		line_width:2
		         	}
		         ];
		var labels = [];
		res=qwert.split(",");

      	for (var i = 0;i < res.length;  i++) {
     
      		labels.push(res[i]);
      	}
		var chart = new iChart.LineBasic2D({
			render : 'canvasDiv',
			data: data,
			align:'center',
			title : {
				text:'股票最近涨跌',
				fontsize:22,
				color:'#f7f7f7'
			},
			subtitle : {
				text:'',
				color:'#f1f1f1'
			},
			footnote : {
				text:'',
				color:'#f1f1f1'
			},
			width : 630,
			height : 360,
			shadow:true,
			shadow_color : '#20262f',
			shadow_blur : 4,
			shadow_offsetx : 0,
			shadow_offsety : 2,
			background_color:'#383e46',
			tip:{
				enable:true,
				shadow:true
			},
			crosshair:{
				enable:true,
				line_color:'#62bce9'
			},
			sub_option : {
				label:false,
				hollow_inside:false,
				point_size:8
			},
			coordinate:{
				width:540,
				height:260,
				grid_color:'#cccccc',
				axis:{
					color:'#cccccc',
					width:[0,0,2,2]
				},
				grids:{
					vertical:{
						way:'share_alike',
				 		value:5
					}
				},
				scale:[{
					 position:'left',	
					 start_scale:0,
					 end_scale:100,
					 scale_space:30,
					 scale_size:2,
					 label : {color:'#ffffff',fontsize:11},
					 scale_color:'#9f9f9f'
				},{
					 position:'bottom',	
					 label : {color:'#ffffff',fontsize:11},
					 labels:labels
				}]
			}
		});
		
		//开始画图
		chart.draw();
	});
	</script>
<div class="row" >
<!-- Alert box -->
<div class="one-third column">
	<h3 class="title-block">{{$market[0]['stock_name']}}</h3>
	<div class="styled-box iconed-box success"><strong>股票市值</strong> &nbsp;:&nbsp; {{$market[0]['stock_price']}}&nbsp;元</div>
	<div class="styled-box iconed-box error"><strong>股票总量</strong>&nbsp;:&nbsp;  {{$market[0]['stock_number']}}&nbsp;个</div>
	<div class="styled-box iconed-box info"><strong>卖出数量</strong> &nbsp;:&nbsp;  {{$market[0]['stock_sale']}}&nbsp;个</div>
	<div class="styled-box iconed-box notice"><strong>分类</strong> &nbsp;:&nbsp;  {{$market[0]['names']}}</div>
	<div class="styled-box iconed-box">
		<form action="{{url('project/indent')}}" method="post">
			<span style="font-size: 18px">购买</span>&nbsp;：&nbsp;<input type="text" style="width:50px" value="数量" name="sum">
			{!!csrf_field()!!}
			<input type="hidden" name="price" value="{{$market[0]['stock_price']}}">
			<input type="hidden" name="stock_id" value="{{$market[0]['stock_id']}}">
			<input type="hidden" name="stock_name" value="{{$market[0]['stock_name']}}">
			<input type="submit" value="加入订单">
		</form>
	</div>
</div>
<!-- Dropcaps -->
<div class="one-third column">
	<h3 class="title-block">市场分析</h3>
<div id='canvasDiv'>
	<div class='ichartjs_info'>
		<span class='ichartjs_btn' onmouseover="this.style.color='#2f99ff'" onmouseout="this.style.color='#0b2946'" onclick="window.top.viewCode(document);">View Code</span>
	</div>
</div>
</div>


<!-- List styles -->

</div>



<div class="row">
<!-- Typography -->
<div class="sixteen columns">
	<h3 class="title-block">股票介绍</h3>
		<p>
		{!!$market[0]['stock_text']!!}
		</p>
</div>
</div>


</div>

<!-- OUR PROJECTS End -->


<!-- NEWS LETTER -->
<div class="dark-grey-bg">
<div class="container m-bot-20 clearfix">
<div class="sixteen columns">
<div class="newsletter-container clearfix">
<div class="nl-img-container">
<img src="images/icon-mail.png" alt="mail">
</div>
<div class="nl-text-container clearfix">
<div class="caption">
	<span class="bold">NEWS</span> LETTER
</div>
<div class="nl-text">Stay up-to date with the latest news and other stuffs, Sign Up today!</div>
<div class="nl-form-container">
	<form class="newsletterform" method="post" action="#">
		<input type="text" onblur="if(this.value=='')this.value='Your email here...';" onfocus="if(this.value=='Your email here...')this.value='';" value="Your email here..." name="email"><button class="nl-button">SIGN UP</button>
	</form>
</div>	
</div>
</div>
</div>
</div>
</div>

<!-- OUR CLIENTS -->
<div class="container clearfix">
<div class="sixteen columns m-bot-20">
<ul class="our-clients-container clearfix ">
<li class="">
<a href="">
	<div class="bw-wrapper">
		<img src="images/logo1.png" alt="client" >
	</div>
</a>
</li>
<li class="">
<a href="">
	<div class="bw-wrapper">
		<img src="images/logo2.png" alt="client" >
	</div>
</a>
</li>
<li class="">
<a href="">
	<div class="bw-wrapper">
		<img src="images/logo3.png" alt="client">
	</div>
</a>
</li>
<li class="">
<a href="">
	<div class="bw-wrapper">
		<img src="images/logo4.png" alt="client" >
	</div>
</a>
</li>
<li class="">
<a href="">
	<div class="bw-wrapper">
		<img src="images/logo5.png" alt="client" >
	</div>
</a>
</li>
</ul>
</div>	
</div>
<!-- FOOTER -->

<p id="back-top">
<a href="#top" title="Back to Top"><span></span></a>
</p>
</div><!-- End wrap -->
<!-- JS begin -->

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/jQuery.BlackAndWhite.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jflickrfeed.min.js"></script>
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery-cookie.js"></script>  
<script src="js/styleswitcher.js"></script>
<div class="switcher"></div>

<!-- JS end -->

</body>
</html>		
