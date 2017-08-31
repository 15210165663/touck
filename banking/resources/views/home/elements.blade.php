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
					<li class="current"><a href="{{url('project/contact')}}"><font color="red">评论</font></a></li>
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
<h1 class="page-title">{{$stock_name}}</h1><span class="page-title">详情</span>
</div>	
</div>
</div>	

</div>	<!-- Grey bg end -->	

<!-- CONTENT -->
<div class="container m-bot-35 clearfix">






<div class="row" >
<!-- Alert box -->
<div class="one-third column">
	<h3 class="title-block">{{$stock_name}}</h3>
	<div class="styled-box iconed-box success"><strong>股票市值</strong> - {{$stock_price}}!</div>
	<div class="styled-box iconed-box error"><strong>股票总量</strong> - {{$stock_number}}!</div>
	<div class="styled-box iconed-box info"><strong>卖出数量</strong> - {{$stock_sale}}!</div>
	<div class="styled-box iconed-box notice"><strong>分类</strong> - {{$stock_type}}!</div>
</div>
<!-- Dropcaps -->
<div class="one-third column">
	<h3 class="title-block">Dropcaps</h3>
	<!-- <p><span class="dropcap1">P</span>ras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus, nec dictum nunc tortor id urna eros ac molestie placerat, enim tellus.</p>
	<p><span class="dropcap2">P</span>ras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus, nec dictum nunc tortor id urna eros ac molestie placerat, enim tellus. Nec dictum nunc tortor id urna eros ac molestie placerat, enim tellus.</p>
	<p><span class="dropcap3">P</span>ras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus, nec dictum nunc tortor id urna eros ac molestie placerat, enim tellus.</p>
	<p><span class="dropcap4">P</span>ras aliquet. Integer faucibus, eros ac molestie placerat, enim tellus varius lacus, nec dictum nunc tortor id urna eros ac molestie placerat, enim tellus.</p> -->
	<img src="{{url::asset('Home').'/uploads/logo/tline.png'}}">
</div>
<!-- List styles -->
<div class="one-third column">

	<h3 class="title-block">资讯</h3>
<!-- TABS -->


	<ul class="tabs-nav">
		<li class="active">
			<a href="#tab1">个股要闻</a>
		</li>
		<li class="">
			<a href="#tab2">行业要闻</a>
		</li>
		<li class="">
			<a href="#tab3">公司公告</a>
		</li>
	</ul>
	<div class="content-container-white tab-main-container">
		<div id="tab1" class="tab-content" >
			<ul class="tab-post-container text">
				<li>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula. Aenean nisl orci.<br><br>
					Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac. Lorem ipsum dolor sit amet.</p>
				</li>
				
			</ul>
		</div>
		<div id="tab2" class="tab-content" >
			<ul class="tab-post-container text">
				<li>
					<p>Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci.<br><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula.</p>
				</li>
			</ul>
		</div>
		<div id="tab3" class="tab-content" >
			<ul class="tab-post-container text">
				<li>
					<p>Ut adipiscing, leo nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Ut adipiscing, leo nec. Aenean nisl orci.<br><br>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula.</p>
				</li>
			</ul>
		</div>
	</div>
	
	
	
</div>
</div>



<div class="row">
<!-- Typography -->
<div class="sixteen columns">
	<h3 class="title-block">企业介绍</h3>
		<p>
		{!!$stock_text!!}
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
