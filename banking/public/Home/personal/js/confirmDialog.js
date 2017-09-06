//@charset "gbk";
var dialog = function (){
    this.title = "";
    this.subtitle = "";
    this.confirmtxt = "确定";
    this.canceltxt = "取消";
    this.banscroll = false;
    this.width = 400;
    this.height = 140;
    this.deltime = 1000;
    this.nodeE = $(".data_panel");
};
dialog.prototype.init = function(elements){
    this.elements = elements;
    this.createdialog(elements);
};
dialog.prototype.createdialog = function(ops){
    var that = this;
    var box = that.basicDom(ops);
    //var width = ops.width ? ops.width : that.width;
    $("body").append(box);
    var width = box.width()==0 ? $(".dialog_panel").width() : box.width();
    var height = ops.height ? ops.height : that.height;
    var delt = ops.deltime ? ops.deltime : that.deltime;
    var nw = that.nodeE.width();
    var nh = that.nodeE.height();
    var ost = that.nodeE.offset();
    box.css({
        left:ost.left+nw/2-width/2,
        top:$(window).height()/2 -height/2
    });
    //var height = $(window).height();
    if(ops.banscroll){
        $("body").css("overflow-y","hidden");
    }
    //box.find(".dialog_mask").css("height",height);
    if(ops.ok){
        that.closePanel(box,ops);
    }else{
        //box.css("margin-left",-($(".rmv_succeed").width()/2));
        setTimeout(function(){
            that.clearBox(box,ops);
        },delt);
    }
};
dialog.prototype.basicDom = function(ops){
    var that = this;
    var btm = ops.ok ? '<div class="dialog_panel"><div class="dialog_title"><span>'+ops.title+'</span><a href="###" class="dialog_close"></a></div><div class="dialog_content"><p>'+ops.subtitle+'</p><div class="dialog_btm"><a href="###" class="d_confirm">'+this.confirmtxt+'</a><a href="###" class="d_cancel">'+this.canceltxt+'</a></div>' : "<div class='rmv_succeed'>"+ops.subtitle+"</div>";
    var box = $('<div id="dialog"><div class="dialog_mask"></div>'+btm+'</div>');
    return box;
};
dialog.prototype.clearBox = function(box,ops){
    box.remove();
    if(ops.banscroll){
        $("body").css("overflow-y","auto");
    }
};

//关闭弹窗
dialog.prototype.closePanel = function(box,ops){
    var rmvbtn = box.find(".dialog_close"),
        confirm = box.find(".d_confirm"),
        cancel = box.find(".d_cancel");
    rmvbtn.on("click",function(){
        dialog.clearBox(box,ops);
    });
    confirm.on("click",function(){
        var result = ops.ok();
        var txt;
        if(result){
            txt = "删除成功";
        }else{
            txt = "删除失败，请重删";
        }
        dialog.reactRemove(box,ops,txt);
    });
    cancel.on("click",function(){
        dialog.clearBox(box,ops);
        ops.cancel();
    });
};

//删除反馈
dialog.prototype.reactRemove = function(box,ops,txt){
    var time = ops.deltime ? ops.deltime : this.deltime;
    box.find(".dialog_panel").remove();
    var panel = $("<div class='rmv_succeed'>"+txt+"</div>");
    //box.append(panel).css("margin-left",-(panel.width()/2));
    var nw = this.nodeE.width();
    var ost = this.nodeE.offset();
    box.append(panel).css({
        left:ost.left+nw/2-panel.width()/2,
        top:$(window).height()/2 -panel.height()/2
    });
    setTimeout(function(){
        dialog.clearBox(box,ops);
    },time);
};
/*
var dialog ={
    defaults:{
        title:"",
        subtitle:"",
        confirmtxt:"确定",
        canceltxt:"取消",
        banscroll:false,
        width:360,
        height:140,
        deltime:1000
    },
    arr:{
        title:"",
        subtitle:"",
        confirmtxt:"确定",
        canceltxt:"取消",
        banscroll:false,
        width:360,
        height:140,
        deltime:1000
    },
    init:function(config){
        var ops = $.extend(dialog.defaults,config);
        this.createdialog(ops);
        dialog.defaults = this.arr;
    },

    //创建弹窗
    createdialog:function(ops){
        var box = dialog.basicDom(ops);
        box.css({
            "margin-left":-(ops.width/2),
            "margin-top":-(ops.height/2)
        });
        //var height = $(window).height();
        if(ops.banscroll){
            $("body").css("overflow-y","hidden");
        }
        //box.find(".dialog_mask").css("height",height);
        $("body").append(box);
        if(ops.ok){
            dialog.closePanel(box,ops);
        }else{
            box.css("margin-left",-($(".rmv_succeed").width()/2));
            setTimeout(function(){
                dialog.clearBox(box,ops);
            },ops.deltime);
        }

    },
    //弹窗DOM
    basicDom:function(ops){
        var that = this;
        var title = ops.title ? ops.title : that.title;
        var sub_tt = ops.subtitle ? ops.subtitle : that.subtitle;
        var btm = ops.ok ? '<div class="dialog_panel"><div class="dialog_title"><span>'+title+'</span><a href="###" class="dialog_close"></a></div><div class="dialog_content"><p>'+sub_tt+'</p><div class="dialog_btm"><a href="###" class="d_confirm">'+that.confirmtxt+'</a><a href="###" class="d_cancel">'+that.canceltxt+'</a></div>' : "<div class='rmv_succeed'>"+sub_tt+"</div>";
        var box = $('<div id="dialog"><div class="dialog_mask"></div>'+btm+'</div>');
        return box;
    },

    clearBox:function(box,ops){
        box.remove();
        if(ops.banscroll){
            $("body").css("overflow-y","auto");
        }
    },

    //关闭弹窗
    closePanel:function(box,ops){
        var rmvbtn = box.find(".dialog_close"),
            confirm = box.find(".d_confirm"),
            cancel = box.find(".d_cancel");
        rmvbtn.on("click",function(){
            dialog.clearBox(box,ops);
        });
        confirm.on("click",function(){
            var result = ops.ok();
            var txt;
            if(result){
                txt = "删除成功";
            }else{
                txt = "删除失败，请重删";
            }
            dialog.reactRemove(box,ops,txt);
        });
        cancel.on("click",function(){
            dialog.clearBox(box,ops);
            ops.cancel();
        });
    },


    //删除反馈
    reactRemove:function(box,ops,txt){
        box.find(".dialog_panel").remove();
        var panel = $("<div class='rmv_succeed'>"+txt+"</div>");
        box.append(panel).css("margin-left",-(panel.width()/2));
        setTimeout(function(){
            dialog.clearBox(box,ops);
        },ops.deltime);
    }
};*/
