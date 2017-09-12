<!DOCTYPE html>
<!-- saved from url=(0048)http://stock.10jqka.com.cn/my/?qq-pf-to=pcqq.c2c -->
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"> 
<base href="{{ URL::asset('Home/personal').'/' }}">
<script async="" src="1968/264648(0)"></script>
<script async="" src="1968/264648(1)"></script>
<script async="" src="1968/264648(2)"></script>
<script src="js/hm.js"></script>
<script src="js/hm.js"></script>
<title>我的自选-个人中心-同花顺财经</title>
<meta name="keywords" content="我的自选,">
<meta name="description" content="同花顺财经个人中心">

<link rel="stylesheet" href="css/main_v2.css">
<link rel="stylesheet" type="text/css" href="css/comment.1.1.css">
<link rel="stylesheet" type="text/css" href="css/subMenu.min.css">
<script src="cd/cb" type="text/javascript"></script>
<script src="cd/cb(1)" type="text/javascript"></script>
<script src="cd/cb(3)" type="text/javascript"></script>


<script src="js/excanvas.min.js"></script>
</head>
<body>
<div class="brandInfo">
    <a href="http://windows.microsoft.com/zh-cn/internet-explorer/download-ie" target="_blank">您的IE版本过低，为了您更好的体验，请升至较高版本</a>
    <a href="http://stock.10jqka.com.cn/my/?qq-pf-to=pcqq.c2c###" class="closebrand">关闭</a>
</div>
<div class="header">
    <div class="control">
        <span class="p_center fl">
            <a href="#" target="_blank" class="logo"></a>
            <a href="#" target="_blank" class="person">个人中心</a>
        </span>
        <div class="hd_right fr">
            <a class="art-collect" href="{{url('project/show')}}">返回首页</a>
            @if($name != '')
                <a href="{{url('project/personal')}}"  style="background-position: right 36px;">{{$name}}</a> 
                | 
                <a href="{{url('project/del_login')}}">退出</a>
            @else
                <a href="{{url('project/login')}}">登录</a>
            @endif
        </div>
    </div>
</div>
<div class="info_panel day" style="background: url(&quot;http://s.thsi.cn/css/ucenter/website/images/back.png&quot;) center center no-repeat;">
    <div class="control">
        <h1 class="person_pic"><a href="{{url('project/ge')}}"><img src="{{$lists['img_url']}}" alt=""></a><span id="page-title">{{$name}}</span></h1>
        <div class="infos">
            <div class="sible">
                <div style="float:right;">
                    <iframe allowtransparency="true" scrolling="no" src="http://tianqi.2345.com/plugin/widget/index.htm?s=2&amp;z=2&amp;t=1&amp;v=2&amp;d=1&amp;bd=0&amp;k=000000&amp;f=ffffff&amp;q=0&amp;e=0&amp;a=1&amp;c=54511&amp;w=255&amp;h=64&amp;align=center" width="255" height="64" frameborder="0"></iframe>
                </div>
            </div>
            <p>成功的投资在本质上是内在的独立自主的结果。</p>
        </div>
    </div>
</div>

<div class="lay_out control">
    <div class="left_bar">
        <ul class="inner ta-parent-box" data-taid="wdzx_dh1" data-fid="wdzx_djall">
    <li class="nav-btn person_sel active" data-id="zixuan" data-title="我的自选"><a href="#">我的自选</a></li>
    <li class="nav-btn pconcern" data-id="focus" data-title="我的名家"><a href="#">我的名家</a></li>
    <li class="nav-btn receive" data-id="collection" data-title="我的收藏"><a href="#">我的收藏</a></li>
    <li class="nav-btn hqcenter" data-id="collection" data-title="申请大师"><a href="{{url('project/Apply')}}">申请大师</a></li>
</ul>
<script>
var url = window.location.href,
    active = false;
