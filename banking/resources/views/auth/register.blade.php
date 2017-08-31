<!DOCTYPE html>
<html>

<head>
<base href="{{URL::asset('Login').'/'}}">
	<title>注册表单</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
	<h1>个 人 注 册</h1>
	<div class="container w3layouts agileits">
			<form action="{{url('/auth/register')}}" method="post">
			{!!csrf_field()!!}
				<input type="text" name="name" placeholder="用户名" required="">
				<input type="text" name="email" placeholder="邮箱" required="">
				<input type="password" name="password" placeholder="密码" required="">
				<input type="password" name="password_confirmation" placeholder="确认密码" required="">
			<div class="send-button w3layouts agileits">
					<input type="submit" value="免费注册">
			</div>
			</form>
			<div class="clear"></div>
	<div class="clear"></div>
	</div>
	<div class="footer w3layouts agileits">
		<p>Copyright &copy; More Templates</p>
	</div>
</body>
</html>