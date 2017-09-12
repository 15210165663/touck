<!DOCTYPE html>
<!-- saved from url=(0026)http://q.10jqka.com.cn/usa -->
<html lang="en">
<meta charset="utf-8">
<base href="{{URL::asset('Home/index').'/'}}">
<head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
    
    <title>顺子财经网</title>
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
            <h1><a target="_blank" title="炒股中心" class="sub-logo">炒股中心</a></h1>
        </div>

        <div class="nav">
            <a href="{{url('project/show')}}" data-type="hssc" class="cur">首页</a>
            <a href="{{url('project/meigu')}}" >美国市场</a>
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

        <div class="top_title2" style="margin-top: 104px">
            <div class="left_border"></div>
            <p>指数行情</p>
        </div>

        <div class="mt30 clearfix">
            <div class="flash-single flash-small new_wh">
                <div class="data-line" style="margin-bottom: 15px;">
                    <strong class="off"><a href="http://q.10jqka.com.cn/usa##">道琼斯工业平均指数(DJI)</a></strong>
                    <br>
                    <span class="red">21987.56</span>
                    <span class="red">0.18%</span>
                    <span class="red">39.46</span>
                </div>
                <svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;font-family:Arial;" xmlns="http://www.w3.org/2000/svg" width="282" height="120">
                <path fill="none" d="M 0 55.5 L 282 55.5" stroke="#D75442" stroke-width="1" stroke-dasharray="3,1" zIndex="4">
                </path>
                </svg>
            </div>

            <div class="flash-single flash-small flash-sec new_wh">
                <div class="data-line" style="margin-bottom: 15px;">
                    <strong class="off"><a href="http://q.10jqka.com.cn/usa##">
                    纳斯达克综合指数(IXIC)</a></strong>
                    <br>
                    <span class="red">6435.33</span>
                    <span class="red">0.10%</span>
                    <span class="red">6.67</span>
                </div>

                <svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;font-family:Arial;" xmlns="http://www.w3.org/2000/svg" width="282" height="120">
                <path fill="none" d="M 0 55.5 L 282 55.5" stroke="#D75442" stroke-width="1" stroke-dasharray="3,1" zIndex="4">
                </path>
                </svg>
            </div>

            <div class="flash-single flash-small new_wh">
                <div class="data-line" style="margin-bottom: 15px;">
                    <strong class="off"><a href="http://q.10jqka.com.cn/usa##">
                    标准普尔500指数(SPX)</a></strong>
                    <br>
                    <span class="red">2476.55</span>
                    <span class="red">0.20%</span>
                    <span class="red">4.90</span>
                </div>
                <svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;font-family:Arial;" xmlns="http://www.w3.org/2000/svg" width="282" height="120">
                <path fill="none" d="M 0 55.5 L 282 55.5" stroke="#D75442" stroke-width="1" stroke-dasharray="3,1" zIndex="4">
                </path>
                </svg>
            </div>


            <div class="right_pic zhu">
                <div id="container" class="zhu" data-highcharts-chart="3">
                    <div class="highcharts-container" id="highcharts-9" style="position: relative; overflow: hidden; width: 270px; height: 249px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                    <svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="270" height="249">
                    <desc>Created with Highcharts 4.1.5</desc>
                    <defs>
                    <clippath id="highcharts-10">
                    <rect x="0" y="0" width="221" height="149"></rect>
                    </clippath>
                    </defs>
                    <rect x="0" y="0" width="270" height="249" strokeWidth="0" fill="#FFFFFF" class=" highcharts-background">
                    </rect>
                    </g>
                    <g class="highcharts-series-group" zIndex="3">
                    <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(39,40) scale(1 1)" style="cursor:pointer;" clip-path="url(#highcharts-10)">

                    <rect x="6.5" y="149.5" width="14" height="0" stroke="#FFFFFF" stroke-width="1" fill="#59b881" rx="0" ry="0"></rect>
                    <rect x="34.5" y="148.5" width="14" height="1" stroke="#FFFFFF" stroke-width="1" fill="#59b881" rx="0" ry="0"></rect>
                    <rect x="61.5" y="144.5" width="14" height="5" stroke="#FFFFFF" stroke-width="1" fill="#59b881" rx="0" ry="0"></rect>
                    <rect x="89.5" y="88.5" width="14" height="61" stroke="#FFFFFF" stroke-width="1" fill="#59b881" rx="0" ry="0"></rect>
                    <rect x="117.5" y="23.5" width="14" height="126" stroke="#FFFFFF" stroke-width="1" fill="#d75442" rx="0" ry="0"></rect>
                    <rect x="144.5" y="135.5" width="14" height="14" stroke="#FFFFFF" stroke-width="1" fill="#d75442" rx="0" ry="0"></rect>
                    <rect x="172.5" y="146.5" width="14" height="3" stroke="#FFFFFF" stroke-width="1" fill="#d75442" rx="0" ry="0"></rect>
                    <rect x="200.5" y="147.5" width="14" height="2" stroke="#FFFFFF" stroke-width="1" fill="#d75442" rx="0" ry="0"></rect>
                    </g>
                    
                    </g>



                    <g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7">

                    <text x="55.40522486435067" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 55.40522486435067 205)" y="205" opacity="1">

                    <tspan>-∞~-9%</tspan></text><text x="83.03022486435067" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 83.03022486435067 205)" y="205" opacity="1"><tspan>-9%~-6%</tspan></text><text x="110.65522486435067" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 110.65522486435067 205)" y="205" opacity="1"><tspan>-6%~-3%</tspan></text><text x="138.28022486435069" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 138.28022486435069 205)" y="205" opacity="1"><tspan>-3%~-0%</tspan></text><text x="165.90522486435069" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 165.90522486435069 205)" y="205" opacity="1"><tspan>0%~3%</tspan></text><text x="193.53022486435069" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 193.53022486435069 205)" y="205" opacity="1"><tspan>3%~6%</tspan></text><text x="221.15522486435069" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 221.15522486435069 205)" y="205" opacity="1"><tspan>6%~9%</tspan></text><text x="248.78022486435066" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:249px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 248.78022486435066 205)" y="205" opacity="1"><tspan>9%~∞%</tspan></text></g>

                    </svg></div></div>
                <p class="pic_top">上涨:<span class="red" style="font-size: 14px;" id="sz">3874</span> &nbsp;下跌:<span class="green" style="font-size: 14px;" id="xd">1810</span> &nbsp;平盘:<span style="font-size: 14px; font-weight: bold; margin-left: 15px;" id="pp">581</span></p>
            </div>      
        </div>
        <div class="m-pager-box0" board="zgg">
            <div class="top_title2">
                <div class="left_border"></div>
                <p>中概股涨跌排行榜</p>
                <span class="more"><a href="http://q.10jqka.com.cn/usa/detail/board/zgg/" target="_blank">更多&gt;&gt;</a>
                </span>
            </div>

            <p class="check">
                颜色配置：
                <input type="radio" name="red_green" checked="checked" id="red_check">红涨绿跌
                <input type="radio" name="red_green" id="green_check">绿涨红跌
            </p>  

            <div class="zgg_maincont">
                              
                <table class="m-table m-pager-table">
                    <thead>
                        <tr>
                            <th style="width:4%">序号</th>
                            <th style="width:6%"><a href="javascript:void(0)" field="stockcode">代码<i></i></a></th>
                            <th style="width:10%">名称</th>
                            <th style="width:6%"><a href="javascript:void(0)" field="xj">现价<i></i></a></th>
                            <th style="width:9%" class="cur"><a href="javascript:void(0)" field="zdf" order="desc" class="desc">涨跌幅(%)<i></i></a></th>
                            <th style="width:6%"><a href="javascript:void(0)" field="zd">涨跌<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="hs">换手(%)<i></i></a></th>
                            <th style="width:10%"><a href="javascript:void(0)" field="cjl">成交量<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="syl">市盈率<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zs">昨收<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="kpj">开盘价<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zgj">最高价<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zdj">最低价<i></i></a></th>
                            <th style="width:7%">加自选</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="http://stockpage.10jqka.com.cn/HLG/" target="_blank">HLG</a></td>
                            <td><a href="http://stockpage.10jqka.com.cn/HLG/" target="_blank">海亮教育集团</a></td>
                            <td class="c-fall">18.71</td>
                            <td class="c-fall">11.37</td>
                            <td class="c-fall">1.91</td>
                            <td>0.17</td>
                            <td>4.46万</td>
                            <td>23.21</td>
                            <td>16.80</td>
                            <td>16.80</td>
                            <td>20.25</td>
                            <td>16.47</td>
                            <td><a class="j_addStock" title="加自选" href="javascript:void(0);"><img src="./img/plus_logo.png" alt=""></a></td>
                        </tr>               
                    </tbody>
                </table>
                <input type="hidden" id="baseUrl" value="usa/index">                
                        </div>
        </div>

