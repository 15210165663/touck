
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
				<a class="logo" rel="home" title="Home">
					<p style="font-size: 28px">欢迎</p>
				</a>
			</div>
		</div>

		<div class="header-menu-container right">
			<!-- TOP MENU -->
			<nav id="main-nav">
				<ul class="sf-menu clearfix">
					<li class="current"><a href="{{url('project/index')}}"><font color="red">首页</font></a></li>
					<!-- <li><a href="{{url('project/elements')}}"><font color="red">股票详情</font></a></li> -->
					<li><a href="{{url('project/portfolio')}}"><font color="red">股票列表</font></a></li>
					<li><a href="{{url('project/blog')}}"><font color="red">持股大师</font></a></li>
					<li ><a href="{{url('project/contact')}}"><font color="red">评论</font></a></li>
					@if(Auth::user())
			<li>
			<a  href="{{url('project/centre')}}" style="cursor:pointer;">欢迎<font color="red">{{Auth::user()->name }}</font>登录</a>
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
<!-- SLIDER -->
<div class="slider-1 clearfix">

<div class="flex-container">
<div class="flexslider loading">
<ul class="slides">
<li style="background:url(images/sliders/slider-1/22.jpg) no-repeat;background-position:50% 0">

<div class="container">
<div class="sixteen columns contain">

<h2 data-toptitle="36%">东方财富</h2>
<p data-bottomtext="39%">Eastmoney </p>
<div class="links" data-bottomlinks="30%">
<a class="button medium r-m-plus r-m-full" href="http://www.eastmoney.com/">进入官网</a>
</div>

<img src="images/sliders/slider-1/slider-item-1.png" class="item" alt="slide-item"  data-topimage="21%"/>

</div>
</div><!-- End Container -->

</li><!-- End item -->


<li style="background:url(images/sliders/slider-1/33.jpg) no-repeat; background-position:50% 0">

<div class="container">
<div class="sixteen columns contain">

<h2 data-toptitle="36%">天天基金网</h2>
<p data-bottomtext="39%">Daily fund network</p>
<div class="links" data-bottomlinks="30%">
<a class="button medium r-m-plus r-m-full" href="http://fund.eastmoney.com/">进入官网</a>
</div>

</div>
</div><!-- End Container -->

</li><!-- End item -->


<li style="background:url(images/sliders/slider-1/ba0208.jpg) no-repeat; background-position:50% 0">

<div class="container">
<div class="sixteen columns contain">

<h2 data-toptitle="36%">ALES MAECENAS</h2>
<p data-bottomtext="39%">CRAS JUSTO ODIO, DAPIBUS AC FACILISIS </p>
<div class="links" data-bottomlinks="30%">
<a class="button medium r-m-plus r-m-full" href="http://www.eastmoney.com/">READ MORE</a>
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


	<div class="container clearfix m-bot-35 min-m-top-75">
		<div class="sixteen columns m-bot-15">
		<!-- BLOCK -->
			<div class="block-4-col m-bot-20 ca-menu">
				<div class="block-0-content-container">
						<div class="block-text">
							炒股大师<br>
							<strong>Stock master</strong>
						</div>
						<div class="block-r-m-container">
							<a class="button medium r-m-plus r-m-full" href="{{url('project/blog')}}">进入页面</a>
						</div>
				</div>		
			</div>
		<!-- BLOCK -->
			<div class="block-4-col m-bot-20 ca-menu">
				<div class="block-1-content-container">
					<a class=" clearfix" href="">
						<div class="ca-icon">
							<img src="{{url::asset('Home/uploads/logo/gaoji.jpg')}}" alt="icon-comp">
						</div>
						<div class="ca-content">
							<h2 class="ca-main">高级大师</h2>
							<h3 class="ca-sub">Senior master</h3>
						</div>
					</a>	
				</div>		
			</div>
			
		<!-- BLOCK -->
			<div class="block-4-col m-bot-20 ca-menu">
				<div class="block-2-content-container">
					<a class=" clearfix" href="">
						<div class="ca-icon">
							<img src="{{url::asset('Home/uploads/logo/gaoji.jpg')}}" alt="icon-gears">
						</div>
						<div class="ca-content">
							<h2 class="ca-main">中级大师</h2>
							<h3 class="ca-sub">Intermediate master</h3>
						</div>
					</a>	
				</div>		
			</div>
		<!-- BLOCK -->
			<div class="block-4-col m-bot-20 ca-menu">
				<div class="block-3-content-container">
					<a class=" clearfix" href="">
						<div class="ca-icon">
							<img src="{{url::asset('Home/uploads/logo/gaoji.jpg')}}" alt="icon-plane">
						</div>
						<div class="ca-content">
							<h2 class="ca-main">初级大师</h2>
							<h3 class="ca-sub">Junior master</h3>
						</div>
					</a>	
				</div>		
			</div>
			

		</div>
	</div>
	
</div>	


<div class="dark-grey-bg">
	<div class="container  clearfix dark-grey-bg">
		<div class="sixteen columns">
			<div class="buy-container clearfix">
				<div class="buy-img-container">
					<a href="{{url('project/portfolio')}}"><img src="images/icon-buy.png" alt="buy"></a>
				</div>
				<div class="buy-text-container">
					<div class="buy-text">
						<h2>
							<span class="bold">股票显示</span> Stock display
						</h2>
						<span class="buy-now-slogan">Easy Customizable, Retina Ready, Cross-Browser Compatible, Unlimited Colors</span>
					</div>
				</div>
				<div class="button-buy-container">
					<a class="" href="{{url('project/portfolio')}}">股票首页</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- LATEST WORK -->
