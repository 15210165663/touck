//@charset "gbk";
function getUser(){
    var user = new Array();
    var uname = unescape(unescape(THS.cookie.get("escapename")));
    if(uname.length>0){
        user['uname'] = uname;
    }
    var userid = unescape(unescape(THS.cookie.get("userid")));
    if(userid.length>0){
        user['userid'] = userid;
        user['avatar'] = 'http://space.10jqka.com.cn/avatar/' + (parseInt(userid)%10000) + '/' + userid + '.gif';
    }
    return user;
}

function isLogined(){
    var uname=unescape(unescape(THS.cookie.get("escapename")));
    if(uname.length>0){
        return true;
    }else{
        return false;
    }
}
$(document).ready(function(){
    var locationhost = window.location.host;
    $('.homeloginout').click(function(){
        if (locationhost.indexOf('10jqka.com.cn') > -1) {
            window.location.href="http://upass.10jqka.com.cn/logout?redir=HTTP_REFERER";
        } else {
            window.location.href='http://upass.10jqka.com.cn/logout?redir='+ encodeURIComponent('http://' + 'upass.300033.info/logout?redir=' + encodeURIComponent(window.location.href));
        }
    });
    if(isLogined()){
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
        /*$("#J_username").attr("href",uid);*/
    }else{
        $(".unloginbox").removeClass("hide");
        $(".loginedbox").addClass("hide");
    }
});
