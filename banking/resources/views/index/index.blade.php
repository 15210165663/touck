
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

<!-- CSS begin -->

<link rel="stylesheet" type="text/css" href="css/style.css" >
<link rel="stylesheet" type="text/css" href="css/skeleton.css" >

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css"  >
<link rel="stylesheet" href="css/switcher/style.css">
<link rel="stylesheet" href="css/layout/wide.css" id="layout">
<link rel="stylesheet" href="css/colors/yellow.css" id="colors">

<link rel="stylesheet" type="text/css" href="css/flexslider.css"  >

</head>
<body>

<div id="wrap" class="boxed">
<div class="grey-bg">
<!-- HEADER -->
<header id="header" >
<div class="container clearfix">
<div class="sixteen columns header-position">
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
					<li class="current"><a href="{{url('project/index')}}"><font color="red">首页</font></a></li>
					<li><a href="{{url('project/elements')}}"><font color="red">股票详情</font></a></li>
					<li><a href="{{url('project/portfolio')}}"><font color="red">股票列表</font></a></li>
					<li><a href="{{url('project/blog')}}"><font color="red">持股大师</font></a></li>
					<li ><a href="{{url('project/contact')}}"><font color="red">评论</font></a></li>
					<li>
						@if($name != null)
							<a style="cursor:pointer;">欢迎<font color="red">{{ $name }}</font>登录</a>
						@else
							<a href="{{url('project/login')}}"><font color="red">企业登录</font></a>
						@endif
					</li>
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
<!-- SLIDER -->
<div class="slider-1 clearfix">

<div class="flex-container">
<div class="flexslider loading">
<ul class="slides">
<li style="background:url(images/sliders/slider-1/slider-bg-1.jpg) no-repeat;background-position:50% 0">

<div class="container">
<div class="sixteen columns contain">

<h2 data-toptitle="36%">MULTIPURPOSE THEME</h2>
<p data-bottomtext="39%">CRAS JUSTO ODIO, DAPIBUS AC FACILISIS </p>
<div class="links" data-bottomlinks="30%">
<a class="button medium r-m-plus r-m-full" href="blog-single.html">READ MORE</a>
</div>

<img src="images/sliders/slider-1/slider-item-1.png" class="item" alt="slide-item"  data-topimage="21%"/>

</div>
</div><!-- End Container -->

</li><!-- End item -->


<li style="background:url(images/sliders/slider-1/slider-bg-2.jpg) no-repeat; background-position:50% 0">

<div class="container">
<div class="sixteen columns contain">

<h2 data-toptitle="36%">LOREM IPSUM</h2>
<p data-bottomtext="39%">CRAS JUSTO ODIO, DAPIBUS AC FACILISIS </p>
<div class="links" data-bottomlinks="30%">
<a class="button medium r-m-plus r-m-full" href="blog-single.html">READ MORE</a>
</div>

</div>
</div><!-- End Container -->

</li><!-- End item -->


<li style="background:url(images/sliders/slider-1/slider-bg-3.jpg) no-repeat; background-position:50% 0">

<div class="container">
<div class="sixteen columns contain">

<h2 data-toptitle="36%">ALES MAECENAS</h2>
<p data-bottomtext="39%">CRAS JUSTO ODIO, DAPIBUS AC FACILISIS </p>
<div class="links" data-bottomlinks="30%">
<a class="button medium r-m-plus r-m-full" href="blog-single.html">READ MORE</a>
</div>

<img src="images/sliders/slider-1/slider-item-2.png" class="item" alt="slide-item" data-topimage="24%"/>

</div>
</div><!-- End Container -->

</li><!-- End item -->


</ul>
</div>
</div>

</div><!-- End slider -->


<!-- 3 BLOCKS (1 ver) -->

</div>	<!-- Grey bg end -->	


<!-- LATEST WORK -->
<div class="container clearfix m-top-60">
<!-- jCAROUSEL -->
<div class="jcarousel latest-work-jc m-bot-30" >
<ul class="clearfix">
<!-- LATEST WORK ITEM -->
<li class="four columns">
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

<!-- LATEST WORK ITEM -->
<li class="four columns">
	<div class=" hover-item">
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
						<span class="bold">Lorem</span> Ipsum
					</div>
				</div>
			</a>
			<div class="item-caption">photography</div>
		</div>
	</div>
</li>

<!-- LATEST WORK ITEM -->
<li class="four columns">
	<div class=" hover-item">
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
						<span class="bold">Lorem</span> Ipsum
					</div>
				</div>
			</a>
			<div class="item-caption">illustration</div>
		</div>
	</div>
</li>

<!-- LATEST WORK ITEM -->
<li class="four columns">
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
						<span class="bold">Lorem</span> Ipsum
					</div>
				</div>
			</a>
			<div class="item-caption">web design</div>
		</div>
	</div>
</li>

<!-- LATEST WORK ITEM -->
<li class="four columns">
	<div class=" hover-item">
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
						<span class="bold">Lorem</span> Ipsum
					</div>
				</div>
			</a>
			<div class="item-caption">web design</div>
		</div>
	</div>
</li>

<!-- LATEST WORK ITEM -->
<li class="four columns">
	<div class=" hover-item">
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
						<span class="bold">Lorem</span> Ipsum
					</div>
				</div>
			</a>
			<div class="item-caption">web design</div>
		</div>
	</div>
