<!DOCTYPE html>
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
		<link rel="stylesheet" type="text/css" href="css/style.css" >
		<link rel="stylesheet" type="text/css" href="css/skeleton.css" >

		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css"  >
	    <link rel="stylesheet" href="css/switcher/style.css">
		<link rel="stylesheet" href="css/layout/wide.css" id="layout">
		<link rel="stylesheet" href="css/colors/yellow.css" id="colors">
	</head>
	<body>
	
<div id="wrap" class="boxed">
<div class="grey-bg">
		<header id="header" >
			<div class="container clearfix">
				<div class="sixteen columns">
						<div class="header-container m-top-30 clearfix">
				
							<div class="header-logo-container ">
								<div class="logo-container">	
									<a href="{{url('project/centre')}}" class="logo" rel="home" title="Home">
										<p style="font-size: 28px">请登录</p>
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
				<h1 class="page-title">个人用户管理中心</h1>
			</div>	
		</div>
	</div>	
	
</div>	<!-- Grey bg end -->	

<!-- CONTENT -->
	<div class="container m-bot-35 clearfix">

				<div class="row">
					<div class="eight columns">
						<div class="caption-container-main m-bot-30">
							<div class="caption-text-container">管理中心</div>
							<div class="content-container-white caption-bg "></div>
						</div>
						
							<ul id="toggle-view">
								<li>
									<h3 class="ui-accordion-header"><span class="link"></span>用户余额</h3>
									<div class="panel">
										<p>
											您好，您的余额剩余&nbsp;:&nbsp;0&nbsp;元<br>
											<a href="{{url('project/balance')}}" style="color:green"><h5>点击充值</h5></a>
										</p>
									</div>
								</li>
								<li>
									<h3 class="ui-accordion-header"><span class="link"></span>所持股票</h3>
									<div class="panel">
										<p>
											
											<a href="{{url('project/touck')}}" style="color:green">查看</a>
										</p>
									</div>
								</li>
								<li>
									<h3 class="ui-accordion-header"><span class="link"></span>出售股票</h3>
									<div class="panel">
										<p>
											<a href="{{url('project/sell')}}" style="color:green">出售</a>
										</p>
									</div>
								</li>
								<li>
									<h3 class="ui-accordion-header ui-accordion-header-active"><span class="link"></span>预约列表</h3>
									<div class="panel" style="display: block;">
										<p>
											<a href="{{url('project/about')}}" style="color:green">查看</a>
										</p>
									</div>
								</li>
							</ul>
						
					</div>
					<div class="eight columns">
						<div class="caption-container-main m-bot-30">
							<div class="caption-text-container">出售股票</div>
							<div class="content-container-white caption-bg "></div>
						</div>
						<div id="skill-bars">
							<p style="font-size: 18px">大师名称&nbsp;:&nbsp;</p><br>
							<p style="font-size: 18px">预约时间&nbsp;:&nbsp;</p><br>
							<p style="font-size: 18px">预约价钱&nbsp;:&nbsp;</p><br>
							<p style="font-size: 18px">大师级别&nbsp;:&nbsp;</p>
						</div>
					</div>
				</div>
			

	</div>
	
	<div class="container clearfix">
		
		
			<div class="sixteen columns">
			
						<div class="caption-container-main m-bot-30">
							<div class="caption-text-container">OUR TEAM</div>
							<div class="content-container-white caption-bg "></div>
						</div>
			
			</div>
		

		
			
			<div class="four columns">
				<div class="content-container-white m-bot-35 clearfix">	
					<img alt="" src="images/content/member.jpg">
								<ul class="social-links clearfix">
									<li><a class="facebook-link" target="_blank" title="Facebook" href="http://themeforest.net/item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
									<li><a class="twitter-link" target="_blank" title="Twitter" href="http://themeforest.net/item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
									<li><a class="linkedin-link" target="_blank" title="Dribbble" href="http://themeforest.net/item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
								</ul>
					<div class="lw-item-caption-container">
						<div class="team-name">
							<h5>John Doe</h5>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="content-container-white m-bot-35 clearfix">	
					<img alt="" src="images/content/member.jpg">
								<ul class="social-links clearfix">
									<li><a class="facebook-link" target="_blank" title="Facebook" href="http://themeforest.net/item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
									<li><a class="twitter-link" target="_blank" title="Twitter" href="http://themeforest.net/item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
									<li><a class="linkedin-link" target="_blank" title="Dribbble" href="http://themeforest.net/item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
								</ul>
					<div class="lw-item-caption-container">
						<div class="team-name">
							<h5>John Doe</h5>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="content-container-white m-bot-35 clearfix">	
					<img alt="" src="images/content/member.jpg">
								<ul class="social-links clearfix">
									<li><a class="facebook-link" target="_blank" title="Facebook" href="http://themeforest.net/item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
									<li><a class="twitter-link" target="_blank" title="Twitter" href="http://themeforest.net/item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
									<li><a class="linkedin-link" target="_blank" title="Dribbble" href="http://themeforest.net/item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
								</ul>
					<div class="lw-item-caption-container">
						<div class="team-name">
							<h5>John Doe</h5>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="content-container-white m-bot-35 clearfix">	
					<img alt="" src="images/content/member.jpg">
								<ul class="social-links clearfix">
									<li><a class="facebook-link" target="_blank" title="Facebook" href="http://themeforest.net/item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
									<li><a class="twitter-link" target="_blank" title="Twitter" href="http://themeforest.net/item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
									<li><a class="linkedin-link" target="_blank" title="Dribbble" href="http://themeforest.net/item/solana-responsive-html5-template/5590059?ref=abcgomel"></a></li>
								</ul>
					<div class="lw-item-caption-container">
						<div class="team-name">
							<h5>John Doe</h5>
							<span>Web Designer</span>
						</div>
					</div>
				</div>
			</div>
			
			
			
			
		
		
	</div>
			
			
			
			
			





<!-- LATEST WORK -->
	
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
