<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<base href="{{URL::asset('Admin').'/'}}" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="IE=9; IE=8; IE=7; IE=EDGE" http-equiv="X-UA-Compatible">
<title>企业列表</title>
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
  <a href="#" class="pull-left">
    <img src="images/logo.png" alt="Gold International">
  </a>
  <div id="cssmenu" class="pull-left" style=""><div id="menu-button">Menu</div>
      <ul>
      <li class="" style="background:#1ab394">
          <a href="{{url('admin/show')}}">
            <i class="fa fa-sign-out"></i>
            首页
          </a>
        </li>
     <li class="has-sub"  style="background:#1ab394"><span class="submenu-button"></span>
          <a href="javascript:void(0);">
            <i class="fa fa-home"></i>
            权限管理
          </a>
          <ul>
             <li><a href="{{url('admin/limits')}}">权限列表</a></li>
             <li><a href="{{url('admin/limitsadd')}}">权限添加</a></li>
             <li><a href="{{url('admin/adminshow')}}">管理员列表</a></li>
          </ul>
       </li>
        <li class="has-sub" style="background:#1ab394"><span class="submenu-button"></span>
          <a href="javascript:void(0);"><i class="fa fa-signal"></i>用户管理</a>
          <ul>
             <li><a href="{{url('admin/user')}}">用户列表</a></li>
             <li><a href="{{url('admin/useradd')}}">用户添加</a></li>
          </ul>
       </li>
        <li class="active has-sub" style="background:#1ab394"><span class="submenu-button"></span>
          <a href="javascript:void(0);"><i class="fa fa-users"></i>企业管理</a>
          <ul>
             <li><a href="{{url('admin/firm')}}">企业列表</a></li>
             <li><a href="{{url('admin/firmadd')}}">企业添加</a></li>
          </ul>
        </li>
        <li class="has-sub" style="background:#1ab394"><span class="submenu-button"></span>
          <a href="javascript:void(0);"><i class="fa fa-sitemap"></i>股票管理</a>
          <ul>
             <li><a href="{{url('admin/touck')}}">股票列表</a></li>
             <li><a href="{{url('admin/touckadd')}}">股票添加</a></li>
          </ul>
        </li>
        <li class="has-sub" style="background:#1ab394"><span class="submenu-button"></span>
          <a href="javascript:void(0);"><i class="fa fa-bar-chart-o"></i>分类管理</a>
          <ul>
            <li><a href="{{url('admin/type')}}">分类列表</a></li>
            <li><a href="{{url('admin/typeadd')}}">分类添加</a></li>
          </ul>
        </li>
        <li class="has-sub" style="background:#1ab394"><span class="submenu-button"></span>
          <a href="javascript:void(0);"><i class="fa fa-comments"></i>轮播图管理</a>
          <ul>
             <li><a href="{{url('admin/wheel')}}">轮播图列表</a></li>
             <li><a href="{{url('admin/wheeladd')}}">轮播图添加</a></li>
          </ul>
        </li>
        <li class="has-sub" style="background:#1ab394"><span class="submenu-button"></span>
          <a href="javascript:void(0);"><i class="fa fa-fire"></i>日志管理</a>
          <ul>
             <li><a href="{{url('admin/log')}}">日志列表</a></li>
          </ul>
        </li>
      </ul>
    </div> 
  <div class="pull-right">
    <ul id="mini-nav" class="clearfix">
      <li class="list-box user-profile">
        <a id="drop7" href="#" role="button" class="dropdown-toggle user-avtar" data-toggle="dropdown">
          <img src="images/user5.png" alt="zm9999">
        </a>
        <ul class="dropdown-menu server-activity">
          <li>
            <p class="center-align-text"><b>
            <?php if(session('adminname')==''){?>
              您好,请登录
            <?php }else{?>
                欢迎您, <?php echo session('adminname')?>
            <?php }?>
            </b></p>
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
                <a href="{{url('/admin/loginout')}}">安全退出</a>
              </button>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</header>


