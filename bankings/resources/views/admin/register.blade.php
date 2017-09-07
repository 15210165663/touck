<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<base href="{{URL::asset('Admin').'/'}}" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="robots" content="noindex,nofollow">
<meta name="robots" content="noarchive"> <!-- 屏蔽-->

<title>后台登录</title>
<meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="IE=9; IE=EDGE" http-equiv="X-UA-Compatible">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="css/new.css">  
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">    
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.scrollUp.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<script type="text/javascript" src="js/beau.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</head>

<body>
<div class="dashboard-container">
  <div class="col-lg-4 col-md-4 col-md-offset-4">
    <div class="validation-summary-errors alert alert-block alert-danger" style="display: none;"></div>
    <div class="sign-in-container">
      <form action="{{URL('/admin/registerin')}}" method="post" class="login-wrapper">
        <div class="header">
          <div class="row">
            <div class="col-md-12 col-lg-12">
              <h3>后台注册<img src="images/logo1.png" alt="Gold International" class="pull-right"></h3>
              <p>Fill out the form below to register.</p>
            </div>
          </div>
        </div>
        <div class="content">
          <div class="form-group">
            <label for="username">会员编号</label>
            <span class="field-validation-valid"></span>
            <input class="form-control" maxlength="20" name="adminname" placeholder="用户名" type="text">
          </div>
          <div class="form-group">
            <label for="username">登录密码</label>
            <span class="field-validation-valid"></span>
            <input class="form-control" maxlength="20" name="pass" placeholder="密码" type="password">
          </div>
          <div class="form-group">
            <label for="username">确认密码</label>
            <span class="field-validation-valid"></span>
            <input class="form-control" maxlength="20" name="word" placeholder="密码" type="password">
          </div>
          <div class="actions">
            <input class="btn btn-success" name="Login" type="submit" value="注册">
            <a href="{{URL('/admin/login')}}" class="link">登录</a>
            <div class="clearfix"></div>
          </div>
        </div>
      </form>
      <div class="center-align-text" style="margin-top:20px;">© 2015-2016
        Gold International        all rights reserved.</div>
    </div>
  </div>
</div>
</body>
</html>