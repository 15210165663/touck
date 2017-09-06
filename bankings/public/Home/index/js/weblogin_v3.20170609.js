
function testLogin(){
  var uname=unescape(unescape(THS.cookie.get("escapename")));
  if(uname.length>0){
      return true;
  }else{
      return false;
  }
}


window.pullLogin = function()
{
	var str = '<div id="weblogfeed" style="background:#000;position:fixed;left:0;top:0;width:100%;height:100%;opacity:.5;filter:alpha(opacity=60);z-index:9989"></div><iframe id="weblogframe" style="position:fixed;left:50%;top:50%;background:#fff;z-index:9990;margin-top:-173px;margin-left:-162px" width=325 height=348 frameborder=0 src="http://upass.10jqka.com.cn/login?act=loginByIframe&isframe=1&view=web_quick&redir=http://www.10jqka.com.cn/300033info/login/redir.shtml"></iframe>';
	$("body").append(str);
	$("#weblogfeed").on("click",function(){
		$("#weblogframe").remove();
		$("#weblogfeed").remove();

	});
}

if(!testLogin()){
	document.domain="10jqka.com.cn";
	var str = '<iframe id="weblogframe2"  width=0 height=0 frameborder=0 src="http://www.10jqka.com.cn/300033info/login/loginplugin.shtml"></iframe>';
	$("body").append(str);

}
