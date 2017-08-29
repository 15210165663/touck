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
<base href="<?php echo e(URL::asset('Home').'/'); ?>">
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
					<li><a href="<?php echo e(url('project/index')); ?>"><font color="red">首页</font></a></li>
					<li><a href="<?php echo e(url('project/elements')); ?>"><font color="red">股票详情</font></a></li>
					<li class="current"><a href="<?php echo e(url('project/portfolio')); ?>"><font color="red">股票列表</font></a></li>
					<li><a href="<?php echo e(url('project/blog')); ?>"><font color="red">持股大师</font></a></li>
					<li ><a href="<?php echo e(url('project/contact')); ?>"><font color="red">评论</font></a></li>
					<li><a href="<?php echo e(url('project/login')); ?>"><font color="red">登录</font></a></li>
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
<h1 class="page-title">PORTFOLIO</h1>
<ul id="filter"> 
<li class="current all"><a href="#">All</a></li> 
<li class="category1"><a href="#">Web</a></li> 
<li class="category2"><a href="#">Tehnology</a></li> 
<li class="category3"><a href="#">Photo</a></li> 
</ul>
</div>	



</div>
</div>		

</div>	<!-- Grey bg end -->	





<!-- CONTENT -->
<div class="container filter-portfolio clearfix">
<ul id="portfolio" class="clearfix">
<!-- PORTFOLIO ITEM -->
<li data-id="id-1" data-type="category1" class="eight columns m-bot-35">
<div class="hover-item">
<div class="view view-first">
	<img src="images/content/port-2-1.jpg" alt="Ipsum" >
	<div class="mask"></div>	
	<div class="abs">
		<a href="images/content/port-2-1.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
	</div>	
</div>
<div class="lw-item-caption-container">
	<a class="a-invert" href="portfolio-single.html" >
		<div class="item-title-main-container clearfix">
			<div class="item-title-text-container">
				<span class="bold">Lorem</span> Ipsum
			</div>
		</div>
	</a>
	<div class="item-caption">web design</div>
</div>
</div>
</li>
<!-- PORTFOLIO ITEM -->
<li data-id="id-2" data-type="category2" class="eight columns m-bot-35">
<div class="hover-item">
<div class="view view-first">
	<img src="images/content/port-2-2.jpg" alt="Ipsum" >
	<div class="mask"></div>	
	<div class="abs">
		<a href="images/content/port-2-2.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
	</div>	
</div>
<div class="lw-item-caption-container">
	<a class="a-invert" href="portfolio-single.html" >
		<div class="item-title-main-container clearfix">
			<div class="item-title-text-container">
				<span class="bold">Craes</span> Nustro
			</div>
		</div>
	</a>
	<div class="item-caption">tehnology</div>
</div>
</div>
</li>
<!-- PORTFOLIO ITEM -->
<li data-id="id-3" data-type="category3" class="eight columns m-bot-35">
<div class="hover-item">
<div class="view view-first">
	<img src="images/content/port-2-3.jpg" alt="Ipsum" >
	<div class="mask"></div>	
	<div class="abs">
		<a href="images/content/port-2-3.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
	</div>	
</div>
<div class="lw-item-caption-container">
	<a class="a-invert" href="portfolio-single.html" >
		<div class="item-title-main-container clearfix">
			<div class="item-title-text-container">
				<span class="bold">Sed</span> Lectus
			</div>
		</div>
	</a>
	<div class="item-caption">photography </div>
</div>
</div>
</li>
<!-- PORTFOLIO ITEM -->
<li data-id="id-4" data-type="category1" class="eight columns m-bot-35">
<div class="hover-item">
<div class="view view-first">
	<img src="images/content/port-2-4.jpg" alt="Ipsum" >
	<div class="mask"></div>	
	<div class="abs">
		<a href="images/content/port-2-4.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
	</div>	
</div>
<div class="lw-item-caption-container">
	<a class="a-invert" href="portfolio-single.html" >
		<div class="item-title-main-container clearfix">
			<div class="item-title-text-container">
				<span class="bold">Amet</span> Ipsum
			</div>
		</div>
	</a>
	<div class="item-caption">web design</div>
</div>
</div>
</li>
<!-- PORTFOLIO ITEM -->
<li data-id="id-5" data-type="category2" class="eight columns m-bot-35">
<div class="hover-item">
<div class="view view-first">
	<img src="images/content/port-2-5.jpg" alt="Ipsum" >
	<div class="mask"></div>	
	<div class="abs">
		<a href="images/content/port-2-5.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
	</div>	
</div>
<div class="lw-item-caption-container">
	<a class="a-invert" href="portfolio-single.html" >
		<div class="item-title-main-container clearfix">
			<div class="item-title-text-container">
				<span class="bold">Mauris</span> Lectus
			</div>
		</div>
	</a>
	<div class="item-caption">tehnology</div>
</div>
</div>
</li>
<!-- PORTFOLIO ITEM -->
<li data-id="id-6" data-type="category3" class="eight columns m-bot-35">
<div class="hover-item">
<div class="view view-first">
	<img src="images/content/port-2-6.jpg" alt="Ipsum" >
	<div class="mask"></div>	
	<div class="abs">
		<a href="images/content/port-2-6.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
	</div>	
</div>
<div class="lw-item-caption-container">
	<a class="a-invert" href="portfolio-single.html" >
		<div class="item-title-main-container clearfix">
			<div class="item-title-text-container">
				<span class="bold">Sed</span> Ipsum
			</div>
		</div>
	</a>
	<div class="item-caption">photography </div>
</div>
</div>
</li>	


</ul>
</div>	
<!-- PAGINATION -->
<div class="container clearfix">
<div class="pagination-1-container sixteen columns">
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
