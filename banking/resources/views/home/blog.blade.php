﻿<!DOCTYPE html>
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
					<li class="current"><a href="{{url('project/blog')}}"><font color="red">持股大师</font></a></li>
					<li ><a href="{{url('project/contact')}}"><font color="red">评论</font></a></li>
					<li><a href="{{url('project/login')}}"><font color="red">登录</font></a></li>
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
	<h1 class="page-title">BLOG</h1>
</div>	
</div>
</div>	

</div>	<!-- Grey bg end -->	

<!-- CONTENT -->
<div class="container clearfix">
<div class="eleven columns m-bot-25">
<!-- BLOG ITEM -->
<div class="blog-item m-bot-35 clearfix">
			<div class="hover-item">
				<div class="clearfix">
					<div class="blog-item-date-inf-container left">
							<div class="blog-item-date-cont">
								<div class="blog-item-date">21</div>
								<div class="blog-item-mounth">OCT</div>
							</div>
							<div>
								<div class="blog-item-category-img">
									<img src="images/icon-standart-post.png" alt="Ipsum" >
								</div>
							</div>
					</div>
					
					<div class="view view-first">
						<img src="images/content/post-2-1.jpg" alt="Ipsum" >
						<div class="mask"></div>	
						<div class="abs">
							<a href="images/content/post-2-1.jpg" class="lightbox zoom info"></a><a href="blog-single.html" class="link info"></a>
						</div>	
					</div>
				</div>	
				<div class="blog-item-caption-container">
							<a class="a-invert" href="blog-single.html" ><span class="bold">Craes</span> Nustro</a>
						<div class="lp-item-container-border clearfix">
							<div class="blog-info-container">
									<ul class="clearfix">
										<li class="author">Admin</li>
										<li class="view">16 views</li>
										<li class="comment">25 Comments</li>
										<li class="tag">Website Design - Responsive</li>
									</ul>
							</div>
						</div>
				</div>
			</div>
			<div class="blog-item-text-container">
				<p>Luctus et ultrices posuere cubilia Curae. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sed mauris lorem. Sed sit amet mauris eu purus consectetur blandit sed et lacus. Cras tellus enim, sagittis a varius faucibus, molestie in dolor. Mauris mollis adipiscing elit, in vulputate est volutpat vitae. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas...</p>

			</div>
			<div class="lp-r-m-container right">
				<a href="blog-single.html" class="button medium r-m-plus r-m-full">READ MORE</a>
			</div>

</div>
<!-- BLOG ITEM -->
<div class="blog-item m-bot-35 clearfix">
			<div class="hover-item">
				<div class="clearfix">
					<div class="blog-item-date-inf-container left">
							<div class="blog-item-date-cont">
								<div class="blog-item-date">17</div>
								<div class="blog-item-mounth">OCT</div>
							</div>
							<div>
								<div class="blog-item-category-img">
									<img src="images/icon-gallery-post.png" alt="Ipsum" >
								</div>
							</div>
					</div>
					
					<div class="view view-first">
						<img src="images/content/post-2-2.jpg" alt="Ipsum" >
						<div class="mask"></div>	
						<div class="abs">
							<a href="images/content/post-2-2.jpg" class="lightbox zoom info"></a><a href="blog-single.html" class="link info"></a>
						</div>	
					</div>
				</div>	
				<div class="blog-item-caption-container">
							<a class="a-invert" href="blog-single.html" ><span class="bold">Sed</span> Lectus</a>
						<div class="lp-item-container-border clearfix">
							<div class="blog-info-container">
									<ul class="clearfix">
										<li class="author">Admin</li>
										<li class="view">16 views</li>
										<li class="comment">25 Comments</li>
										<li class="tag">Website Design - Responsive</li>
									</ul>
							</div>
						</div>
				</div>
			</div>
			<div class="blog-item-text-container">
				<p>Luctus et ultrices posuere cubilia Curae. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sed mauris lorem. Sed sit amet mauris eu purus consectetur blandit sed et lacus. Cras tellus enim, sagittis a varius faucibus, molestie in dolor. Mauris mollis adipiscing elit, in vulputate est volutpat vitae. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas...</p>

			</div>
			<div class="lp-r-m-container right">
				<a href="blog-single.html" class="button medium r-m-plus r-m-full">READ MORE</a>
			</div>

