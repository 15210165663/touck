<!DOCTYPE html>
<!-- saved from url=(0026)http://q.10jqka.com.cn/usa -->
<html lang="en">
<base href="{{URL::asset('Home/index').'/'}}">
<head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
    
    <title>同花顺财经网</title>
    <meta name="keywords" content="金融,金融网">
    <meta name="description" content="核新同花顺网络信息股份有限公司。">
    <link rel="stylesheet" href="./cd/cb">
    <link rel="stylesheet" href="./cd/cb(1)">  
    <link rel="stylesheet" type="text/css" href="./css/subMenu.min.css"></head>
<body class="reversedColor">
<div class="header fixed">
    <div class="w1200">
        <div class="hdlogo">
            <a target="_blank" class="site-logo" href="http://www.10jqka.com.cn/"> <img src="./img/logo-ths.jpg" title="同花顺" alt="同花顺"></a>
        </div>

        <div class="nav">
            <a href="{{url('project/show')}}" data-type="hssc">首页</a>
            <a href="{{url('project/meigu')}}">美国市场</a>
            <a href="http://q.10jqka.com.cn/global/">财务分析</a>
            <a href="http://q.10jqka.com.cn/gn/" data-type="bk">资金流向</a>
            <a href="{{url('project/master')}}" class="cur">炒股大师</a>
        </div>
        @if($name != '')
            <div class="login-box he">
               <a href="{{url('project/personal')}}"  style="background-position: right 36px;">{{$name}}</a> 
               | 
               <a href="{{url('project/del_login')}}">退出</a>
            </div>
        @else
            <div class="login-box he">
                <a href="{{url('project/login')}}">登录</a>
            </div>
        @endif

    </div>

</div>
    <div class="content">
        <br>
        <div class="qwe" style="width:80%;height: 500px;border: 0px solid red;margin-left: 10% ">
            <div style="float: left;width:20%;height: 280px;border: 0px solid red;">
                <img src="<?php echo $data[0]['prove_url']?>" alt="" style="float: left;width:100%;height: 250px;border: 0px solid red;">
                <div style="float: left;width:100%;height: 28px;border: 0px solid red;text-align: center;">
                    <span>点赞:<?php echo $data[0]['master_zan']?>个</span>
                <?php if($list!=''){?>
                    <? if(in_array($data[0]['master_id'],$list)){?>
                        <span style="color:red;cursor: pointer;">已点赞</span>
                    <? }else{?>
                    <span class="dzan" style="color:red;cursor: pointer;" masterid="{{$data[0]['master_id']}}">点赞</span>
                    <? }?>
                <?php }else{?>
                    <span class="dzan" style="color:red;cursor: pointer;" masterid="{{$data[0]['master_id']}}">点赞</span>
                <?php }?>
                    &nbsp;&nbsp;
                
                    <span>关注:<?php echo $data[0]['master_guan']?>人</span>&nbsp;
                <?php if($show!=''){?>
                    <? if(in_array($data[0]['master_id'],$show)){?>
                        <span style="color:red;cursor: pointer;" class="jguan" master="{{$data[0]['master_id']}}">已关注</span>
                    <? }else{?>
                    <sapn class="jguan" style="color:red;cursor: pointer;" master="{{$data[0]['master_id']}}">加关注</sapn>
                    <? }?>
                <?php }else{?>
                    <sapn class="jguan" style="color:red;cursor: pointer;" master="{{$data[0]['master_id']}}">加关注</sapn>
                <?php }?>
                </div>
            </div>
            <div style="float:right;width:70%;height: 300px;border: 0px solid red;margin-top:2%;margin-right:6%">
                <ul style="font-size: 22px">
                    <li>昵称&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<span style="color: #888888"><?php echo $data[0]['master_name']?></span></li>
                    <li>级别&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<span style="color: #888888"><?php if($data[0]['master_jib']==0){?>初级炒股大师<?php }else if($data[0]['master_jib']==1){?>中级炒股大师<?php }else{?>高级炒股大师<?php }?></span></li>
                    <li>工作年限&nbsp;:&nbsp;<span style="color: #888888"><?php echo $data[0]['master_suffer']?>年</span></li>
                    <li>Email&nbsp;:&nbsp;<span style="color: #888888"><?php echo $data[0]['master_email']?></span></li>
                    <li>简介&nbsp;:&nbsp;<span style="font-size: 16px;color:#888888"><?php echo $data[0]['master_text']?></span></li>
                </ul>
            </div>
        </div>          
        <br> 
    </div>  