</li>

<!-- LATEST WORK ITEM -->
<li class="four columns">
	<div class=" hover-item">
		<div class="view view-first">
			<img src="images/content/port-2-7.jpg" alt="Ipsum" >
			<div class="mask"></div>
			<div class="abs">
				<a href="images/content/port-2-7.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
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

<!-- LATEST WORK ITEM -->
<li class="four columns">
	<div class=" hover-item">
		<div class="view view-first">
			<img src="images/content/port-2-8.jpg" alt="Ipsum" >
			<div class="mask"></div>
			<div class="abs">
				<a href="images/content/port-2-8.jpg" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
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
</ul>
</div>
<!-- jCAROUSEL End -->
</div>	
<!-- OUR PROJECTS End -->




<!-- FEATURES 2 -->


<!-- LATEST NEWS -->
<div class="container clearfix m-top-60">
<!-- jCAROUSEL -->
<div class="jcarousel latest-posts-jc m-bot-50" >
<ul class="clearfix">
<!-- LATEST NEWS ITEM -->
<li class="four columns">
	<div class="hover-item">
		<div class="view view-first">
			<img src="images/content/post-2-1.jpg" alt="Ipsum" >
			<div class="mask"></div>	
			<div class="abs">
				<a href="images/content/post-2-1.jpg" class="lightbox zoom info"></a><a href="blog-single.html" class="link info"></a>
			</div>	
		</div>
		<div class="lp-item-caption-container">
					<a class="a-invert" href="blog-single.html" ><span class="bold">Craes</span> Nustro</a>
				<div class="lp-item-container-border clearfix">
					<div class="lp-item-info-container">
						10 Okt 2013 | 7 Comments 
					</div>
				</div>
		</div>
	</div>
</li>

<!-- LATEST NEWS ITEM -->
<li class="four columns">
	<div class="hover-item">
		<div class="view view-first">
			<img src="images/content/post-2-2.jpg" alt="Ipsum" >
			<div class="mask"></div>	
			<div class="abs">
				<a href="images/content/post-2-2.jpg" class="lightbox zoom info"></a><a href="blog-single.html" class="link info"></a>
			</div>	
		</div>
		<div class="lp-item-caption-container">
					<a class="a-invert" href="blog-single.html" ><span class="bold">Sed</span> Lectus</a>
				<div class="lp-item-container-border clearfix">
					<div class="lp-item-info-container">
						10 Okt 2013 | 7 Comments 
					</div>
				</div>
		</div>
	</div>
</li>

<!-- LATEST NEWS ITEM -->
<li class="four columns">
	<div class="hover-item">
		<div class="view view-first">
			<img src="images/content/post-2-3.jpg" alt="Ipsum" >
			<div class="mask"></div>	
			<div class="abs">
				<a href="images/content/post-2-3.jpg" class="lightbox zoom info"></a><a href="blog-single.html" class="link info"></a>
			</div>	
		</div>
		<div class="lp-item-caption-container">
					<a class="a-invert" href="blog-single.html" ><span class="bold">Lorem</span> Ipsum</a>
				<div class="lp-item-container-border clearfix">
					<div class="lp-item-info-container">
						10 Okt 2013 | 7 Comments 
					</div>
				</div>
		</div>
	</div>	
</li>

<!-- LATEST NEWS ITEM -->
<li class="four columns">
	<div class="hover-item">
		<div class="view view-first">
			<img src="images/content/post-2-4.jpg" alt="Ipsum" >
			<div class="mask"></div>	
			<div class="abs">
				<a href="images/content/post-2-4.jpg" class="lightbox zoom info"></a><a href="blog-single.html" class="link info"></a>
			</div>	
		</div>
		<div class="lp-item-caption-container">
					<a class="a-invert" href="blog-single.html" ><span class="bold">Lorem</span> Ipsum</a>
				<div class="lp-item-container-border clearfix">
					<div class="lp-item-info-container">
						10 Okt 2013 | 7 Comments 
					</div>
				</div>
		</div>
	</div>
</li>

<!-- LATEST NEWS ITEM -->
<li class="four columns">
	<div class="hover-item">
		<div class="view view-first">
			<img src="images/content/post-2-5.jpg" alt="Ipsum" >
			<div class="mask"></div>	
			<div class="abs">
				<a href="images/content/post-2-5.jpg" class="lightbox zoom info"></a><a href="blog-single.html" class="link info"></a>
			</div>	
		</div>
		<div class="lp-item-caption-container">
					<a class="a-invert" href="blog-single.html" ><span class="bold">Lorem</span> Ipsum</a>
				<div class="lp-item-container-border clearfix">
					<div class="lp-item-info-container">
						10 Okt 2013 | 7 Comments 
					</div>
				</div>
		</div>
	</div>
</li>

</ul>
</div>
<!-- jCAROUSEL End -->
</div>	
<!-- OUR NEWS End -->



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
</div><!-- End wrap -->
<!-- JS begin -->

<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<!-- Flex Slider  -->
<script src="js/jquery.flexslider.js"></script> 
<script src="js/flex-slider.js"></script> 
<!-- end Flex Slider -->
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