$('.nav-btn').each(function(index, item){
    var curId = $(this).attr('data-id'),
        title = $(this).attr('data-title');
    if (url.indexOf(curId) != -1) {
        $(this).addClass('active'); 
        $('#page-title').html(title);
        active = true;
        return true;
    } else {
        $(this).removeClass('active'); 
    }
});
if (!active) {
    $('.person_sel').addClass('active');
    $('#page-title').html('{{$name}}');
}
</script>
<hr>
        <div class="framebox hot_stock ta-parent-box" data-taid="wdzx_rmgp" data-fid="wdzx_djall">
            <div class="wrap ta-scroll-box scroll-ta-over" data-scroll-taid="wdzx_llhotstock" id="wdzx-rmgp">
                <h2>热门股票</h2>
            </div>
            <table>
                <thead>
                <tr>
                    <th>公司</th>
                    <th>热度</th>
                    <th>趋势</th>
                </tr>
                </thead>
                <tbody>
                        <tr>
        <td><a href="http://stockpage.10jqka.com.cn/000651/" target="_blank">格力电器</a></td>
        <td>7956</td>
                <td><i class="uarr"></i></td>
            </tr>
        <tr>
        <td><a href="http://stockpage.10jqka.com.cn/300618/" target="_blank">寒锐钴业</a></td>
        <td>3467</td>
                <td><i class="uarr"></i></td>
            </tr>
        <tr>
        <td><a href="http://stockpage.10jqka.com.cn/300223/" target="_blank">北京君正</a></td>
        <td>3464</td>
                <td><i class="uarr"></i></td>
            </tr>
        <tr>
        <td><a href="http://stockpage.10jqka.com.cn/300496/" target="_blank">中科创达</a></td>
        <td>3273</td>
                <td><i class="uarr"></i></td>
            </tr>
        <tr>
        <td><a href="http://stockpage.10jqka.com.cn/000333/" target="_blank">美的集团</a></td>
        <td>3257</td>
                <td><i class="uarr"></i></td>
            </tr>
        <tr>
        <td><a href="http://stockpage.10jqka.com.cn/300699/" target="_blank">光威复材</a></td>
        <td>2604</td>
                <td><i class="uarr"></i></td>
            </tr>
        <tr>
        <td><a href="http://stockpage.10jqka.com.cn/002853/" target="_blank">皮阿诺</a></td>
        <td>2420</td>
                <td><i class="uarr"></i></td>
            </tr>
        <tr>
        <td><a href="http://stockpage.10jqka.com.cn/000002/" target="_blank">万科A</a></td>
        <td>2219</td>
                <td><i class="uarr"></i></td>
            </tr>
        <tr>
        <td><a href="http://stockpage.10jqka.com.cn/300053/" target="_blank">欧比特</a></td>
        <td>2173</td>
                <td><i class="uarr"></i></td>
            </tr>
        <tr>
        <td><a href="http://stockpage.10jqka.com.cn/000932/" target="_blank">*ST华菱</a></td>
        <td>2117</td>
                <td><i class="uarr"></i></td>
            </tr>
    
                </tbody>
            </table>
        </div>
        <div class="framebox famouse ta-parent-box" data-taid="wdzx_mj" data-fid="wdzx_djall">
            <div class="wrap ta-scroll-box scroll-ta-over" data-scroll-taid="wdzx_llmaster" id="wdzx-rmmj">
                <h2><a href="http://master.10jqka.com.cn/" target="_blank">同花顺名家</a></h2>
            </div>
            <ul>
        <li>
        <a href="http://master.10jqka.com.cn/mj_3614/" target="_blank" class="toux">
            <img src="./img/548ec9b739614f6d44b5b56ce8ddb69f.png">
        </a>
        <div class="infos">
            <a href="http://master.10jqka.com.cn/mj_3614/" target="_blank" class="fname">A股情报</a>
            <a href="http://stock.10jqka.com.cn/my/?qq-pf-to=pcqq.c2c###" class="concern masterAtBox masterAtBox-3614 btn-jgz" data-master="3614">关注</a>
        </div>
        <span class="popu">人气：335</span>
                    <a class="text" href="http://master.10jqka.com.cn/20170829/c600120194.shtml" target="_blank" title="“神电”出世 请密切关注一板块机会">“神电”出世 请密切关注一板块机会</a>
                    <a class="text" href="http://master.10jqka.com.cn/20170824/c599890812.shtml" target="_blank" title="早报：多公司发减持计划 包钢股份利润暴增20倍">早报：多公司发减持计划 包钢股份利润暴增20倍</a>
            </li>
        <li>
        <a href="http://master.10jqka.com.cn/mj_4726/" target="_blank" class="toux">
            <img src="./img/955a41262b608f37b6430d4abd0cd458.jpg">
        </a>
        <div class="infos">
            <a href="http://master.10jqka.com.cn/mj_4726/" target="_blank" class="fname">A股熊市</a>
            <a href="http://stock.10jqka.com.cn/my/?qq-pf-to=pcqq.c2c###" class="concern masterAtBox masterAtBox-4726 btn-jgz" data-master="4726">关注</a>
        </div>
        <span class="popu">人气：21</span>
                    <a class="text" href="http://master.10jqka.com.cn/20161014/c593959151.shtml" target="_blank" title="天然气EIA大幅利多 空单砍还是留？">天然气EIA大幅利多 空单砍还是留？</a>
                    <a class="text" href="http://master.10jqka.com.cn/20160719/c591809912.shtml" target="_blank" title="“价值百万”的箱体止损技巧">“价值百万”的箱体止损技巧</a>
            </li>
        <li>
        <a href="http://master.10jqka.com.cn/mj_4672/" target="_blank" class="toux">
            <img src="./img/e7122039cc8ffb6f0d5fdc00043c9a55.png">
        </a>
        <div class="infos">
            <a href="http://master.10jqka.com.cn/mj_4672/" target="_blank" class="fname">每日股票最新资讯</a>
            <a href="http://stock.10jqka.com.cn/my/?qq-pf-to=pcqq.c2c###" class="concern masterAtBox masterAtBox-4672 btn-jgz" data-master="4672">关注</a>
        </div>
        <span class="popu">人气：9</span>
                    <a class="text" href="http://master.10jqka.com.cn/20170627/c598997525.shtml" target="_blank" title="万科下跌究竟泄露了股市的什么天机！">万科下跌究竟泄露了股市的什么天机！</a>
                    <a class="text" href="http://master.10jqka.com.cn/20160706/c591522322.shtml" target="_blank" title="南方洪水泛滥多地受灾！概念股备受关注！">南方洪水泛滥多地受灾！概念股备受关注！</a>
            </li>
        <li>
        <a href="http://master.10jqka.com.cn/mj_7605/" target="_blank" class="toux">
            <img src="./img/9c90041b800d64d57b0acbe5fc077720.jpg">
        </a>
        <div class="infos">
            <a href="http://master.10jqka.com.cn/mj_7605/" target="_blank" class="fname">剑洪看市</a>
            <a href="http://stock.10jqka.com.cn/my/?qq-pf-to=pcqq.c2c###" class="concern masterAtBox masterAtBox-7605 btn-jgz" data-master="7605">关注</a>
        </div>
        <span class="popu">人气：6</span>
                    <a class="text" href="http://news.10jqka.com.cn/20170901/c600266543.shtml" target="_blank" title="下周大盘如何走？">下周大盘如何走？</a>
                    <a class="text" href="http://master.10jqka.com.cn/20170829/c600140741.shtml" target="_blank" title="收评：场仍处于主力高度控盘状态">收评：场仍处于主力高度控盘状态</a>
            </li>
        <li>
        <a href="http://master.10jqka.com.cn/mj_6981/" target="_blank" class="toux">
            <img src="./img/da0c82d6a3f3617a46c7e2d06d7b2d61.jpg">
        </a>
        <div class="infos">
            <a href="http://master.10jqka.com.cn/mj_6981/" target="_blank" class="fname">悟空说财经</a>
            <a href="http://stock.10jqka.com.cn/my/?qq-pf-to=pcqq.c2c###" class="concern masterAtBox masterAtBox-6981 btn-jgz" data-master="6981">关注</a>
        </div>
        <span class="popu">人气：5</span>
                    <a class="text" href="http://master.10jqka.com.cn/20170818/c599720022.shtml" target="_blank" title="三大指数全线飘红 该板块优质股可关注">三大指数全线飘红 该板块优质股可关注</a>
            </li>
    </ul>

        </div>
    </div>

    <div class="right_content fr">
        <div class="flash_panel clearfix ta-parent-box" data-taid="wdzx_hq" data-fid="wdzx_djall">
            <div class="shangz item hqgreen">
                <span class="single_flash" data-code="hs_1A0001">上证指数</span>
                <div class="detailnum">
                    <span class="freshval">3370.60</span>
                    <label>
                        <span>-0.41%</span>
                        <span>-13.72</span>
                    </label>
                </div>
            </div>
            <div class="shenz item hqgreen">
                <span class="single_flash" data-code="hs_399001">深证指数</span>
                <div class="detailnum">
                    <span class="freshval">10975.86</span>
                    <label>
                        <span>-0.10%</span>
                        <span>-11.09</span>
                    </label>
                </div>
            </div>
            <div class="chuangye item hqgreen">
                <span class="single_flash" data-code="hs_399006">创业指数</span>
                <div class="detailnum">
                    <span class="freshval">1884.42</span>
                    <label>
                        <span>-0.04%</span>
                        <span>-0.74</span>
                    </label>
                </div>
            </div>
            <div class="section fr">
                <div class="wrapSel">
                    <input id="search_input" value="添加自选股" class="addStock" autocomplete="off">
                    <i class="search"></i>
                    <ul class="autocompleteMine hide"></ul>
                </div>
            </div>
        </div>

        <div class="data_panel ta-parent-box" data-taid="wdzx_hq" data-fid="wdzx_djall">

            <table class="codename fl">
                <thead>
                    <tr>
                        <th style="width:120px"><span class="type">全1部</span></th>
                        <th class="table_sort" style="width:67px"><i></i><span>当前价</span></th>
                        <th style="width:137px" class="table_sort"><i></i><span>涨跌幅</span></th>
                        <th class="arr_l"><i onselectstart="return false;"></i></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($ppo as $v)
                <tr class="odd">
                    <td class="graph operate">
                        <a href="http://stockpage.10jqka.com.cn/002713" target="_blank">
                        <span class="name">{{$v['name']}}</span>
                        <span class="code">SZ002713</span>
                        </a>
                    </td>
                    <td class="hqgreen" stock-code="002713"><?php echo round($v['lastestpri'],2) ?></td>
                    <td class="hqgreen" stock-code="002713">
                        <label class="">
                            <span><?php echo substr($v['uppic'],0,4)?></span>
                            <span>({{$v['limit']}}%)</span>
                        </label>
                    </td>
                    <td></td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <table class="colums">
                <thead>
                <tr>
                    <th class="table_sort" style="width:110px;"><i></i><span>成交量(手)</span></th>
                    <th class="table_sort"><i></i><span>成交额</span></th>
                    <th class="table_sort"><i></i><span>市值</span></th>
                    <th class="table_sort"><i></i><span>换手率</span></th>
                    <th class="table_sort"><i></i><span>市盈率</span></th>
                </tr>
                </thead>
                <tbody>
                @foreach($ppo as $v)
                <tr class="odd">
                <!-- 60000000 -->