</div>
<!-- BLOG ITEM -->
<div class="blog-item m-bot-35 clearfix">
			<div class="hover-item">
				<div class="clearfix">
					<div class="blog-item-date-inf-container left">
							<div class="blog-item-date-cont">
								<div class="blog-item-date">10</div>
								<div class="blog-item-mounth">OCT</div>
							</div>
							<div>
								<div class="blog-item-category-img">
									<img src="images/icon-video-post.png" alt="Ipsum" >
								</div>
							</div>
					</div>
					
					<div class="view view-first">
						<img src="images/content/post-2-3.jpg" alt="Ipsum" >
						<div class="mask"></div>	
						<div class="abs">
							<a href="images/content/post-2-3.jpg" class="lightbox zoom info"></a><a href="blog-single.html" class="link info"></a>
						</div>	
					</div>
				</div>	
				<div class="blog-item-caption-container">
							<a class="a-invert" href="blog-single.html" ><span class="bold">Lorem</span> Ipsum</a>
						<div class="lp-item-container-border clearfix">
							<div class="blog-info-container">
									<ul class="clearfix">
										<li class="author">Admin</li>
										<li class="view">16 views</li>
										<li class="comment">25 Comments</li>
										<li class="tag">Website Design - Responsive</li>
									</ul>
							</div>
						</div>
				</div>
			</div>
			<div class="blog-item-text-container">
				<p>Luctus et ultrices posuere cubilia Curae. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec sed mauris lorem. Sed sit amet mauris eu purus consectetur blandit sed et lacus. Cras tellus enim, sagittis a varius faucibus, molestie in dolor. Mauris mollis adipiscing elit, in vulputate est volutpat vitae. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nibh sapien, molestie quis elementum et, dignissim non ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas...</p>

			</div>
			<div class="lp-r-m-container right">
				<a href="blog-single.html" class="button medium r-m-plus r-m-full">READ MORE</a>
			</div>

</div>
<!-- PAGINATION -->
<div class="pagination-1-container ">
	<ul class="pagination-1">
		<li>
			<a class="pag-prev" href="#"></a>
		</li>
		<li>
			<a class="pag-current" href="#">1</a>
		</li>
		<li>
			<a href="#">2</a>
		</li>
		<li>
			<a href="#">3</a>
		</li>
		<li>
			<a class="pag-next" href="#"></a>
		</li>
	</ul>
</div>
</div>

<!-- SIDEBAR -->
<div class="five columns ">
<!-- WIDGET -->
<div class="sidebar-item  m-bot-35">

	<div class="caption-container-main m-bot-30">
		<div class="caption-text-container">BLOG CATEGORIES</div>
		<div class="content-container-white caption-bg "></div>
	</div>

	<div >
		<ul class="blog-categories">
			<li class="active "><a href="#"><span class="blog-cat-icon"></span>Business</a></li>
			<li><a href="#"><span class="blog-cat-icon"></span>Social Media</a></li>
			<li><a href="#"><span class="blog-cat-icon"></span>Technology</a></li>
			<li><a href="#"><span class="blog-cat-icon"></span>News</a></li>
			<li><a href="#"><span class="blog-cat-icon"></span>Entertainment</a></li>
		</ul>
	</div>
