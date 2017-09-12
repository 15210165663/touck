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
        <script type="text/javascript" src="./tu/ichart.1.2.min.js"></script>
        <link rel="stylesheet" href="./tu/demo.css" type="text/css"/>
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
    #content2 .brief2{width:88%;margin-top: 2%;margin-left: 5%;height: 80%;border: 1px solid #aaacbc;font-size: 17px;}
    #content2 .brief2 .brief2-text{line-height: 40px;text-indent:2em;width:85%;margin-top: 2%;margin-left: 7%;}
    #content2 .brief2 .brief2-text span{font-size: 15px;}
    #content2 .brief2 .brief2-text table{width:100%;}
</style>

    </head>

<body class="reversedColor">
    <script>
    $(function(){
        var flow=[];
        for(var i=0;i<6;i++){
            flow.push(Math.floor(Math.random()*(30+((i%12)*5)))+10);
        }
        
        var data = [
                    {
                        name : 'PV',
                        value:flow,
                        color:'#0d8ecf',
                        line_width:2
                    }
                 ];
        var labels = ["0-0.5","0.5-1","1-2.5","2.5-5","5-10","10-15","15-20"];
        var chart = new iChart.LineBasic2D({
            render : 'canvasDiv',
            data: data,
            align:'center',
            title : {
                text:'美股的涨幅比',
                fontsize:24,
                color:'#f7f7f7'
            },
            subtitle : {
                text:'美国股票的涨幅情况',
                color:'#f1f1f1'
            },
            footnote : {
                text:'',
                color:'#f1f1f1'
            },
            width : 800,
            height : 350,
            shadow:true,
            shadow_color : '#20262f',
            shadow_blur : 4,
            shadow_offsetx : 0,
            shadow_offsety : 2,
            background_color:'#383e46',
            tip:{
                enable:true,
                shadow:true
            },
            crosshair:{
                enable:true,
                line_color:'#62bce9'
            },
            sub_option : {
                label:false,
                hollow_inside:false,
                point_size:8
            },
            coordinate:{
                width:640,
                height:260,
                grid_color:'#cccccc',
                axis:{
                    color:'#cccccc',
                    width:[0,0,2,2]
                },
                grids:{
                    vertical:{
                        way:'share_alike',
                        value:5
                    }
                },
                scale:[{
                     position:'left',   
                     start_scale:0,
                     end_scale:100,
                     scale_space:10,
                     scale_size:2,
                     label : {color:'#ffffff',fontsize:11},
                     scale_color:'#9f9f9f'
                },{
                     position:'bottom', 
                     label : {color:'#ffffff',fontsize:11},
                     labels:labels
                }]
            }
        });
        
        //开始画图
        chart.draw();
    });
    </script>
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

        <div class="top_title2" style="margin-top: 104px">
            <div class="left_border"></div>
            <p>123</p>
        </div>
        <div class="mt30 clearfix">
            <div id="content">
                <div id="info">
                <h1>主要指标</h1>
                    <div id="zhibiao">
             
                    </div>
                </div>
                <div id="info2">
                    <div class="info2-top">
                        <ul>
                            <li class="now">涨幅比</li>
                    
                        </ul>
                    </div>
                    <script type="text/javascript">
                    $(function(){
                        var pv=[],ip=[],t;
                        for(var i=0;i<61;i++){
                            t = Math.floor(Math.random()*(30+((i%12)*5)))+10;
                            pv.push(t);
                            t = Math.floor(t*0.5);
                            t = t-Math.floor((Math.random()*t)/2);
                            ip.push(t);
                        }
                        
                        var data = [
                                    {
                                        name : 'PV',
                                        value:pv,
                                        color:'#0d8ecf',
                                        line_width:2
                                    },
                                    {
                                        name : 'IP',
                                        value:ip,
                                        color:'#ef7707',
                                        line_width:2
                                    }
                                 ];
                         
                        var labels = ["2012-08-01","2012-08-02","2012-08-03","2012-08-04","2012-08-05","2012-08-06"];
                        var line = new iChart.LineBasic2D({
                            render : 'canvasDiv1',
                            data: data,
                            align:'center',
                            title : '美股的跌涨幅比',
                            subtitle : '美国股票涨浮比例',
                            footnote : '',
                            width : 650,
                            height : 350,
                            tip:{
                                enable:true,
                                shadow:true
                            },
                            legend : {
                                enable : true,
                                row:1,//设置在一行上显示，与column配合使用
                                column : 'max',
                                valign:'top',
                                sign:'bar',
                                background_color:null,//设置透明背景
                                offsetx:-80,//设置x轴偏移，满足位置需要
                                border : true
                            },
                            crosshair:{
                                enable:true,
                                line_color:'#62bce9'
                            },
                            sub_option : {
                                label:false,
                                point_hollow : false
                            },
                            coordinate:{
                                width:500,
                                height:240,
                                axis:{
                                    color:'#9f9f9f',
                                    width:[0,0,2,2]
                                },
                                grids:{
                                    vertical:{
                                        way:'share_alike',
                                        value:5
                                    }
                                },
                                scale:[{
                                     position:'left',   
                                     start_scale:0,
                                     end_scale:100,
                                     scale_space:100,
                                     scale_size:2,
                                     scale_color:'#9f9f9f'
                                },{
                                     position:'bottom', 
                                     labels:labels
                                }]
                            }
                        });
                    
                    //开始画图
                    line.draw();
                });
                
            </script>

                    <div class="info2-centent">

<div id='canvasDiv1'></div>

                        <img src="" alt="">

                    </div>
                </div>
            </div>
            <div id="content2">
                <div class="brief">
                    <ul>
                        <li class="now">美股详情</li>
                       
                    </ul>
                </div>
                <div class="brief2">
                    <div class="brief2-text">
                        <div id='canvasDiv'></div>

                 
                    </div>
                </div>
            </div>
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
         
        });
        $('.brief li').click(function(){
            $(this).addClass("now").siblings().removeClass("now");
            var num = $(this).index();
            
        });
    })
</script>
</body>
</html>