<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<base href="{{URL::asset('Admin').'/'}}" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="IE=9; IE=8; IE=7; IE=EDGE" http-equiv="X-UA-Compatible">
<title>用户管理</title>
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
<!-- jQuery UI JS -->
<script src="js/jquery-ui-v1.10.3.js"></script>
<!-- Custom JS -->
<script src="js/menu.js"></script>
<script type="text/javascript" src="js/jquery.layer.js"></script>
<link rel="stylesheet" href="js/skin/layer.css">
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<link rel="stylesheet" href="css/datetimepicker.css">
<script src="js/beau.js"></script>
</head>

<body>
<header>
  <a href="#" class="logo">
    <img src="images/logo.png" alt="Gold International">
  </a>
  <div class="pull-right">
    <ul id="mini-nav" class="clearfix">
      <li class="list-box">
        <a href="#">
          <i class="fa fa-user text-warning"></i> <span class="text-white">zm9999</span>
        </a>
      </li>
      <li class="list-box hidden-xs">
        <a href="#" title="取现积分">
          <i class="fa">EP</i> <span class="badge facebook-bg">0.00</span>
        </a>
      </li>
      <li class="list-box hidden-xs">
        <a href="#" title="理财积分">
          <i class="fa">GP</i> <span class="badge warning-bg">0.00</span>
        </a>
      </li>
      <li class="list-box hidden-xs">
        <a href="#" title="购股排队">
          <i class="fa">购股排队</i> <span class="badge warning-bg">0.00 GP</span>
        </a>
      </li>
      <li class="list-box hidden-xs">
        <a href="#" title="注册积分">
          <i class="fa">MP</i> <span class="badge success-bg">0.00</span>
        </a>
      </li>
      <li class="list-box hidden-xs">
        <a href="#" title="股票">
          <i class="fa">股票</i> <span class="badge danger-bg">0.00</span>
        </a>
      </li>
      <li class="list-box">
        <a href="#">
          <i class="fa fa-envelope"></i>
        </a>
        <span class="info-label success-bg">0</span>
      </li>
      <li class="list-box user-profile">
        <a id="drop7" href="#" role="button" class="dropdown-toggle user-avtar" data-toggle="dropdown">
          <img src="images/user5.png" alt="zm9999">
        </a>
        <ul class="dropdown-menu server-activity">
          <li>
            <p class="center-align-text">欢迎您, <b>zm9999</b> !</p>
          </li>
          <li>
            <p><i class="fa fa-rmb text-info"></i><span>我的钱包</span></p>
          </li>
          <li>
            <p><i class="fa fa-cog text-info"></i><span>资料修改</span></p>
          </li>
          <li>
            <p><i class="fa fa-lock text-info"></i><span>修改密码</span></p>
          </li>
          <li>
            <div class="demo-btn-group clearfix">
              <button class="btn btn-danger">
                安全退出
              </button>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</header>

