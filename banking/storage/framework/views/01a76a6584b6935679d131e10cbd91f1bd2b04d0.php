<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<base href="<?php echo e(URL::asset('Admin').'/'); ?>" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="IE=9; IE=8; IE=7; IE=EDGE" http-equiv="X-UA-Compatible">
<title>后台首页</title>
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
      <li class="active">
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
        <li class="has-sub"><span class="submenu-button"></span>
          <a href="javascript:void(0);"><i class="fa fa-fire"></i>日志管理</a>
          <ul>
             <li><a href="/admin/log">日志列表</a></li>
          </ul>
        </li>
      </ul>
    </div>    <!-- Top Nav End -->
    <div class="sub-nav hidden-sm hidden-xs">
      <ul>
        <li><a href="#" class="heading">EP交易</a></li>
        <li class="hidden-sm hidden-xs">
          <a href="#" class="selected">交易大厅</a>
        </li>
        <li class="hidden-sm hidden-xs">
          <a href="#" class="">EP购买</a>
        </li>
        <li class="hidden-sm hidden-xs">
          <a href="#" class="">EP挂售</a>
        </li>
        <li class="hidden-sm hidden-xs">
          <a href="#" class="">购买记录</a>
        </li>
        <li class="hidden-sm hidden-xs">
          <a href="#" class="">挂售记录</a>
        </li>
     </ul>
      <div class="custom-search hidden-sm hidden-xs">
        <a href="#">Home</a> &gt; <a>EP交易</a>
      </div>
    </div>
    <!-- Sub Nav End -->
<div class="dashboard-wrapper">
  <div class="row">
    <div class="col-sm-12" id="pd_panel">
      <div class="metro-nav">
        <div class="metro-nav-block nav-block-green"> <a href="#" title="EP购买" onclick="ShowAddForm(0)"> <i class="fa fa-shopping-cart" title=""></i>
          <div class="info">我要购买EP</div>
          <div class="brand">EP购买</div>
        </a> </div>
                <div class="metro-nav-block nav-block-blue"> <a href="#" title="EP挂售" onclick="ShowAddForm(1)"> <i class="fa fa-usd"></i>
          <div class="info">我要出售EP</div>
          <div class="brand">EP挂售</div>
        </a> </div>
        <div class="metro-nav-block nav-block-yellow double"> <a href="#"> <i class="fa fa-btc"></i>
          <div class="info">EP：0.00 GP：0.00</div>
          <div class="brand">我的资产</div>
        </a> </div>
      </div>
   </div>
  <form class="form-horizontal" method="post">
  <div class="col-sm-12">
    <div id="pd_add_form" class="panel panel-default" style="display: none;">
      <div class="panel-heading">
        <h3 class="panel-title">购买EP</h3>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label class="col-sm-2 control-label" for="PDAmount">购买数额</label>
          <div class="col-sm-5">
            <input class="form-control" type="text" value="">
          </div>
          <div class="col-sm-5 col-msg"><span class="field-validation-valid"></span></div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="PDPayPassword">安全密码</label>
          <div class="col-sm-5">
            <input class="form-control" type="password">
          </div>
          <div class="col-sm-5 col-msg"><span class="field-validation-valid"></span></div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-info" id="buy_submit">确定购买</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </form>
  <form class="form-horizontal">
    <div class="col-sm-12">
    <div id="gd_add_form" class="panel panel-default" style="display: none;">
      <div class="panel-heading">
        <h3 class="panel-title">挂售EP</h3>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label class="col-sm-2 control-label" for="GDAmount">挂售数额：</label>
          <div class="col-sm-5">
            <input class="form-control" type="text" value="">
          </div>
          <div class="col-sm-5 col-msg"><span class="field-validation-valid"></span></div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">收款方式：</label>
          <div class="col-sm-6"><label><input type="checkbox" value="1" checked="checked">银行汇款</label> <label><input type="checkbox" value="2">支付宝</label> <label><input type="checkbox" name="pay_method[]" value="3">微信</label> <label><input type="checkbox" value="4">财付通</label></div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="GDPayPassword">安全密码：</label>
          <div class="col-sm-5">
            <input class="form-control" type="password">
          </div>
          <div class="col-sm-5 col-msg"><span class="field-validation-valid"></span></div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-info" id="sell_submit">确定挂售</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </form>
    <div class="col-sm-12">
      <div class="panel-group" id="accordion">
                <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#">
              關于升級星級的通知              </a><small>
                2016-07-04              </small> </h4>
          </div>
          <div id="col197" class="panel-collapse collapse">
            <div class="panel-body">
                   為慶祝亞太地區澳門特區運营中心成立，平台特開通了升星級的程序，升級補升級部分MP即可升級，升級後，開戶積分比例、平衡積分比例、培育積分比例按升級後計算，升級單不配股票，升級業績納入計算平衡積分及培育積分。祝大家業績蒸蒸日上！家庭幸福！<br>