<!--                 6000.00万 -->
                    <td stock-code="002713">
                        <?php 
                            $name = $v['traAmount'];
                            echo round($name/10000,2).'万';
                        ?>
                    </td>
                    <td stock-code="002713">
                        <?php 
                            $name = $v['avgTraNumber'];
                            echo round($name/10000,2).'万';
                        ?>
                    </td>
                    <td stock-code="002713">
                        <?php 
                            $name = $v['markValue'];
                            echo round($name/100000000,2).'亿';
                        ?>
                    </td>
                    <td stock-code="002713">
                        <?php 
                            $name = $v['EPS'];
                            echo $name.'%';
                        ?>
                    </td>
                    <td stock-code="002713">
                        <?php 
                            $name = $v['priearn'];
                            echo $name.'%';
                        ?>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <table class="colums hide">
                <thead>
                <tr>
                    <th>昨收</th>
                    <th>今开</th>
                    <th>最高</th>
                    <th>最低</th>
                    <th>振幅</th>
                </tr>
                </thead>
                <tbody>
                @foreach($ppo as $v)
                <tr class="odd">
                    <td><?php echo round($v['formpri'],2) ?></td>
                    <td><?php echo round($v['openpri'],2) ?></td>
                    <td><?php echo round($v['maxpri'],2) ?></td>
                    <td><?php echo round($v['minpri'],2) ?></td>
                    <td><?php echo $v['limit'].'%' ?></td>
                </tr>
                @endforeach
                </tbody>
            </table>

            <table class="fr operate">
                <thead>
                    <tr>
                        <th class="arr_r"><i onselectstart="return false;"></i></th>
                        <th><i class="fresh"></i></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($ppo as $v)
                    <tr class="">
                        <td></td>
                        <td class="operate"><i class="rmv" data-id="{{$v['id']}}"></i></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