</div>
<!-- 频道资讯 开始-->

  <div class="bottom-map-warp">
        <div class="bottom-map clearfix">
            <dl class="item">
                <dt class="icon-pdzx">频道资讯</dt>
                <dd><a href="http://news.10jqka.com.cn/yaowen/" target="_blank">财经要闻</a></dd>
                <dd><a href="http://news.10jqka.com.cn/cjzx_list/" target="_blank">宏观经济</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/bidu/" target="_blank">股票必读</a></dd>
                <dd><a href="http://master.10jqka.com.cn/" target="_blank">名家100</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/company.shtml" target="_blank">公司频道</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/market.shtml" target="_blank">市场频道</a></dd>
                <dd><a href="http://futures.10jqka.com.cn/" target="_blank">股指期货</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/newstock/" target="_blank">新股频道</a></dd>
                <dd><a href="http://news.10jqka.com.cn/guojicj_list/" target="_blank">国际财经</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/chuangye/" target="_blank">创业板</a></dd>
                <dd><a href="http://xinsanban.10jqka.com.cn/" target="_blank">新三板</a></dd>
                <dd><a href="http://news.10jqka.com.cn/bigdata.shtml" target="_blank">图解财经</a></dd>                
            </dl>
            <dl class="item">
                <dt class="icon-tzrd">投资热点</dt>
                <dd><a href="http://stock.10jqka.com.cn/bktt_list/" target="_blank">四大报刊</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/fupan/" target="_blank">每日复盘</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/fincalendar.shtml" target="_blank">投资日历</a></dd>
                <dd><a href="http://data.10jqka.com.cn/financial/yjyg/" target="_blank">财报大全</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/zaopan/" target="_blank">早盘必读</a></dd>
                <dd><a href="http://news.10jqka.com.cn/hudong/" target="_blank">互动平台</a></dd>
                <dd><a href="http://doctor.10jqka.com.cn/" target="_blank">牛叉诊股</a></dd>
                <dd><a href="http://data.10jqka.com.cn/tradetips/tfpts/" target="_blank">交易提示</a></dd>
                <dd><a href="http://stock.10jqka.com.cn/thsgd/" target="_blank">实时新闻</a></dd>
                <dd><a href="http://data.10jqka.com.cn/market/xsjj/" target="_blank">限售解禁</a></dd>
                <dd><a href="http://data.10jqka.com.cn/ipo/xgpt/" target="_blank">新股日历</a></dd>
                <dd><a href="http://data.10jqka.com.cn/market/ggsd/" target="_blank">公告速递</a></dd>
            </dl>
            <dl class="item">
                <dt class="icon-sjjh">数据精华</dt>
                <dd><a href="http://data.10jqka.com.cn/market/longhu/" target="_blank">龙虎榜单</a></dd>
                <dd><a href="http://data.10jqka.com.cn/market/dzjy/" target="_blank">大宗交易</a></dd>
                <dd><a href="http://data.10jqka.com.cn/market/rzrq/" target="_blank">融资融券</a></dd>
                <dd><a href="http://data.10jqka.com.cn/financial/yjyg/" target="_blank">业绩预告</a></dd>
                <dd><a href="http://data.10jqka.com.cn/funds/ggzjl/" target="_blank">个股资金</a></dd>
                <dd><a href="http://data.10jqka.com.cn/funds/ddzz/" target="_blank">大单追踪</a></dd>
                <dd><a href="http://data.10jqka.com.cn/hgt/hgtb/" target="_blank">沪港通</a></dd>
                <dd><a href="http://data.10jqka.com.cn/funds/hyzjl/" target="_blank">行业资金</a></dd>
                <dd><a href="http://data.10jqka.com.cn/ipo/xgyp/" target="_blank">新股预披</a></dd>
                <dd><a href="http://data.10jqka.com.cn/market/ggsyl/" target="_blank" class="overw">个股市盈率</a></dd>
                <dd><a href="http://data.10jqka.com.cn/rank/cxfl/" target="_blank">持续放量</a></dd>
                <dd><a href="http://data.10jqka.com.cn/rank/xstp/" target="_blank">向上突破</a></dd>
            </dl>
        </div>
    </div>  

<!-- 频道资讯 结束-->


 <!-- 底部 开始-->   