家人們，加油，平臺越來越好，越來越規範，模式不斷創新，對我們家人越來越收益！太棒了，夥伴們，加油！<br>
     <br>
                2016-7-4<br>
       加密黃金國際幣資産投資管理公司            </div>
          </div>
        </div>
                <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#col196">
              關于EP交易的通知              </a><small>
                2016-07-02              </small> </h4>
          </div>
          <div id="col196" class="panel-collapse collapse">
            <div class="panel-body">
                 為了市場人員EP交易規範，平台設置了資料完善後才可以進行交易的程序，開通購買EP申請功能，只要有需要的家人都可以申請開通，請嚴格按照公司規定在市場按6.5收購EP，賣出按7的比率原則交易！                     <br>
<br>
<br>
<br>
法務部（宣）           <br>
2016年7月02日加密黃金國際幣資産投資管理公司            </div>
          </div>
        </div>
                <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#col195">
              關於星級升級通知              </a><small>
                2016-06-28              </small> </h4>
          </div>
          <div id="col195" class="panel-collapse collapse">
            <div class="panel-body">
               尊敬的EGC黃金家族的家人們，大家好！由於部分家人對我們EGC在中國市場試運營前期的促銷活動星級升級方案不是很清楚，今日在此作進一步通知：促銷活動的星級升級方案是為了行銷市場的人群而制定的，不管您是四星升級為五星或三星升級為四星等任何級別升級的，均是以行銷市場傭金按升級級別計算收益，帳戶GP總收益和帳戶的GP指導銷售股數封頂量都按實際開戶金額級別計算。（如：您開戶級別是三星1000美元，在促銷活動期間升級為四星，您的帳戶總積分收益是按三星的11倍計算，GP指導銷售股數封頂量是三星級別的12000股；行銷市場的傭金是按四星的計算，則開戶積分10％、平衡積分8％、平衡積分日封頂4000美元、培育積分5代的5％）。&nbsp;&nbsp;&nbsp; 望大家相互通知和轉告，為了避免大家帳戶的股票被封頂，根據自己開戶金額的級別進行核對自己帳戶的GP指導銷售股數封頂量結合平臺的指導銷售每漲0.01掛售8％進行掛賣帳戶可掛售股票，任何價位掛售收益都是一樣的，因為平臺採用的是全世界獨一無二的縱向模式，大家快速掛賣股票獲得縱向模式帶來的財富樂趣！ 2016年6月28日EGC黃金家族平臺            </div>
          </div>
        </div>
                <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#col193">
              EGC第四次拆分公告              </a><small>
                2016-06-21              </small> </h4>
          </div>
          <div id="col193" class="panel-collapse collapse">
            <div class="panel-body">
              親愛的EGC黃金家族家人們，大家好！<br>
 非常高興即將迎來了我們EGC第四次拆分，現在進入精算師計算階段，暫停股票交易，拆分時間為2016年6月22日00:00。為了保證大家能夠最大收益和長期收益，請家人們仔細核對自己帳戶的股票數值。我們EGC平臺保證大家能夠長期的最大收益。 <br>
 為了我們EGC遊戲理財平臺不斷的壯大，大家再接再厲，加油！<br>
2016年6月21日<br>
EGC黃金國际（宣）<br>
<br>
            </div>
          </div>
        </div>
                <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#col192">
              EGC第3次拆分喜訊               </a><small>
                2016-05-21              </small> </h4>
          </div>
          <div id="col192" class="panel-collapse collapse">
            <div class="panel-body">
              親愛的EGC黃金家族家人們，大家好！<br>
非常高興迎來了我們EGC第三次拆分，經過精算專家團隊核算，本次拆分為2.12倍，拆分時間為2016年5月22日00:00。為了保證大家能夠最大收益和長期收益，請家人們仔細核對自己帳戶的封頂值，不要讓帳戶滿倉，儘快掛售帳戶GP，同時每漲0.01指導銷售8﹪。我們EGC平臺保證大家能夠長期的最大收益，請家人們按平臺的規定和指導銷售及時掛賣GP，一來可以讓大家快速變現，二來可以讓還在排隊購買GP的家人们早日進場享受收益！<br>
&nbsp;<br>
再次恭喜家人們，為了我們EGC遊戲理財平臺不斷的壯大，大家再接再厲，加油！<br>
&nbsp;<br>
&nbsp;<br>
2016年5月21日<br>
EGC黃金家族平臺<br>
            </div>
          </div>
        </div>
          </div>
  </div>
  </div>
</div>
<footer>
  <p>© Gold International 2016</p>
</footer>
  </div>
</div></body></html>