<<<<<<< .merge_file_a08312
<<<<<<< .merge_file_a09064

            <p class="expand">
                <span class="nomore">没有更多</span>
                <span class="my-fund" onclick="window.open(&#39;http://fund.10jqka.com.cn/zixuan/index.html&#39;)">自选基金</span>      
            </p>
=======
>>>>>>> .merge_file_a02460
=======
>>>>>>> .merge_file_a05664
        </div>
<script>
    $(function(){
        $(".rmv").click(function(){
            var id = $(this).data('id');
            if(confirm("确定要删除吗？")){
                $.ajax({
                    type:"get",
                    url:"{{url('project/del')}}",
                    data:{"id":id},
                    success:function(data){
                        if(data == 1){
                            location.href=("{{url('project/personal')}}");
                        }else{
                            location.href=("{{url('project/personal')}}");
                        }
                    }
                })
            }
        })
    })
</script>
        <div class="stocklist">
            <div class="head clearfix">
                <ul class="tab-box">
                   <!-- <li class="active" load-type="all">
                        <a href="###">全部</a>
                    </li>-->
                    <li load-type="sc" class="active">
                        <a class="ta-own-box" data-taid="wdzx_xxsc" data-fid="wdzx_xxall,wdzx_djall" href="http://stock.10jqka.com.cn/my/?qq-pf-to=pcqq.c2c###">新闻</a>
                    </li>
                    <li load-type="sd">
                        <a class="ta-own-box" data-taid="wdzx_xxsd" data-fid="wdzx_xxall,wdzx_djall" href="http://stock.10jqka.com.cn/my/?qq-pf-to=pcqq.c2c###">讨论</a>
                    </li>
                    <li load-type="sn">
                        <a class="ta-own-box" data-taid="wdzx_xxsn" data-fid="wdzx_xxall,wdzx_djall" href="http://stock.10jqka.com.cn/my/?qq-pf-to=pcqq.c2c###">公告</a>
                    </li>
                    <li load-type="sr">
                        <a class="ta-own-box" data-taid="wdzx_xxsr" data-fid="wdzx_xxall,wdzx_djall" href="http://stock.10jqka.com.cn/my/?qq-pf-to=pcqq.c2c###">研报</a>
                    </li>
                </ul>
                <!--<a href="###" target="_blank" class="stockboard fr">股市直播</a>-->
            </div>
            <div class="tab-container">
               <!-- <ul class="lists item" load-type="all">
                </ul>-->
                <ul class="item lists ta-parent-box" data-taid="wdzx_xxsc" data-fid="wdzx_xxall,wdzx_djall" load-type="sc">
                    
                </ul>
                <ul class="item lists hide ta-parent-box" data-taid="wdzx_xxsd" data-fid="wdzx_xxall,wdzx_djall" load-type="sd">
                    <li load-flag="loadmore" class="loadmore">正在加载...</li>
                </ul>
                <ul class="item lists hide ta-parent-box" data-taid="wdzx_xxsn" data-fid="wdzx_xxall,wdzx_djall" load-type="sn">
                    <li load-flag="loadmore" class="loadmore">正在加载...</li>
                </ul>
                <ul class="item lists hide ta-parent-box" data-taid="wdzx_xxsr" data-fid="wdzx_xxall,wdzx_djall" load-type="sr">
                    <li load-flag="loadmore" class="loadmore">正在加载...</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<iframe width="500px" style="display:none;z-index:1000;position:fixed;box-shadow: 0px 0px 10px rgba(183, 183, 183, 0.8);" height="265" frameborder="0" src="./我的自选-个人中心-同花顺财经_files/saved_resource.html" id="loginIframe"></iframe>