<div class="container clearfix m-top-120">
<!-- jCAROUSEL -->

<?php foreach($data as $k=>$v){?>
<div class="jcarousel latest-work-jc m-bot-30" >
<ul class="clearfix">
<!-- LATEST WORK ITEM -->
<?php foreach($v as $kk=>$vv){?>
<li class="four columns">
	<div class="hover-item">

			<a href="{{url('project/info')}}/{{$vv['stock_id']}}"><img src="{{url::asset('Home/uploads/logo').'/'.$vv['stock_imgurl']}}"></a>
			<div class="mask"></div>	
			<div class="abs">
				<a href="{{url('project/info')}}/{{$vv['stock_id']}}" class="lightbox zoom info"></a><a href="portfolio-single.html" class="link info"></a>
			</div>
		</div>
		<div class="lw-item-caption-container">
			<a class="a-invert" href="{{url('project/info')}}/{{$vv['stock_id']}}" >
				<div class="item-title-main-container clearfix">
					<div class="item-title-text-container">
						<span class="bold"><?php echo $vv['stock_name']?></span>
					</div>
				</div>
			</a>
			<div class="item-caption">web design</div>
	</div>
</li>
<?php }?>
<!-- LATEST WORK ITEM -->

</ul>
</div>
<?php }?>
<!-- jCAROUSEL End -->
</div>	
<!-- OUR PROJECTS End -->




<!-- FEATURES 2 -->



<!-- 大师 -->
<div class="dark-grey-bg">
	<div class="container  clearfix dark-grey-bg">
		<div class="sixteen columns">
			<div class="buy-container clearfix">
				<div class="buy-img-container">
					<img src="images/icon-buy.png" alt="buy">
				</div>
				<div class="buy-text-container">
					<div class="buy-text">
						<h2>
							<span class="bold">大师显示</span> Master display
						</h2>
						<span class="buy-now-slogan">Easy Customizable, Retina Ready, Cross-Browser Compatible, Unlimited Colors</span>
					</div>
				</div>
				<div class="button-buy-container">
					<a class="" href="{{url('project/blog')}}">大师首页</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container clearfix m-top-60">
		<div class="four columns carousel-intro m-bot-33">

						<div class="caption-container m-bot-20">
							<div class="title-block-text">
								STAY TUNED.<br>
								READ OUR<br>
								<strong>NEWS</strong>
							</div>
							
							<div class="carousel-navi jcarousel-scroll">
								<div class="jcarousel-prev"></div>
								<div class="jcarousel-next"></div>
							</div>
						</div>
			
		</div>

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
						<div class="lp-item-text-container">
							<p>Lorem ipsum dolor sit amet, consec at adipiscing elit. Fusce varius lobortis tur pis, eu eleifend odio pharetra sit amet. Aliquam...</p>

						</div>
						<div class="lp-r-m-container">
							<a href="blog-single.html" class="r-m-plus-small">READ MORE</a>
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
						<div class="lp-item-text-container">
							<p>Lorem ipsum dolor sit amet, consec at adipiscing elit. Fusce varius lobortis tur pis, eu eleifend odio pharetra sit amet. Aliquam...</p>

						</div>
						<div class="lp-r-m-container">
							<a href="blog-single.html" class="r-m-plus-small">READ MORE</a>
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
						<div class="lp-item-text-container">
							<p>Lorem ipsum dolor sit amet, consec at adipiscing elit. Fusce varius lobortis tur pis, eu eleifend odio pharetra sit amet. Aliquam...</p>

						</div>
						<div class="lp-r-m-container">
							<a href="blog-single.html" class="r-m-plus-small">READ MORE</a>
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
						<div class="lp-item-text-container">
							<p>Lorem ipsum dolor sit amet, consec at adipiscing elit. Fusce varius lobortis tur pis, eu eleifend odio pharetra sit amet. Aliquam...</p>

						</div>
						<div class="lp-r-m-container">
							<a href="blog-single.html" class="r-m-plus-small">READ MORE</a>
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
						<div class="lp-item-text-container">
							<p>Lorem ipsum dolor sit amet, consec at adipiscing elit. Fusce varius lobortis tur pis, eu eleifend odio pharetra sit amet. Aliquam...</p>

						</div>
						<div class="lp-r-m-container">
							<a href="blog-single.html" class="r-m-plus-small">READ MORE</a>
						</div>	
				</li>

			</ul>
		</div>
		<!-- jCAROUSEL End -->
	</div>



<!-- 底部 -->
<div class="light-grey-bg m-top-30">
	<div class="container clearfix pad-t-b-30">
		
			<div class=" clearfix">	
				<div class="eight columns">
					<div class="features-2-container-img">
						<img src="images/features-icon.png" alt="features">
					</div>
				</div>
				<div class="four columns features-demo">
					<div class="features-2-text">
						FULLY<br>
						<strong>RESPONSIVE</strong>
					</div>			
				</div>
				<div class="four columns columns features-demo">
					<ul class="features-check-list check-icon">
						<li >Fully Responsive</li>
						<li >Retina Ready</li>
						<li >SEO Optimized</li>
						<li >Easy to Customize</li>
					</ul>
				</div>	
			</div>	
		
	</div>
</div>

<!-- NEWS LETTER -->
<div class="dark-grey-bg">
<div class="container m-bot-20 clearfix">
<div class="sixteen columns">
<div class="newsletter-container clearfix">

<div class="nl-text-container clearfix">

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