<!-- Main Container start -->
<div class="dashboard-container">

  <div class="container">
    <!-- Top Nav Start -->
    <div id="cssmenu"><div id="menu-button">Menu</div>
      <ul>
      <li class="">
          <a href="/admin/show">
            <i class="fa fa-sign-out"></i>
            首页
          </a>
        </li>
     <li class="has-sub"><span class="submenu-button"></span>
          <a href="javascript:void(0);">
            <i class="fa fa-home"></i>
            权限管理
          </a>
          <ul>
             <li><a href="/admin/limits">权限列表</a></li>
             <li><a href="/admin/limitsadd">权限添加</a></li>
          </ul>
       </li>
        <li class="has-sub"><span class="submenu-button"></span>
          <a href="javascript:void(0);"><i class="fa fa-signal"></i>用户管理</a>
          <ul>
             <li><a href="/admin/user">用户列表</a></li>
             <li><a href="/admin/useradd">用户添加</a></li>
          </ul>
       </li>
        <li class="has-sub"><span class="submenu-button"></span>
          <a href="javascript:void(0);"><i class="fa fa-users"></i>企业管理</a>
          <ul>
             <li><a href="/admin/firm">企业列表</a></li>
             <li><a href="/admin/firmadd">企业添加</a></li>
          </ul>
        </li>
        <li class="has-sub"><span class="submenu-button"></span>
          <a href="javascript:void(0);"><i class="fa fa-sitemap"></i>股票管理</a>
          <ul>
             <li><a href="/admin/touck">股票列表</a></li>
             <li><a href="/admin/touckadd">股票添加</a></li>
          </ul>
        </li>
        <li class="has-sub"><span class="submenu-button"></span>
          <a href="javascript:void(0);"><i class="fa fa-bar-chart-o"></i>分类管理</a>
          <ul>
            <li><a href="/admin/type">分类列表</a></li>
            <li><a href="/admin/typeadd">分类添加</a></li>
          </ul>
        </li>
        <li class="has-sub"><span class="submenu-button"></span>
          <a href="javascript:void(0);"><i class="fa fa-comments"></i>轮播图管理</a>
          <ul>
             <li><a href="/admin/wheel">轮播图列表</a></li>
             <li><a href="/admin/wheeladd">轮播图添加</a></li>
          </ul>
        </li>
        <li class="active has-sub"><span class="submenu-button"></span>
          <a href="javascript:void(0);"><i class="fa fa-fire"></i>日志管理</a>
          <ul>
             <li><a href="/admin/log">日志列表</a></li>
          </ul>
        </li>
      </ul>
    </div>    <!-- Top Nav End -->
    <div class="sub-nav hidden-sm hidden-xs">
      <ul>
        <li><a href="https://vip.hjb100.net/" class="heading">EP交易</a></li>
        <li class="hidden-sm hidden-xs">
          <a href="https://vip.hjb100.net/" class="selected">交易大厅</a>
        </li>
        <li class="hidden-sm hidden-xs">
          <a href="https://vip.hjb100.net/index.php?r=pcm" class="">EP购买</a>
        </li>
        <li class="hidden-sm hidden-xs">
          <a href="https://vip.hjb100.net/index.php?r=gcm" class="">EP挂售</a>
        </li>
        <li class="hidden-sm hidden-xs">
          <a href="https://vip.hjb100.net/index.php?r=pmr" class="">购买记录</a>
        </li>
        <li class="hidden-sm hidden-xs">
          <a href="https://vip.hjb100.net/index.php?r=gmr" class="">挂售记录</a>
        </li>
     </ul>
      <div class="custom-search hidden-sm hidden-xs">
        <a href="https://vip.hjb100.net/">Home</a> &gt; <a>EP交易</a>
      </div>
    </div>
    <!-- Sub Nav End -->
<div class="dashboard-wrapper">
  <form action="/index.php?r=pmr" class="form-inline" method="post" role="role">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">EP购买记录</h3>
      </div>
      <div class="panel-body body-pt0">
          <label class="col-sm-2 control-label">选择日期：</label>
          <div class="col-sm-10 search-box">
            <span class="Zebra_DatePicker_Icon_Wrapper"><input type="text" id="StartDate" name="StartDate" class="form-control datetime" value="" readonly="readonly"><button type="button" class="Zebra_DatePicker_Icon Zebra_DatePicker_Icon_Inside">Pick a date</button></span>
            <b>至</b>
            <span class="Zebra_DatePicker_Icon_Wrapper"><input type="text" name="EndDate" id="EndDate" class="form-control datetime" value="" readonly="readonly"><button type="button" class="Zebra_DatePicker_Icon Zebra_DatePicker_Icon_Inside">Pick a date</button></span>
            <button type="submit" class="btn btn-info">搜索</button>
          </div>
      </div>
    </div>
  </form>
  <div class="table-responsive">
    <table class="table table-striped table-bordered td-center" id="data-lists">
      <thead>
        <tr>
          <th>用户ID</th>
          <th>用户名称</th>
          <th>用户余额</th>
          <th>邮箱</th>
          <th>手机号</th>
          <th width="120px">操作</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
    <div class="data-page">
  <ul class="pagination no-margin pull-right">
      <li><a class="disabled">首页</a></li>
        <li><a class="disabled">上一页</a></li>
    <li class="active"><a href="/index.php?r=pmr&amp;txpgs=1&amp;StartDate=&amp;EndDate=">1</a></li>
    <li><a class="disabled">下一页</a></li>
  <li><a class="disabled">尾页</a></li>
      </ul>
    <div class="btn-group-sm"><button class="btn btn-default">第1页/共1页</button></div>
</div>
  <script src="js/zebra.datepicker.min.js"></script>
  <script type="text/javascript">
    $('#StartDate').Zebra_DatePicker({ pair: $('#EndDate') });
    $('#EndDate').Zebra_DatePicker();
</script>
</div>
<footer>
  <p>© Gold International 2016</p>
</footer>
  </div>
</div></body></html>