<div id="sns_share" class="share_zone" style="display: none;">
    <span class="fr">
        <!-- <span class="sns_share_to fl">分享到:</span>-->
        <a class="share_sina share_icon fl" href="javascript:void(0);" title="分享到新浪微博"><em>新浪微博</em></a>
        <a class="share_qqzone share_icon fl" href="javascript:void(0);" title="分享到QQ空间"><em>QQ空间</em></a>
     </span>
    <div class="ewm" style="display: none;">
        <img src="http://stock.10jqka.com.cn/my/?qq-pf-to=pcqq.c2c" alt="二维码" width="100" height="100">
    </div>
</div>
<div id="type_sel" class="sels hide">
    <ul>
        <li code-id="" class="active">全部</li>
        <li code-id="hu">只看沪深</li>
        <li code-id="hk">只看港股</li>
        <li code-id="us">只看美股</li>
    </ul>
    <div class="triangle"><i></i></div>
</div>

<div id="stockframe" class="hide">
    <span class="stockname"></span>
    <div class="m_title m_title_3">
        <ul class="canvas_tab m_title_0 m_title_10" id="geguQuote" style="line-height: 2">
            <li class="tab_first tab_current button stat" stat="hqt_fst" charttype="stockminute"><a id="changefsView" href="javascript:void(0);">分时</a></li>
            <li class="button stat" stat="hqt_rkx" charttype="stockkline" period="daily"><a class="draw-type klView" data-type="0" href="javascript:void(0);">日线</a></li>
            <li class="button stat" stat="hqt_zkx" charttype="stockkline" period="week"><a class="draw-type klView" data-type="1" href="javascript:void(0);">周线</a></li>
            <li class="button stat" stat="hqt_ykx" charttype="stockkline" period="month"><a class="draw-type klView" data-type="2" href="javascript:void(0);">月线</a></li>
            <li data-role="fuquan-status" class="fuquan-status" style="display:none;">
            <a href="javascript:;" data-fuquan="1" style="_width:30px;">前复权<span class="canvas-list-arrow">&nbsp;</span></a>
            <div class="khover" style="display:none;">
                <a data-type="1" href="javascript:;">前复权</a>
                <a data-type="2" href="javascript:;">后复权</a>
                <a data-type="0" href="javascript:;">不复权</a>
            </div>
            </li>
        </ul>
    </div>
    <div class="flash_cont" style="margin-top: 0px;">
        <div style="width: 613px; padding: 0; position: relative; display:none; border: none; background: none;" code="sz_000151" id="new_stockInfo_con" class="new_stockInfo_con stockInfo_con stockCanvas_con">
            <!--
            <div class="canvas-btn-box" style="display:none; top: 257px;">
                <ul>
                    <li><a href="javascript:;" id="preEvent" class="canvas-get-pre"></a></li>
                    <li><a href="javascript:;" id="nextEvent" class="canvas-get-next" ></a></li>
                    <li><a href="javascript:;" id="zoomInEvent" class="canvas-zoom-in"></a></li>
                    <li><a href="javascript:;" id="zoomOutEvent" class="canvas-zoom-out"></a></li>
                </ul>
            </div>
            -->
            <div class="canvas_target_fun" style="top: 455px;">
                <ul>
                    <li class="active"><a href="javascript:;">MACD</a></li>
                    <li><a href="javascript:;">KDJ</a></li>
                    <li><a href="javascript:;">RSI</a></li>
                    <li><a href="javascript:;">BOLL</a></li>
                    <li><a href="javascript:;">W&amp;R</a></li>
                    <li><a href="javascript:;">ASI</a></li>
                    <li><a href="javascript:;">BIAS</a></li>
                    <li><a href="javascript:;">VR</a></li>
                </ul>

            </div>
            <div id="canvasPanel" class="canvas-panel" style="width: 613; height: 400px; position: relative; display:none;">
                <canvas id="tcanvas" width="613" height="400"></canvas>
            </div>
            <div class="canvas-panel-mask"></div>
        </div>
    </div>