<div class="mar m-pager-box1" board="all">
            <div class="top_title2" style="margin-bottom: 30px">
                <div class="left_border"></div>
                <p>全部美股涨跌排行榜</p><span class="more"><a href="http://q.10jqka.com.cn/usa/detail/" target="_blank">更多&gt;&gt;</a></span>
            </div>
            
            <div class="all_maincont">               
                <table class="m-table m-pager-table">
                    <thead>
                        <tr>
                            <th style="width:4%">序号</th>
                            <th style="width:6%"><a href="javascript:void(0)" field="stockcode">代码<i></i></a></th>
                            <th style="width:10%">名称</th>
                            <th style="width:6%"><a href="javascript:void(0)" field="xj">现价<i></i></a></th>
                            <th style="width:9%" class="cur"><a href="javascript:void(0)" field="zdf" order="desc" class="desc">涨跌幅(%)<i></i></a></th>
                            <th style="width:6%"><a href="javascript:void(0)" field="zd">涨跌<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="hs">换手(%)<i></i></a></th>
                            <th style="width:10%"><a href="javascript:void(0)" field="cjl">成交量<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="syl">市盈率<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zs">昨收<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="kpj">开盘价<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zgj">最高价<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zdj">最低价<i></i></a></th>
                            <th style="width:7%">加自选</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="http://stockpage.10jqka.com.cn/APVO/" target="_blank">APVO</a></td>
                            <td><a href="http://stockpage.10jqka.com.cn/APVO/" target="_blank">Aptevo Therapeutics</a></td>
                            <td class="c-fall">2.11</td>
                            <td class="c-fall">58.65</td>
                            <td class="c-fall">0.78</td>
                            <td>49.92</td>
                            <td>1069.16万</td>
                            <td>--</td>
                            <td>1.33</td>
                            <td>2.42</td>
                            <td>2.47</td>
                            <td>2.05</td>
                            <td><a class="j_addStock" title="加自选" href="javascript:void(0);"><img src="./img/plus_logo.png" alt=""></a></td>
                        </tr>                   
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="mar m-pager-box2" board="dqs">
            <div class="top_title2" style="margin-bottom: 30px">
                <div class="left_border"></div>
                <p>道琼斯涨跌排行榜</p><span class="more"><a href="http://q.10jqka.com.cn/usa/detail/board/dqs/" target="_blank">更多&gt;&gt;</a></span>
            </div>

            <div class="dqs_maincont">               
                <table class="m-table m-pager-table">
                    <thead>
                        <tr>
                            <th style="width:4%">序号</th>
                            <th style="width:6%"><a href="javascript:void(0)" field="stockcode">代码<i></i></a></th>
                            <th style="width:10%">名称</th>
                            <th style="width:6%"><a href="javascript:void(0)" field="xj">现价<i></i></a></th>
                            <th style="width:9%" class="cur"><a href="javascript:void(0)" field="zdf" order="desc" class="desc">涨跌幅(%)<i></i></a></th>
                            <th style="width:6%"><a href="javascript:void(0)" field="zd">涨跌<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="hs">换手(%)<i></i></a></th>
                            <th style="width:10%"><a href="javascript:void(0)" field="cjl">成交量<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="syl">市盈率<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zs">昨收<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="kpj">开盘价<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zgj">最高价<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zdj">最低价<i></i></a></th>
                            <th style="width:7%">加自选</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="http://stockpage.10jqka.com.cn/GE/" target="_blank">GE</a></td>
                            <td><a href="http://stockpage.10jqka.com.cn/GE/" target="_blank">通用电气</a></td>
                            <td class="c-fall">25.14</td>
                            <td class="c-fall">2.40</td>
                            <td class="c-fall">0.59</td>
                            <td>0.68</td>
                            <td>5884.22万</td>
                            <td>29.88</td>
                            <td>24.55</td>
                            <td>24.60</td>
                            <td>25.30</td>
                            <td>24.49</td>
                            <td>
                                <a class="j_addStock" title="加自选" href="javascript:void(0);"><img src="./img/plus_logo.png" alt=""></a>
                            </td>
                        </tr>
                                                
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mar m-pager-box3" board="bp">
            <div class="top_title2" style="margin-bottom: 30px">
                <div class="left_border"></div>
                <p>标普500涨跌排行榜</p><span class="more"><a href="http://q.10jqka.com.cn/usa/detail/board/bp/" target="_blank">更多&gt;&gt;</a></span>
            </div>

            <div class="bp_maincont">               
                <table class="m-table m-pager-table">
                    <thead>
                        <tr>
                            <th style="width:4%">序号</th>
                            <th style="width:6%"><a href="javascript:void(0)" field="stockcode">代码<i></i></a></th>
                            <th style="width:10%">名称</th>
                            <th style="width:6%"><a href="javascript:void(0)" field="xj">现价<i></i></a></th>
                            <th style="width:9%" class="cur"><a href="javascript:void(0)" field="zdf" order="desc" class="desc">涨跌幅(%)<i></i></a></th>
                            <th style="width:6%"><a href="javascript:void(0)" field="zd">涨跌<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="hs">换手(%)<i></i></a></th>
                            <th style="width:10%"><a href="javascript:void(0)" field="cjl">成交量<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="syl">市盈率<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zs">昨收<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="kpj">开盘价<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zgj">最高价<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zdj">最低价<i></i></a></th>
                            <th style="width:7%">加自选</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="http://stockpage.10jqka.com.cn/COG/" target="_blank">COG</a></td>
                            <td><a href="http://stockpage.10jqka.com.cn/COG/" target="_blank">卡波特油气</a></td>
                            <td class="c-fall">26.87</td>
                            <td class="c-fall">5.17</td>
                            <td class="c-fall">1.32</td>
                            <td>2.17</td>
                            <td>1005.09万</td>
                            <td>--</td>
                            <td>25.55</td>
                            <td>25.55</td>
                            <td>26.95</td>
                            <td>25.55</td>
                            <td><a class="j_addStock" title="加自选" href="javascript:void(0);"><img src="./img/plus_logo.png" alt=""></a></td>
                        </tr>                       
                        </tbody>
                </table>
            </div>
        </div>

        <div class="mar m-pager-box4" board="nsdk">
            <div class="top_title2" style="margin-bottom: 30px">
                <div class="left_border"></div>
                <p>纳斯达克指数涨跌排行榜</p><span class="more"><a href="http://q.10jqka.com.cn/usa/detail/board/nsdk/" target="_blank">更多&gt;&gt;</a></span>
            </div>

            <div class="nsdk_maincont">               
                <table class="m-table m-pager-table">
                    <thead>
                        <tr>
                            <th style="width:4%">序号</th>
                            <th style="width:6%"><a href="javascript:void(0)" field="stockcode">代码<i></i></a></th>
                            <th style="width:10%">名称</th>
                            <th style="width:6%"><a href="javascript:void(0)" field="xj">现价<i></i></a></th>
                            <th style="width:9%" class="cur"><a href="javascript:void(0)" field="zdf" order="desc" class="desc">涨跌幅(%)<i></i></a></th>
                            <th style="width:6%"><a href="javascript:void(0)" field="zd">涨跌<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="hs">换手(%)<i></i></a></th>
                            <th style="width:10%"><a href="javascript:void(0)" field="cjl">成交量<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="syl">市盈率<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zs">昨收<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="kpj">开盘价<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zgj">最高价<i></i></a></th>
                            <th style="width:7%"><a href="javascript:void(0)" field="zdj">最低价<i></i></a></th>
                            <th style="width:7%">加自选</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="http://stockpage.10jqka.com.cn/WYNN/" target="_blank">WYNN</a></td>
                            <td><a href="http://stockpage.10jqka.com.cn/WYNN/" target="_blank">永利度假村</a></td>
                            <td class="c-fall">143.42</td>
                            <td class="c-fall">3.19</td>
                            <td class="c-fall">4.43</td>
                            <td>2.94</td>
                            <td>301.41万</td>
                            <td>54.06</td>
                            <td>138.99</td>
                            <td>141.40</td>
                            <td>144.81</td>
                            <td>140.85</td>
                            <td><a class="j_addStock" title="加自选" href="javascript:void(0);"><img src="./img/plus_logo.png" alt=""></a></td>
                        </tr>                   
                        </tbody>
                </table>
            </div>
        </div>


            <div class="cf">
                <div class="news_l ">
                <div class="top_title2">
                    <div class="left_border"></div>
                    <p>美股要闻</p><span class="more"><a href="http://stock.10jqka.com.cn/usstock/mggsxw_list/" target="_blank">更多&gt;&gt;</a></span>
                </div>
                <ul>
                    <li>
                        <a href="http://stock.10jqka.com.cn/usstock/20170905/c600298431.shtml" target="_blank" title="通用汽车8月中国销量增长12%">通用汽车8月中国销量增长12%</a><span class="right_date">2017-09-05</span>
                    </li>               
                </ul>
            </div>

            <div class="news_l ">
                <div class="top_title2">
                    <div class="left_border"></div>
                    <p>中概股新闻</p><span class="more"><a href="http://stock.10jqka.com.cn/usstock/zggxw_list/" target="_blank">更多&gt;&gt;</a></span>
                </div>
                <ul>
                    <li><a href="http://news.10jqka.com.cn/20170905/c600296183.shtml" target="_blank" title="大量使用大众点评信息 百度被判不正当竞争赔323万元">大量使用大众点评信息 百度被判不正...</a><span class="right_date">2017-09-05</span></li>
                </ul>
            </div>

            <div class="news_l no_r">
                <div class="top_title2">
                    <div class="left_border"></div>
                    <p>国际财经</p><span class="more"><a href="http://news.10jqka.com.cn/guojicj_list/" target="_blank">更多&gt;&gt;</a></span>
                </div>
                <ul>
                    <li><a href="http://news.10jqka.com.cn/20170905/c600299717.shtml" target="_blank" title="科恩接任美联储主席这事似乎又悬了">科恩接任美联储主席这事似乎又悬了</a><span class="right_date">2017-09-05</span></li>
                </ul>
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


</body>
</html>