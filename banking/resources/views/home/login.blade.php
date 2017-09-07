<!DOCTYPE html>
<html>
<head>
<title>登录表单</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{URL::asset('Login').'/'}}">
	<base href="{{URL::asset('Home').'/'}}">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
	<h1>登 录</h1>
	<div class="container w3layouts agileits">
		<div class="login w3layouts agileits">
			<!-- 成功提示框 -->
			@if(Session::has('hasSuccess'))
			<div class="alert alert-success alert-dismissible" role="alert">
				<font color="red">{{Session::get('hasSuccess')}}</font>
			</div>
			@endif
			<!-- 失败提示框 -->
			@if(Session::has('hasExists'))
			<div class="alert alert-danger alert-dismissible" role="alert">
				<font color="red"><strong>Error</strong> - {{Session::get('hasExists')}}</font>
			</div>
			@endif
			<form action="{{url('project/logins')}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<input type="text" Name="Username" placeholder="用户名" required="" value="{{ Session::get('name')}}">
				<input type="password" Name="Password" placeholder="密码" required="" value="{{ Session::get('pwd')}}">
				<ul class="tick w3layouts agileits">
					<li>
						<input type="checkbox" id="brand1" name="check" value="1">
						<label for="brand1"><span></span>记住密码</label>
					</li>
				</ul>
				<div class="send-button w3layouts agileits">
						<input type="submit" value="登 录">
				</div>
			</form>
			<a href="{{url('project/register')}}">免费注册</a>
			<div class="social-icons w3layouts agileits">
				<p>- 其他方式登录 -</p>
				<ul>
					<li class="qq"><a href="#">
					<span class="icons w3layouts agileits"></span>
					<span class="text w3layouts agileits">QQ</span></a></li>
					<li class="weixin w3ls"><a href="#">
					<span class="icons w3layouts"></span>
					<span class="text w3layouts agileits">微信</span></a></li>
					<li class="weibo aits"><a href="#">
					<span class="icons agileits"></span>
					<span class="text w3layouts agileits">微博</span></a></li>
					<div class="clear"> </div>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="footer w3layouts agileits">
		<p>Copyright &copy; More Templates</p>
	</div>
</body>
</html>