</div>

<div id="sns_share" class="share_zone" style="display: none;">
        <span class="fr">
            <a class="share_sina share_icon fl" href="javascript:void(0);" title="分享到新浪微博"><em>新浪微博</em></a>
            <a class="share_qqzone share_icon fl" href="javascript:void(0);" title="分享到QQ空间"><em>QQ空间</em></a>
         </span>
    <div class="ewm" style="display: none;">
        <img src="http://stock.10jqka.com.cn/my/?qq-pf-to=pcqq.c2c" alt="二维码" width="100" height="100">
    </div>
</div>

<div class="bottom">
    <div class="erweima">
        <div class="item">
            <img alt="" src="./img/160982397_8a86ddb23e36f9fe126b22893b6fc47f.gif">
            <span class="scan">扫描添加</span>
            <span style="font-weight: bold;">同花顺财经官方微信号</span>
        </div>
        <div class="item">
            <img alt="" src="./img/119413814_f31c4b972502b468fa6198cb06144995.jpg">
            <span class="scan">扫描添加</span>
            <span style="font-weight: bold;">手机同花顺财经</span>
        </div>
        <div class="item">
            <img src="./img/119413814_9ad8854e921e24c9cbe5b5ed86b50b60.jpg" alt="">
            <span class="scan">扫描添加</span>
            <span title="炒股必备--股市热点" style="font-weight: bold; color: red;">炒股必备--股市热点</span>
        </div>
        <div class="item">
            <img src="./img/119413814_1ceb37400cb98fde606649e27e12e490.jpg" alt="">
            <span class="scan">扫描添加</span>
            <span style="font-weight: bold;" title="手机爱基金">手机爱基金</span>
        </div>
    </div>
</div>

<div class="rightCol">
    <a style="cursor:pointer;" class="bottom" data-flag="false">bottom</a>
</div>