<div class="dashboard-wrapper">
  <form action="" class="form-inline" role="role">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">EP购买记录</h3>
      </div>
      <div class="panel-body body-pt0">
          <label class="col-sm-2 control-label">搜索：</label>
          <div class="col-sm-10 search-box">
            企业名称：<input type="text" name="company_name" value="{{isset($_GET['company_name'])?$_GET['company_name']:''}}" class="form-control" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            企业负责人：<input type="text" name="principal" value="{{isset($_GET['principal'])?$_GET['principal']:''}}" class="form-control" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <button type="submit" class="btn btn-info">搜索</button>
          </div>
      </div>
    </div>
  </form>
  <div class="table-responsive">
    <table class="table table-striped table-bordered td-center" id="data-lists">
      <thead>
        <tr>
          <th>企业编号</th>
          <th>企业用户名</th>
          <th>企业名称</th>
          <th>企业负责人</th>
          <th>负责人联系方式</th>
          <th>企业邮箱</th>
          <th>企业地址</th>
          <th>企业状态</th>
          <th width="120px">操作</th>
        </tr>
      </thead>
      <tbody>
      @foreach($data as $v)
        <tr>
          <td class="firm_id">{{ $v['firm_id'] }}</td>
          <td>{{ $v['firmname'] }}</td>
          <td>{{ $v['company_name'] }}</td>
          <td>{{ $v['principal'] }}</td>
          <td>{{ $v['principal_phone'] }}</td>
          <td>{{ $v['email'] }}</td>
          <td>{{ $v['address'] }}</td>
          <td>
            <select name="static" class="status">
              <option value="0"  @if($v['static']==0) selected @endif>待审核</option>
              <option value="1"  @if($v['static']==1) selected @endif>审核通过</option>
              <option value="2"  @if($v['static']==2) selected @endif>审核未通过</option>
            </select>
            <span class="yes-no"></span>
          </td>
          <th><a href="{{url('admin/firm/firm_del')}}/{{$v['firm_id']}}?page={{$current_page}}">删除</a></th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    <div class="data-page">
        <ul class="pagination no-margin pull-right">
          @if(empty($prev_page_url))
            <li class="disabled"><span>上一页</span></li> 
          @else
            <li ><a href="{{$prev_page_url}}" rel="prev">上一页</a></li> 
          @endif
          @for($i=1;$i<=$last_page;$i++)
              @if($current_page == $i)
                <li class="active"><span>{{$i}}</span></li>
              @else
                <li><a href="{{url('admin/firm?page=')}}{{$i}}{{isset($_GET['company_name'])? '&company_name='.$_GET['company_name']:''}}{{isset($_GET['principal'])? '&principal='.$_GET['principal']:''}}">{{$i}}</a></li>
              @endif
          @endfor
          @if(empty($next_page_url))
            <li class="disabled"><span>下一页</span></li> 
          @else
            <li><a href="{{$next_page_url}}" rel="next">下一页</a></li>
          @endif
        </ul>
        <div class="btn-group-sm"><button class="btn btn-default">第{{$current_page}}页/共{{$last_page}}页</button></div>
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
<script type="text/javascript">
  $(function(){
    $('.status').change(function(){
        var status = $(this).val();
        var firm_id = $(this).parents('tr').find('.firm_id').html();
        var yes_no = $(this).parents('tr').find('.yes-no');
        $.ajax({
          type:'post',
          url:"{{url('admin/firm/firm_status')}}",
          data:{status:status,firm_id:firm_id},
          success:function(data)
          {
              if(data==1)
              {
                  yes_no.html('<img src="images/yes.jpg" width="10px" />');
              }
              else
              {
                  yes_no.html('<img src="images/no.jpg" width="10px" />');
              }
          }
          })
    });
  })
</script>
