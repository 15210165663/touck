<!DOCTYPE html>
<html>
{{print_r($errors)}}
<head>
<title>登录表单</title>
<base href="{{URL::asset('Login').'/'}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
	<h1>个 人 登 录</h1>
	<div class="container w3layouts agileits" width='500px'>
		<div class="login w3layouts agileits">
			<form method="POST" action="{{url('auth/login')}}">
			{!!csrf_field()!!}
				<input type="text" name="name" placeholder="用户名" required="">
				<input type="password" name="password" placeholder="密码" required="">
		
			<ul class="tick w3layouts agileits">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>记住我</label>
				</li>
			</ul>

			<div class="send-button w3layouts agileits">
			
					<input type="submit" value="登 录">
				</form>
			</div>
			<a href="{{url('/auth/register')}}">免费注册</a>
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