</div>	
<!-- WIDGET -->	
<div class="sidebar-item  m-bot-35">
	<div class="caption-container-main m-bot-30">
		<div class="caption-text-container">TAB WIDGET</div>
		<div class="content-container-white caption-bg "></div>
	</div>

	<div class="">
			<ul class="tabs-nav">
				<li class="active">
					<a href="#tab1">First</a>
				</li>
				<li class="">
					<a href="#tab2">Second</a>
				</li>
			</ul>
			<div>
				<div id="tab1" class="tab-content" >
					<ul class="latest-post-container">
						<li class="latest-post-sidebar clearfix">
							<div class="lp-img-cont left">
								<a href="" ><img src="images/content/port-2-3.jpg" alt="project"></a>
							</div>
							<div class="lp-title-cont left">
								<p class="latest-post-sidebar-title"><a href="">Lorem Ipsum</a></p>
								<p class="latest-post-sidebar-date">Feb 15, 2012</p>
								<p class="latest-post-sidebar-comm">15 comments</p>
							</div>	
						</li>
						<li class="latest-post-sidebar clearfix">
							<div class="lp-img-cont left">
								<a href="" ><img src="images/content/port-2-2.jpg" alt="project"></a>
							</div>
							<div class="lp-title-cont left">
								<p class="latest-post-sidebar-title"><a href="">Cras Tincid</a></p>
								<p class="latest-post-sidebar-date">Feb 10, 2013</p>
								<p class="latest-post-sidebar-comm">12 comments</p>
							</div>	
						</li>
						<li class="latest-post-sidebar clearfix">
							<div class="lp-img-cont left">
								<a href="" ><img src="images/content/port-2-4.jpg" alt="project"></a>
							</div>
							<div class="lp-title-cont left">
								<p class="latest-post-sidebar-title"><a href="">Amet Mauris</a></p>
								<p class="latest-post-sidebar-date">Jan 14, 2013</p>
								<p class="latest-post-sidebar-comm">10 comments</p>
							</div>
						</li>
					</ul>
				</div>
				<div id="tab2" class="tab-content content-container-white" >
					<ul class="tab-post-container text ">
						<li class="clearfix">
							<p>Aenean nisl orci, condim entum ultrices consequat eu, vehicula ac. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl orci, condim entum ultrices consequat eu, vehicula.</p>
						</li>
					</ul>
				</div>
			</div>
	</div>
</div>
<!-- WIDGET -->	
<div class="sidebar-item  m-bot-35">
	<div class="caption-container-main m-bot-30">
		<div class="caption-text-container">ACCORDION WIDGET</div>
		<div class="content-container-white caption-bg "></div>
	</div>
	

	
	<div>
	
		<div id="accordion">
		
			  <h3><a href="#">Lorem ipsum</a></h3>
			  <div>
				<p>Nunc ipsum risus, bibendum quis tincidunt a, tempor quis nunc. Aenean in odio in sapien porttitor sodales.</p>
			  </div>
			  
			  <h3><a href="#">Vestilum pulvinar</a></h3>
			  <div>
				<p>Nunc ipsum risus, bibendum quis tincidunt a, tempor quis nunc. Aenean in odio in sapien porttitor sodales.</p>
			  </div>
			  
			  <h3><a href="#">Donec sedin</a></h3>
			  <div>
			  <p>Nunc ipsum risus, bibendum quis tincidunt a, tempor quis nunc. Aenean in odio in sapien porttitor sodales.</p>
			  </div> 
		 
		 </div><!-- End accordion -->
		
	</div>
</div>
<!-- WIDGET -->	
<div class="sidebar-item  m-bot-25">
	<div class="caption-container-main m-bot-30">
		<div class="caption-text-container">TAG WIDGET</div>
		<div class="content-container-white caption-bg "></div>
	</div>
	
	
	<div>
	
			<div class="tag-cloud">
				<ul class="clearfix">
					<li><a href="">HTML 5</a></li>
					<li><a href="">CSS 3</a></li>
					<li><a href="">Photoshop</a></li>
					<li><a href="">WordPress</a></li>
					<li><a href="">Joomla!</a></li>
					<li><a href="">UI</a></li>
					<li><a href="">Template</a></li>
				</ul>
			</div>
		
	</div>
</div>
<!-- WIDGET -->	
<div class="sidebar-item  m-bot-35">
	<div class="caption-container-main m-bot-30">
		<div class="caption-text-container">FLICKR WIDGET</div>
		<div class="content-container-white caption-bg "></div>
	</div>

		<ul id="flickrfeed" class="clearfix"></ul>

</div>
</div>
</div>


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
<p id="back-top">
<a href="#top" title="Back to Top"><span></span></a>
</p>
</div>

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