<div class="bottom-link">
    <div id="footer">
        <p>
            <a target="_blank" href="http://news.10jqka.com.cn/tzz/" rel="nofollow">投资者关系</a> <span class="ff">|</span>
            <a target="_blank" href="http://news.10jqka.com.cn/20100105/c61833421.shtml" rel="nofollow">关于同花顺</a> <span>|</span>
            <a target="_blank" href="http://download.10jqka.com.cn/">软件下载</a> <span>|</span>
            <a target="_blank" href="http://www.10jqka.com.cn/ia/pass_buck.php" rel="nofollow">法律声明</a> <span>|</span>
            <a target="_blank" href="http://www.10jqka.com.cn/hexin_license.htm" rel="nofollow">运营许可</a> <span>|</span>
            <a target="_blank" href="http://www.10jqka.com.cn/modules.php?name=what&amp;page=cooperate" rel="nofollow">内容合作</a> <span>|</span>
            <a target="_blank" href="http://www.10jqka.com.cn/hexin_contact.htm" rel="nofollow">联系我们</a> <span>|</span>
            <a target="_blank" href="http://news.10jqka.com.cn/link.shtml" rel="nofollow">友情链接</a> <span>|</span>
            <a target="_blank" href="http://news.10jqka.com.cn/msg/" rel="nofollow">网友意见箱</a> <span>|</span>
            <a target="_blank" href="http://job.10jqka.com.cn/" rel="nofollow">招聘英才</a> <span class="ff">|</span>
            <a target="_blank" href="http://vote.10jqka.com.cn/webvote/suggest.html" rel="nofollow">用户体验计划</a>
        </p>
        <p class="c333">不良信息举报电话：(0571)88933003<a href="mailto:jubao@myhexin.com" class="smarterwiki-linkify">举报邮箱：jubao@myhexin.com</a>增值电信业务经营许可证：B2-20080207</p>
        <p class="c333">Copyright&#169;Hithink RoyalFlush Information Network Co.,Ltd. All rights reserved. 浙江核新同花顺网络信息股份有限公司版权所有</p>
        <p class="c333">ICP证：<a href="http://www.miitbeian.gov.cn/" target="_blank">浙ICP备09003598号</a>证券投资咨询服务提供：浙江同花顺云软件有限公司 （中国证监会核发证书编号：ZX0050）</p>
        <div id="myVerifyImageBox" class="verifyImageBox" siteid="43" style="margin-bottom:20px;"></div>
    </div>
</div>
<script src="./cd/cb(4)" type="text/javascript"></script>
<script src="./js/headlogin.js" type="text/javascript"></script>
<script src="./cd/cb(5)" type="text/javascript"></script>

<script type="text/javascript" src="./js/application.js"></script>
<script type="text/javascript" src="./js/comment.app.2013_v4.js"></script>
<script type="text/javascript" src="./cd/cb(6)"></script>
<script type="text/javascript" src="./js/main.js"></script>
<script type="text/javascript" src="./js/confirmDialog.js"></script>
<script>
    var global = {
        type : 'quote',
        page : '1',
        last : '',
        field : 'quote',
        sort : 'quote',
        baseurl : 'http://q.10jqka.com.cn/',
        url : 'interface/stock/mine/',
        py  : 'quote'
    };
</script>
<script type="text/javascript" src="./js/require.min.js"></script>
<script type="text/javascript" src="./cd/cb(7)"></script>
<script type="text/javascript" src="./cd/cb(8)"></script>
<script type="text/javascript" src="./js/stockjson.js"></script>
<script type="text/javascript" src="./cd/cb(9)"></script>
<script type="text/javascript" src="./cd/cb(10)" charset="utf-8"></script>
<script type="text/javascript" src="./cd/cb(11)"></script>
<script type="text/javascript" src="./cd/cb(12)"></script>
<script type="text/javascript" src="./cd/cb(13)"></script>
<script type="text/javascript" src="./cd/cb(14)"></script><link rel="stylesheet" type="text/css" href="./css/page.css"> 
<script type="text/javascript" src="./js/combo.min.js" charset="utf-8"></script>
<script>
    application.getCodeUrl("sc", 1);
    application.tabChange();
    perTable.getUrlInfo({
        num:5
    });
    $("#search_input").on("click",function(){
        $("#search_input").val('');
    }).blur(function(){
        $("#search_input").val('添加自选股');
    });
    var dialog = new dialog();
    var demo = new chartNum(".single_flash",{
        drawComplete:function(element){
            var data = element.data('stockLastInfo').lastData;
            var pre = data['pre'];
            var price = data['price'].toFixed(2);
            var zde = data['zde'].toFixed(2);
            var zdf = (data['zdf']*100).toFixed(2);
            var color = zde > 0 ? 'hqred' : ((zde < 0) ? 'hqgreen' : 'equal');
            element.parents(".item").removeClass("hqred").removeClass("hqgreen").removeClass("equal").addClass(color);
            var box = element.siblings(".detailnum");
            var spanEl = box.find("label span");
            box.find(".freshval").html(price);
            spanEl.eq(0).html(zdf+"%");
            spanEl.eq(1).html(zde);
        }
    });
    var collectt = new Collect();
    $('.stocklist').on('click', '.collect-btn', function(){
        if ($(this).hasClass('selected')) {
            alert('您已经收藏过了~');
            return;
        }
        collectt.submit($(this).attr('data-title'), $(this).attr('data-url'), $(this).attr('data-intro'), 6, '');
        $(this).addClass('selected');
    });
    init.pageInit();
    masterAttention.addParam({'pageType' : 'masterlist'});
    masterAttention.main();
    var newsloadCallback = function(type, page){
        if (page > 1 && type) {
            page = Math.min(page, 4);
            TA.log({'id':'wdzx_lljz_' + type + page, 'nj' : 1});
        }
    };
    TA.log({id:'wdzx_all',fid:'info_gather,ch_stock'});
    var hotta = function() {
        $('a').each(function(index){
            $(this).bind('click', function(){
                if ('#' != this.href && '' != this.href
                    && '###' != this.href) {
                    TA.log({id:'fixed', nopv:1, hotnum:1, nj:1, pt:32, seq:hex_md5(this.href)});
                }
            });
        });
    };
    var hpFrameHover = 0;
    $('#stockframe').hover(function(){
        hpFrameHover = new Date().getTime();
    },function(){
        curTime = new Date().getTime();
        if (curTime - hpFrameHover > 3000) {
            TA.log({'id':'wdzx_hqttl', 'nj' : 1});
        }
    });
    $.fn.autocomplete && $("#search_input").autocomplete({
        stocknoxsb: true,
        stock: false,
        hk: true,
        fund: false,
        extra: false,
        usa: true,
        callback:"mine.addStock"
    });
    hotta();