<div class="bottom-link">
    <div id="footer">
            <p id="bottom-scroll-listen" data-scroll-taid="web_2bottom" class="ta-scroll-box scroll-ta-over">
            <a target="_blank" href="http://news.10jqka.com.cn/tzz/" rel="nofollow">投资者关系</a>           <span class="ff">|</span>           
            <a target="_blank" href="http://news.10jqka.com.cn/20100105/c61833421.shtml" rel="nofollow">关于同花顺</a>           <span>|</span>          
            <a target="_blank" href="http://download.10jqka.com.cn/">软件下载</a>           <span>|</span>          
            <a target="_blank" href="http://www.10jqka.com.cn/ia/pass_buck.php" rel="nofollow">法律声明</a>             <span>|</span>          <a target="_blank" href="http://www.10jqka.com.cn/hexin_license.htm" rel="nofollow">运营许可</a>            <span>|</span>          <a target="_blank" href="http://www.10jqka.com.cn/modules.php?name=what&amp;page=cooperate" rel="nofollow">内容合作</a>             <span>|</span>          <a target="_blank" href="http://www.10jqka.com.cn/hexin_contact.htm" rel="nofollow">联系我们</a>            <span>|</span>          <a target="_blank" href="http://news.10jqka.com.cn/link.shtml" rel="nofollow">友情链接</a>          <span>|</span>          <a target="_blank" href="http://news.10jqka.com.cn/msg/" rel="nofollow">网友意见箱</a>           <span>|</span>          <a target="_blank" href="http://job.10jqka.com.cn/" rel="nofollow">招聘英才</a>             <span class="ff">|</span>           <a target="_blank" href="http://vote.10jqka.com.cn/webvote/suggest.html" rel="nofollow">用户体验计划</a></p> <p class="c333">不良信息举报电话：(0571)88933003          <a href="mailto:jubao@myhexin.com" class="smarterwiki-linkify">举报邮箱：jubao@myhexin.com</a>           增值电信业务经营许可证：B2-20080207</p> <p class="c333">CopyrightHithink RoyalFlush Information Network Co.,Ltd. All rights reserved. 浙江核新同花顺网络信息股份有限公司版权所有</p> <p class="c333">ICP证：           <a href="http://www.miitbeian.gov.cn/" target="_blank">浙ICP备09003598号</a>           证券投资咨询服务提供：浙江同花顺云软件有限公司 （中国证监会核发证书编号：ZX0050）</p> <div id="myVerifyImageBox" class="verifyImageBox" siteid="43" style="margin-bottom:20px;">  
        </div>
    </div>
</div>
 <!-- 底部 结束-->

<script type="text/javascript" src="./cd/cb(2)"></script>
<script type="text/javascript" src="./cd/cb(3)"></script>
<script type="text/javascript" src="./cd/cb(4)"></script>
<script type="text/javascript" src="./cd/common_v2.min.js"></script>
<script type="text/javascript" src="./cd/cb(5)"></script>
<script type="text/javascript" src="./cd/cb(6)"></script>
<script type="text/javascript" src="./cd/cb(7)"></script>
<script type="text/javascript" src="./cd/cb(8)"></script>
<script type="text/javascript" src="./cd/index2.js"></script>
<script type="text/javascript" src="./cd/cb(9)"></script>
<!-- 点赞关注 -->
<script>
    $('.dzan').click(function(){
        var m_id = $(this).attr('masterid');
        $.ajax({
            type:'post',
            url:"{{url('project/dianz')}}",
            data:{'m_id':m_id},
            success:function(mas){
                if(mas==0){
                    alert('请先登录');
                }
                if(mas==1){
                    alert('点赞成功');
                    window.location.href = "{{url('project/masterlist')}}?id="+m_id;
                }
                if(mas==2){
                    alert('点赞失败');
                }
            }
        })
    })
    $('.jguan').click(function(){
        var m_id = $(this).attr('master');
        $.ajax({
            type:'post',
            url:"{{url('project/guan')}}",
            data:{'m_id':m_id},
            success:function(mas){
                if(mas==0){
                    alert('请先登录');
                }
                if(mas==1){
                    alert('关注成功');
                    window.location.href = "{{url('project/masterlist')}}?id="+m_id;
                }
                if(mas==2){
                    alert('关注失败');
                }
                if(mas==3){
                    alert('取消关注成功');
                    window.location.href = "{{url('project/masterlist')}}?id="+m_id;
                }
            }
        })
    })
</script>


<script>
    $(function(){
        /*切换颜色*/
        $("#red_check").click(function(){
          $("body").addClass("reversedColor");

        });
        $("#green_check").click(function(){
            $("body").removeClass("reversedColor");

        });
    }); 
</script>

<script type="text/javascript" src="./js/weblogin_v3.20170609.js"></script>

<script>
    var fidId = 'hqzx_mgsc';
    if (typeof(fidId)!="undefined" && fidId!=null) {
        TA.log({id:'db_57ee1411_383',fid:'info_gather,qcenter,'+fidId});
    } else {
        TA.log({id:'db_57ee1411_383',fid:'info_gather,qcenter'});
    }
</script>

<img id="__ths_stat__" height="0" width="0" style="display:none" src="./cd/q">

<script>
    $(function(){
        var chartsCount = 60 * 1000;
        var len = $('.m-pager-table').length;
        var chartsTimer = setInterval(function(){
            var mydate = new Date();
            var mytime = mydate.getHours();
            if (mytime > 20 || mytime < 5) {
                for(var j = 0; j < len; j++){
                    window['pager'+j].changeContent();
                }               
            }
         },chartsCount);
            
        for(var i = 0; i < len; i++){
            var pagerName = 'pager'+i;
            window[pagerName] = new mpager('.m-pager-box'+i);
            window[pagerName].init();
        }
    });
</script>


</body>
</html>