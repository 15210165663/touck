//@charset "gbk"
$(document).ready(function() {
    //初始化

    var shareTimer;
    //share
    $('.share').live('click',function(){
        if(shareTimer){
            clearTimeout(shareTimer);
        }
        if($("#sns_share").length == 0){
            var snsshare = '<div id="sns_share" class="share_zone" style="display: none;"><span class="fr"><a class="share_sina share_icon fl" href="javascript:void(0);" title="分享到新浪微博"><em>新浪微博</em></a><a class="share_qqzone share_icon fl" href="javascript:void(0);" title="分享到QQ空间"><em>QQ空间</em></a></span><div class="ewm" style="display: none;"><img src="" alt="二维码" width="100" height="100"></div></div>';
            $("body").append($(snsshare));
        }
        if($(this).parents('.ops').find('#sns_share').length>0){
            if($('#sns_share').is(':hidden')){
                $('#sns_share').show();
                $('#sns_share .ewm').hide();
                setShareParam();
            }else{
                $('#sns_share').hide();
            }
        }else{
            $('#sns_share').insertBefore($(this));
            $('#sns_share').show();
            $('#sns_share .ewm').hide();
            setShareParam();
        }
    });
    $('.share').live("blur",function(){
        shareTimer = setTimeout(function(){
            $('#sns_share').hide();
        },200);
    });
    $(".share_icon").live("click",function(){
        clearTimeout(shareTimer);
        $('#sns_share').hide();
    });

    // 微信分享
    $('.share_weixin,.share_friends').click(function(){
        var $ewm = $(this).parents('.share_zone').find('.ewm');
        var top,left;
        if($(this).parents().hasClass('fixedbar')){
            top = $(this).position().top + 25;
            left = $(this).position().left - $ewm.width() - 20;
        }else{
            top = $(this).position().top - 130;
            left = $(this).position().left;
            // $(this).parents('.share_zone').hide();
        }
        $ewm.css({
            'top':top,
            'left':left
        })
        $ewm.show();
    });
    $('body').click(function(e) {
        var target = $(e.target);
        if (target.closest('#sns_share').length == 0 ) {
            if(target.parents('#sns_share').length == 0){
                $('#ewm').hide();
            }
        }
    });

    $('.share-btn').mouseenter(function(){
        $(this).slideUp();
        $(this).next('.share_zone').slideDown();
    })
    $('.fixedbar').mouseleave(function(){
        $(this).find('.share-btn').slideDown();
        $(this).find('.share_zone').slideUp();
        $(this).find('.ewm').hide();
    })
    //回到顶部
    $('.gotop').click(function(){
        $('body,html').animate({scrollTop: '0px'});
    })

    function setShareParam(){
        var shareTitle = '「' + $("#sns_share").parents(".detail").find('.sharecontent').html() + '」-- 来自同花顺';
        var picShare = 'http://www.xuanfengge.com/wp-content/themes/lee2.0/images/piano.jpg';

        $('#sns_share').snsShare({
            sina:{
                url : encodeURIComponent(window.location.href),
                title: shareTitle,
                pic: picShare
            },
            renren:{
                url : encodeURIComponent(window.location.href),
                title: shareTitle,
                pic: picShare
            },
            qq:{
                url : encodeURIComponent(window.location.href),
                title: shareTitle,
                pic: picShare
            },
            qqzone:{
                url : encodeURIComponent(window.location.href),
                title: shareTitle,
                pic: picShare
            }
        });
    }
/*    function setFixedShareParam(){
        var shareTitle = '「' + document.title + '」-- 来自同花顺';
        var picShare = 'http://www.xuanfengge.com/wp-content/themes/lee2.0/images/piano.jpg';

        $('#fixed_sns_share').snsShare({
            sina:{
                url : encodeURIComponent(window.location.href),
                title: shareTitle,
                pic: picShare
            },
            renren:{
                url : encodeURIComponent(window.location.href),
                title: shareTitle,
                pic: picShare
            },
            qq:{
                url : encodeURIComponent(window.location.href),
                title: shareTitle,
                pic: picShare
            },
            qqzone:{
                url : encodeURIComponent(window.location.href),
                title: shareTitle,
                pic: picShare
            }
        });
    }
    setFixedShareParam();*/

    //圈子表情
    function setEditorFace(){
        var defaults = {
            faceClickCallback: function(dom) {
                var $dom = $(dom);
                var $img = $dom.find('img');
                var textVal = $('#addcomment').val();
                if($img.length == 1){
                    textVal += $img.attr('title');
                }
                $('#addcomment').val(textVal);
            },
            //facaDataUrl: faceData,
            trigger: "#edui13_body",
            $input: ""
        };
       // new EditorFace(defaults);
    }
 /*   if(isLogined()){
        //setEditorFace();
        $('#comunlogin').hide();
        //$(".unlogin").hide();
        $('#addcomment').removeClass("hide");
        var user = getUser();
        var uname = user['uname'];
        var uid = "http://t.10jqka.com.cn/"+user['userid'];
        $(".unloginbox").addClass("hide");
        $(".loginedbox").removeClass("hide");
        $("#J_username").html(uname);
        $("#J_username").attr("href",uid);
    }*/

});