</script><img id="__ths_stat__" height="0" width="0" style="display:none" src="./cd/q"><div class="autocomplete" id="autocomplete_search_input" style="display: none; z-index: 1504666581; position: absolute; width: 198px;"></div>
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "//hm.baidu.com/hm.js?78c58f01938e4d85eaf619eae71b4ed1";
var s = document.getElementsByTagName("script")[0]; 
s.parentNode.insertBefore(hm, s);
})();
</script>
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "//hm.baidu.com/hm.js?f79b64788a4e377c608617fba4c736e2";
var s = document.getElementsByTagName("script")[0]; 
s.parentNode.insertBefore(hm, s);
})();
</script>

<div class="person_infos hide" id="person_infos" style="left: 1187.65px; top: 46px;"><div class="triangle"></div><ul><li class="s_choice"><a href="http://stock.10jqka.com.cn/my/" target="_blank" class="freshIcon" onclick="TA.log({&#39;id&#39;:&#39;grxlk_djzx&#39;,&#39;fid&#39;:&#39;grxlk_djall&#39;,&#39;nj&#39;:1});">我的自选</a></li><li class="s_famouse"><a href="http://stock.10jqka.com.cn/my/focus.shtml" target="_blank" onclick="TA.log({&#39;id&#39;:&#39;grxlk_djmj&#39;,&#39;fid&#39;:&#39;grxlk_djall&#39;,&#39;nj&#39;:1});">我的名家</a></li><li class="s_round"><a href="http://t.10jqka.com.cn/newcircle/user/joinedCircle/" target="_blank" onclick="TA.log({&#39;id&#39;:&#39;grxlk_djqz&#39;,&#39;fid&#39;:&#39;grxlk_djall&#39;,&#39;nj&#39;:1});">加入的圈子</a></li><li class="b_methods"><a href="http://t.10jqka.com.cn/newcircle/user/myBook/" target="_blank" onclick="TA.log({&#39;id&#39;:&#39;grxlk_djcl&#39;,&#39;fid&#39;:&#39;grxlk_djall&#39;,&#39;nj&#39;:1});">订阅的策略</a></li><li class="c_center"><a href="http://stock.10jqka.com.cn/my/collection.shtml" target="_blank" onclick="TA.log({&#39;id&#39;:&#39;grxlk_djsc&#39;,&#39;fid&#39;:&#39;grxlk_djall&#39;,&#39;nj&#39;:1});">收藏中心</a></li><li class="s_news"><a href="http://t.10jqka.com.cn/newcircle/user/chatComment/" target="_blank" onclick="TA.log({&#39;id&#39;:&#39;grxlk_djxx&#39;,&#39;fid&#39;:&#39;grxlk_djall&#39;,&#39;nj&#39;:1});">我的消息</a></li></ul></div></body></html>