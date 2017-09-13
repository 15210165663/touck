//@charset "gbk";

Date.prototype.Format = function(fmt)
{ //author: meizz
    var o = {
        "M+" : this.getMonth()+1,                 //月份
        "d+" : this.getDate(),                    //日
        "h+" : this.getHours(),                   //小时
        "m+" : this.getMinutes(),                 //分
        "s+" : this.getSeconds(),                 //秒
        "q+" : Math.floor((this.getMonth()+3)/3), //季度
        "S"  : this.getMilliseconds()             //毫秒
    };
    if(/(y+)/.test(fmt))
        fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));
    for(var k in o)
        if(new RegExp("("+ k +")").test(fmt))
            fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));
    return fmt;
};

var application = {
    _left:0,
    loadflag:true,
    totalnum:{"sc":0,"sd":0,"sn":0,"sr":0},
    loadnum:{"sc":0,"sd":0,"sn":0,"sr":0},
    codeRing:"",
    loadmoreflag:true,
    init:function(){
        this.toolDown();
        this.operate();
        this.getTodayInfo();
    },
    toolDown : function () {
        var btn = $(".outer .tool");
        var tool = $(".toolSlide");
        btn.on("click",function () {
            var clickStock ;
            var that = $(this);
            var _lt = that.offset().left,
                up = that.offset().top,
                height = that.height();
            if(that.attr("click-down")=="true"){
                application.toolhide(tool,btn);
            }else{
                tool.css({
                    left:_lt,
                    top:(up+height)
                }).removeClass("hide");
                that.attr("click-down",true);
            }
        });
        btn.blur(function(){
            clickStock =  setTimeout(function(){
                application.toolhide(tool,btn);
            },200);
        });
        tool.find("a").click(function(){
            clearTimeout(clickStock);
            application.toolhide(tool,btn);
        });
        $('.closebrand').click(function(){
            $(this).parent().addClass('hide');
        });
    },
    toolhide:function(tool,btn){
        tool.addClass("hide");
        btn.attr("click-down",false);
    },
    tabChange : function(){
        var itemc = $(".tab-box");
        var contents = $(".tab-container");
        $.each(itemc,function(i,v){
            var box = contents.eq(i);
            application.changeItem($(v),box);
        });
    },
    changeItem:function(pul,content){
        var that = this;
        var lis = pul.find("li");
        var items = content.find(".item");
        $.each(lis,function(i,v){
            var _cur = $(v);
            _cur.on("click",function(){
                if(!_cur.hasClass("active")){
                    _cur.addClass("active").siblings().removeClass("active");
                    items.eq(i).removeClass("hide").siblings().addClass("hide");
                    if(items.eq(i).find("li").length==1){
                        var type = items.eq(i).attr("load-type");
                        var num = that.totalnum[type]+1;
                        if(that.codeRing.length > 0){
                            application.loadListInfo(that.codeRing,type,num);
                        }else{
                            that.getCodeUrl(type,num);
                        }

                    }
                }
            });

        });
    },
    getCodeUrl:function(type,num){
        var that = this;
        var timer = new Date().getTime();
        $.ajax({
            url:"http://pop.10jqka.com.cn/getselfstockinfo.php?jsonp=callback"+timer,
            dataType:"jsonp",
            jsonpCallback:"callback"+timer,
            success:function(json){
                var code = application.pinjie(json,type);
                that.codeRing = code;
                application.loadListInfo(code,type,num);
            }
        });
    },
    loadDiscuss:function(code,type,num){
        var that = this;
        var urls = "http://comment.10jqka.com.cn/clienttoweb/weibo.php?&callback=_Callback&page=1&pnum=20&code="+code;
        $.ajax({
            url:urls,
            dataType:"jsonp",
            jsonpCallback:"Callback",
            success:function(json){
                that.getInfoNext(json.data,type);
            }
        });
    },
    pinjie:function(codes,type){
        var arr = "" ;
        //var flag = type== "discuss" ? "," : "|" ;
        var flag = ",";
        for ( var i = 0 ; i < codes.length ; i++ ) {
            var cur = codes[i] ;
            var code = cur.code ;
            arr += i == 0 ? code : flag+code ;
        }
        return arr ;
    },
    loadListInfo:function(code,type,num){
        var that = this;
        var timer = new Date().getTime();
        var urls = "http://pop.10jqka.com.cn/newsinfos.php?codes="+code+"&tp="+type+"&page="+num+"&callback=callback"+timer;
        $.ajax({
            url:urls,
            //jsonp:true,
            dataType:"jsonp",
            jsonpCallback:"callback"+timer,
            success:function(data){
                var box = $(".tab-container").find($('[load-type="'+type+'"]'));
                box.find("[load-flag]").remove();
                that.getInfoNext(data,type);
                that.loadmoreflag = true;
                if(typeof(newsloadCallback) == 'function'){
                    newsloadCallback(type,num);
                }
            }
        });
    },
    getInfoNext:function(data,type){
        var that = this;
        for(var i in that.loadnum){
            if(i == type){
                that.loadnum[i] = data.page;
                that.totalnum[i] = data.pageSum;
            }
        }
        that.createDom(data,type);
        if(that.loadflag){
            that.loadMoreInfo();
            that.loadflag=false;
        }
    },
    loadMoreInfo:function(){
        var that = this;
        var scroll,curtab,type,curnum,loadbtn;
        $(window).scroll(function(){
            scroll = $(window).scrollTop();
            curtab = $(".tab-box .active");
            type = curtab.attr("load-type");
            curnum = application.loadnum[type];
            var box = $(".tab-container").find($('[load-type="'+type+'"]'));
            if(scroll >= $(document).height()-$(window).height()-100){
                if(that.loadmoreflag){
                    that.loadmoreflag = false;
                    loadbtn = box.find("[load-flag]").last();
                    if(loadbtn.hasClass("loadmore")){
                        loadbtn.html("正在加载中...");
                        setTimeout(function(){
                            that.loadListInfo(that.codeRing,type,parseInt(curnum)+1);
                        },600);
                    }else{
                        loadbtn.html("正在加载中...");
                        setTimeout(function(){
                            loadbtn.html("没有更多");
                        },600);
                    }

                }

            }
        });
    },
    createDom:function(data,type){
        var box = $(".tab-container").find('[load-type="'+type+'"]');
        for(var i = 0 ; i < data.nlist.length ; i++){
            var li = application.createLi(data.nlist[i],type);
            box.append(li);
        }
        var loadtxt,cls;
        if(application.loadnum[type] < application.totalnum[type]){
            loadtxt = "下拉加载更多";
            cls = "loadmore";
        }else{
            loadtxt = "没有更多";
            cls = "loadover";
        }
        if(box.find('[load-flag]').length==0){
            var btm = $("<li load-flag='"+cls+"' class='"+cls+"'>"+loadtxt+"</li>");
            btm.insertAfter(box.children("li").last());
        }else{
            $(['load-flag']).removeClass().addClass(cls).attr("load-flag",cls);
            $(['load-flag']).html(loadtxt);
        }

    },
    createLi:function(item,type){
        var that = this;
        if ('sn' == type) {
            var time = that.getShowTime(parseInt(item.indextime));
        } else {
            var time = that.getShowTime(item.ctime);
        }

        var url = '';
        if (type == 'sr') {
            url = "http://vis.10jqka.com.cn/free/viewzy/index/seq/"+item.guid+"/stockCode/"+item.stockCode;
        } else {
            url = item.seq ?
            ( type="sc" ?
            "http://news.10jqka.com.cn/"+time['ymd']+"/c"+item.seq+".shtml" :
            "http://news.10jqka.com.cn/field/"+type+"/"+time['ymd']+"/"+item.seq+".shtml" ) : item.url;
        }
        


        var source = item.source!=undefined? '（'+item.source+'）' : '';
        var source = type=='sd' ? item.source : $(".tab-box .active").find("a").html();
        var tag = source,

            receive = (type == 'sc' ?
            '<a href="###" class="receive collect-btn" data-title="'
            +item.title+'" data-url="'+url+'" data-intro="'+item.summ+'">收藏</a>' : '');

        var commentWithUrl = '<a href="http://stock.10jqka.com.cn/comment/'
                +item.seq+'.shtml" class=comment target="_blank">评论（'+item.comment+'）</a>',
            commentnum = '<span class="comment">评论（'+item.comment+'）</span>';

        var link = item.comment!=undefined ? (item.seq ? commentWithUrl : commentnum ) : '';

        var infotitle = '<div class="ltitle sharecontent"><a href="'+url+'" target="_blank">'
            +item.title+'</a></div><div style="word-break: break-all;"><span>'+item.summ+'</span>';
        var sub_content = '<div style="word-break: break-all;"><span class="sharecontent">'
                            +item.title+'：</span>';
        var commen_content = '<a href="'+url+'" target="_blank">'+url+'</a></div>';
        var content = item.summ!=undefined ? infotitle+commen_content : sub_content+commen_content;


        var li = "<li><a href='http://stockpage.10jqka.com.cn/"
            + item.stockCode + "/' target='_blank' class='stockIcon'><i>"
            + item.stockCode + "</i></a><div class='detail'><a href='http://stockpage.10jqka.com.cn/"
            + item.stockCode + "' target='_blank' class='lname'>"+ item.stockName+"（"+item.stockCode+"）：</a>"
            + content +"<div class='btm_op clearfix'><span class='time'>"+ time['ymdsh']
            +"</span><span>"+tag+"</span><span class='ops'><a href='###' class='share' tabindex='-1'>分享</a>"
            +receive+link+"</span></div></li>";
        return $(li);
    },
    getShowTime:function(clock){
        var arr=[],showdate;
        var date = new Date();
        var cur = new Date(parseInt(clock)*1000);
        var sec = new Date(cur).Format("MM-dd hh:mm");
        var ymd = new Date(cur).Format("yyyyMMdd");
        arr.push({"ymd":ymd,"ymdsh":sec});
        return arr[0];
    },

    getTodayInfo:function(){
        var container = $("#curDate-box");
        var date = new Date();
        var mm = date.getMonth()+1;
        var day = date.getDate();
        var week = date.getDay();
        var weekturn = {"1":"一","2":"二","3":"三","4":"四","5":"五","6":"六","7":"日"};
        container.html(mm+"-"+day+"星期"+weekturn[week]);
    },
    operate:function (){
        var _btm = $(".rightCol").find(".bottom");
        $(window).scroll(function(){
            var distance = $(window).scrollTop();
            if(distance >=1500 || distance >= ( $(document).height() - $(window).height() ) ){
                _btm.attr("data-flag","true");
                _btm.html("Top");
                _btm.addClass("top");
            }else{
                _btm.html("bottom");
                _btm.attr("data-flag","false");
                _btm.removeClass("top");
            }
        });

        _btm.click(function(){
            if(!(_btm.attr("data-flag")=="true")){
                var _height = window.document.body.scrollHeight;
                $("html,body").animate({scrollTop:_height},800);
                _btm.html("顶部");
                _btm.attr("data-flag","true");
                _btm.addClass("top");
            }else{
                $("html,body").animate({scrollTop:0},800);
                _btm.html("底部");
                _btm.attr("data-flag","false");
                _btm.removeClass("top");
            }

        });
    }
};
application.init();

