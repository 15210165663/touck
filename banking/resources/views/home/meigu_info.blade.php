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
    <link rel="stylesheet" type="text/css" href="./css/subMenu.min.css">
    
<style>
    body{background-color: white}
    #content{height: 500px;}
    h1{text-align: center;font-size: 20px;font-weight: bold;}
    #info{float: left;margin-left: 5%;width: 25%;height: 500px;border: 1px solid #dddddd;}
    #info2{margin-left: 2%;float: left;width: 60%;height: 500px;border: 1px solid #e6e6e6;}
    #info2 .info2-top{border-left:1px solid #e6e6e6;margin-top: 5%;margin-left: 25%;width: 50%;height: 50px;}
    #info2 .info2-top ul{width:100%;height:50px;}
    #info2 .info2-top ul li{width: 19%;float: left; cursor:pointer;border-right:1px solid #e6e6e6;border-top:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6;text-align: center;line-height: 50px;}
    #info2 .info2-top .now{color: white;background: #828ec9;}
    #info2 .info2-centent{margin-left:5%; margin-top:5%; text-align: center;width: 90%;height: 350px;border: 1px solid #e6e6e6;}
    #zhibiao{margin-left:15%; width: 70%;font-size: 15px;line-height: 50px;}
    #content2{height: 500px;}
    #content2 .brief{margin-top: 2%;width:91%;margin-left: 5%;height: 50px;border-left:1px solid #ee8800;}
    #content2 .brief ul{font-size: 17px;width:100%;height:50px;}
    #content2 .brief ul li{width: 16%;float: left; cursor:pointer;border-right:1px solid #ee8800;border-top:1px solid #ee8800;border-bottom:1px solid #ee8800;text-align: center;line-height: 50px;}
    #content2 .brief .now{color: white;background: #ee8800;}
    #content2 .brief2{width:88%;margin-top: 2%;margin-left: 5%;height: 80%;border: 1px solid #aaacbc;font-size: 17px;min-height:70%;overflow-y:auto;max-height:80%;}
    #content2 .brief2 .brief2-text{line-height: 40px;text-indent:2em;width:85%;margin-top: 2%;margin-left: 7%;}
    #content2 .brief2 .brief2-text span{font-size: 15px;}
    #content2 .brief2 .brief2-text table{width:100%;}
</style>

    </head>
<body class="reversedColor">
<div class="header fixed">
    <div class="w1200">
        <div class="hdlogo">
            <a target="_blank" class="site-logo" href="http://www.10jqka.com.cn/"> <img src="./img/logo-ths.jpg" title="同花顺" alt="同花顺"></a>
        </div>

        <div class="nav">
            <a href="{{url('project/show')}}" data-type="hssc">首页</a>
            <a href="{{url('project/meigu')}}" class="cur">美国市场</a>
            <a href="http://q.10jqka.com.cn/global/">财务分析</a>
            <a href="http://q.10jqka.com.cn/gn/" data-type="bk">资金流向</a>
            <a href="http://q.10jqka.com.cn/xsb/" target="_blank">炒股大师</a>
        </div>


        <div class="login-box hide">

            <a href="http://upass.10jqka.com.cn/login?redir=HTTP_REFERER" target="_blank">登录</a>

        </div>

        <div class="logined_box fr">

            <a href="http://stock.10jqka.com.cn/my/" target="_blank" id="J_username" style="background-position: right 36px;">co_412608137</a>

            <span>|</span>

            <a href="javascript:;" id="header_logined_out" target="_self" class="homeloginout">退出</a>

        </div>

    </div>

</div>
<div class="content">
        @if($err==1)
        <div class="top_title2" style="margin-top: 104px">
            <div class="left_border"></div>
            <p>{{$data['name']}}（{{$data['gid']}}）</p>
        </div>
        <div class="mt30 clearfix">
            <div id="content">
                <div id="info">
                <h1>主要指标</h1>
                    <div id="zhibiao">
                        股本： <span>{{$data['capital']}}</span><br>
                        市值：   <span>{{$data['markValue']}}</span><br>
                        收益率： <span>{{$data['ROR']}}</span><br>
                        最新价： <span>{{$data['lastestpri']}}</span><br>
                        最高价： <span>{{$data['maxpri']}}</span><br>
                        最低价： <span>{{$data['minpri']}}</span><br>
                        涨跌额： <span>{{$data['uppic']}}</span><br>
                        涨跌幅%：<span>{{$data['limit']}}%</span><br>
                        成交量：<span>{{$data['traAmount']}}</span><br>
                    </div>
                </div>
                <div id="info2">
                    <div class="info2-top">
                        <ul>
                            <li class="now">分时图</li>
                            <li>5日图</li>
                            <li>日k图</li>
                            <li>周k图</li>
                            <li>月k图</li>
                        </ul>
                    </div>
                    <div class="info2-centent">
                        <img src="{{$gopicture['minurl']}}" alt="">
                    </div>
                </div>
            </div>
            <div id="content2">
                <div class="brief">
                    <ul>
                        <li class="now">公司介绍</li>
                        <li>基本信息</li>
                        <li>企业数据</li>
                        <li>股价涨跌</li>
                        <li>公司荣誉</li>
                        <li>公司新闻</li>
                    </ul>
                </div>
                <div class="brief2">
                    <div class="brief2-text">
                        {!!$info!!}
                    </div>
                </div>
            </div>
        </div>
        @else
            {{$msg}}
        @endif
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

<script type="text/javascript">
    $(function(){
        $(".info2-top li").click(function(){
            $(this).addClass("now").siblings().removeClass("now");
            var num = $(this).index();
            if(num==0){
                var url = "{{$gopicture['minurl']}}";
            }else if(num==1)
            {
                var url = "{{$gopicture['min_weekpic']}}"; 
            }else if(num==2)
            {
                var url = "{{$gopicture['dayurl']}}"; 
            }else if(num==3)
            {
                var url = "{{$gopicture['weekurl']}}"; 
            }else{
                var url = "{{$gopicture['monthurl']}}"; 
            }
            $('.info2-centent img').attr('src',url);
        });
        $('.brief li').click(function(){
            $(this).addClass("now").siblings().removeClass("now");
            var num = $(this).index();
            if(num==0){
                var text = "{!!$info!!}";
            }else if(num==1)
            {
                var text = '<table>{!!$info2!!}</table>';
            }else if(num==2)
            {
                var text = ""; 
            }else if(num==3)
            {
                var text = ""; 
            }else if(num==4)
            {
                var text = ""; 
            }else if(num==5)
            {
                var text = ""; 
            }
            $('.brief2-text').html(text)
        });
    })
</script>
</body>
</html>