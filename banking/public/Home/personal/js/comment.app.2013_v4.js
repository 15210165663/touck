//@charset "gbk";
var shareSwitch = true;
var loadnum = 10;
var maxreply = 140;
var sequence = '';
var precomment = '';
var baseurl = window.location;
var nowtype = 'common';
var nowcommentid = 0;
var uppedcomments = new Array();
var getnums = new Array();
getnums['common'] = 0;
getnums['hot'] = 0;
getnums['old'] = 0;


// 请求链接
var sns_comment = {};
sns_comment.core = {
		DiscussUrl:{
			getDiscussList: 	'http://t.10jqka.com.cn/api.php?method=newcircle.getCommentFlow&return=jsonp',
			replyPost: 			'http://t.10jqka.com.cn/api.php?method=newcircle.addComment&return=jsonp',
			newsPostToSns: 	'http://comment.10jqka.com.cn/commentcheck.php?act=inic&seq=' ,
			getPid: 				'http://comment.10jqka.com.cn/commentcheck.php?act=detail&seq=' 
		},
		config:{},
		store:{}
};


    /**
     * [Protocol description]
     * @param {[Object]} options [
     * {
     *     "successCallback": 成功返回error=0的回调函数, 
     *     "failCallback": 成功返回error!=0的回调函数, 
     *     "beforeSendCallbck": 发送请求之情的回调函数,
     *     "url": ajax请求url必填
     *     "data": {ajax请求的参数} // 必须是Object防止发送的内容有+=被转义
     * }]
     */
    function Protocol(options){

        var defaults = {
            "async": true,
            "cache": false,
            "timeout": 100000,
            "type": "GET",
            "dataType": "JSON",
            "isShowError": true,
            "data": {}
        };
        // 请求是否正常响应，防止重复点击多次发请求
        var isConnectOK = false;

        var options = $.extend({}, defaults, options);

        function resetRepeatSumbmit(options){
            var $target = options.$target;
            if(!!$target){
                $target.attr('disableSumbmit', 'false');
            }
        }
        function initRepeatSumbmit(options){
            var $target = options.$target;
            if(!!$target){
                if($target.attr('disableSumbmit') == "true"){
                    return true;
                }
                $target.attr('disableSumbmit', 'true');
                
            }
            return false;
        }
        // 避免重复点击重复提交的bug
        if(initRepeatSumbmit(options)){
            return true;
        }
        if(isConnectOK){
            return true;
        }
        /**
         * [successHandler 返回成功的回调函数]
         * @param  {[Object]} options [description]
         * @param  {[Object]} result  [ajax返回的内容]
         * @return {[type]}         [执行相应的回调函数]
         */
        function successHandler(options, result){

            if( parseInt(result.errorCode) === 0){
                if( $.isFunction(options.successCallback) ){
                    options.successCallback(result, options);    
                }
            } else {
                if( $.isFunction(options.failCallback) ){
                    options.failCallback(result, options);    
                }
            }
            resetRepeatSumbmit(options);

        }
        /**
         * [errorHandler 打印错误信息]
         * @param  {[Object]} options        [description]
         * @param  {[type]} XMLHttpRequest [description]
         * @param  {[type]} textStatus     [description]
         * @param  {[type]} errorThrown    [description]
         * @return {[type]}                [console 输出错误内容]
         */
        function errorHandler(options, XMLHttpRequest, textStatus, errorThrown){
            if(options.isShowError && navigator.userAgent.indexOf("WebKit") > 0){
            }
            resetRepeatSumbmit(options);
        }
        
        $.ajax({
            url         : options.url,
            data        : options.data,
            type        : options.type,
            async       : options.async,
            cache       : options.cache,
            dataType    : options.dataType,
            jsonp: "callback",
            beforeSend  : function() {
                isConnectOK = true;
                if( $.isFunction(options.beforeSendCallback) ){
                    options.beforeSendCallback(options);
                }
                
            },
            timeout     : options.timeout,
            error       : function(XMLHttpRequest, textStatus, errorThrown) {
                isConnectOK = false;
               errorHandler(options, XMLHttpRequest, textStatus, errorThrown);
            },
            success     : function(result) {
                isConnectOK = false;
                successHandler(options, result);
            }
        });
    }

function initCommentEv()
{
	showCommentBox();
	 var getPidUrl = sns_comment.core.DiscussUrl.getPid+ sns_comment.core.config.seq + '&'+Math.random();
	 
	 $.ajax({
		 url: getPidUrl,
		 dataType: "jsonp",
		 cache: true,
		 jsonp: false,
		 jsonpCallback: "loaddata",
		 success: function( result ){
			 if(result.tid && parseInt(result.tid) > 0){
				 sns_comment.core.config.pid = result.tid;
				 sequence =  result.tid;
				 $('#comment_common_more').show();
				 var cnum = (result.cnum)?parseInt(result.cnum):0;
				 var rnum = (result.rnum)?parseInt(result.rnum):0;
				 var pnum = (result.pnum)?parseInt(result.pnum):0;
				 $('.ctnum').html(cnum+rnum);
				 $('.cjnum').html(cnum+rnum+pnum);
				 LoadComment(sequence,'common',0,10);
				 
			 } else {
				$('#nocomdata').show();
			
				/**初始化环境**/
			 }
		  }
	 });
}

function getHots(pid){
	$.getJSON("http://bbsclick.10jqka.com.cn/clicks.php?type=likes&action=getList&limit=3&parent=pid&app=sns&return=jsonp&key="+pid+"_"+pid+"&callback=?", function(json){
			if(json.errorcode == '0'){
				var cids = [],k=0;
				for(i in json.result) {
					var tmp=i.split('_');
					if  (json.result[i].likes>9) {
						cids[k++] = tmp[1]+'_'+tmp[0];
					}
				}
				getCommentsByIds(cids.join(','),
					function(result){
						if(result.reply){
							var comments = result.reply;
							var con = document.createElement('div');
							conid = 'comment_hots';
							con.id = conid;
							var Buffer = [],i=0;
							var appendHeight = 0;
							$.each(comments, function(key, item) {
								 Buffer[i++] = CommentHtml(item,'tophot');
							});
							con.innerHTML = Buffer.join('');
							document.getElementById('comment_follow_container').appendChild(con);
							$('#hotsub').show();
							for(i in json.result) {
								var tmp=i.split('_');
								$('#comment_agreenum_tophot_'+tmp[1]).html(json.result[i].likes);
							}
						} 
					}
				);
			}
		});
}

function getCommentsByIds(ids,callback)
{
	if (ids) {
		$.getJSON('http://t.10jqka.com.cn/api.php?method=newcircle.getCommentListByIds&id='+ids+'&return=jsonp&callback=?', function(json){
			if(json.errorCode == '0'){	
				callback(json.result);
			}
		});
	}
	
}

function updatePnum(type){
		 $.ajax({
			 url: 'http://comment.10jqka.com.cn/commentcheck.php?act=upnum&seq='+sns_comment.core.config.seq+'&tid='+sns_comment.core.config.pid+'&ntype='+type,
			 dataType: "jsonp",
			 cache: true,
			 jsonp: false,
			 jsonpCallback: "loaddata",
			 success: function( result ){
			}
		 });
		 if (type == 'pnum') {
				
		 } else {
				$('.ctnum').html((parseInt($('.ctnum').html())+1) + '');
				$('.cjnum').html((parseInt($('.cjnum').html())+1) + '');
		 }
}


/**yyyy-MM-dd hh:mm:ss**/
   function formatDate (date, fmt) {
	   var o = {
		        "M+": date.getMonth() + 1, //月份 
		        "d+": date.getDate(), //日 
		        "h+": date.getHours(), //小时 
		        "m+": date.getMinutes(), //分 
		        "s+": date.getSeconds(), //秒 
		        "q+": Math.floor((date.getMonth() + 3) / 3), //季度 
		        "S" : date.getMilliseconds() //毫秒 
		    };
	    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (date.getFullYear() + "").substr(4 - RegExp.$1.length));
	    for (var k in o)
	    if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
	 	return fmt;
   }

function initCommentBox(boxid){
	if(isLogined()){
		if (boxid) {
			boxid = 'addcomment' + boxid;
		} else {
			boxid = 'addcomment';
		}
		if ($('#' + boxid).val() == '我想说....') {
			$('#' + boxid).val('');
		}
	} else {
		//登陆框
		ThsLogin.showLoginBox('http://news.10jqka.com.cn/yaowen/redir.shtml');
	}
}


function loginbyjsonp(num){
	var username = $('#uname').val();
	var password = $('#passwd').val();
	var href = 'http://upass.10jqka.com.cn/login?act=loginByJsonp&username='+username+'&password='+password+'&inCharset=gbk&callback=?';
	$.getJSON(href,function(jsonp){
		if (jsonp.errorcode == 0) {
			location.reload();
		} else {
			alert('用户名或者密码错误，登录失败！');
		}
	});
}


function initCommentPInfo(callback){
		$.ajax({
                url: sns_comment.core.DiscussUrl.newsPostToSns+  sns_comment.core.config.seq, 
                dataType: "jsonp",
                cache: true,
				jsonp: false,
				jsonpCallback: "loaddata",
                success: function( json ){
                    sns_comment.core.config.pid = json.result;
					var intchck = setInterval(function(){
						callback();
						clearInterval(intchck);
					},3000);
					
                },
                error: function(){
                }
            });
}


function discussPost(oData){        
		oData.pid = sns_comment.core.config.pid;
		if(parseInt(oData.pid) == 0 ){
			alert('系统异常,请稍后再试');
			return false;
		}
        Protocol({
            "dataType": "JSONP",
            "data": oData,
            "url": sns_comment.core.DiscussUrl.replyPost,
            "successCallback": function(result, options){
				analogSub(oData.content, oData.userid, oData.uname, oData.avatar, oData.utime) ;
				if (oData.rid > 0) {
					updatePnum('rnum');
					TA.log({id:'zx_nreply', _sid:'imgzx'});
				} else {
					updatePnum('cnum');
					TA.log({id:'zx_ncomments', _sid:'imgzx'});
				}
				if (typeof(commentSuccessCallback) == 'function') {
					commentSuccessCallback();
				}
            },
            "failCallback": function(result, options){

            }
        });
}


function checkSbmit(formid){
	if(isLogined()){
		if(formid){
			boxid = 'addcomment' + formid;
			initCommentBox(formid);
		}else{
			formid = '';
			initCommentBox();
			boxid = 'addcomment';
		}
		nowtext = $('#'+boxid).val();
		nowtext = nowtext.replace(/\n/gi,"");
		if(nowtext.length > maxreply){
			alert('发言超出' + maxreply + '字了~');	
		}else{	
			if((nowtext.replace(/\n/gi,"")).replace(/ /g,"") == ''){
				alert('先说些什么再发表吧');
				$('#'+boxid).val('');
			}else if($('#'+boxid).val()==precomment){
				alert('不要灌水哦~');
			}else{
				if(sns_comment.core.config.seq){
					precomment = $('#'+boxid).val();
					if((precomment.replace(/\n/gi,"")).replace(/[^\x00-\xff]/g, 'xx').length > 4 ){
						user = getUser();
						var oData = {};
						oData.rid = "0";
						if (formid) {
							var tmp = formid.split('_');
							oData.rid   = tmp[1];
						}
						oData.content = $('#'+boxid).val();
						oData.userid   = user['userid'];
						oData.uname   = user['uname'];
						oData.avatar   = user['avatar'];
						oData.utime = formatDate(new Date(), 'MM-dd hh:mm');
						// Todo to 如何传
						oData.to = oData.userid;
						if  (!sns_comment.core.config.pid) {
							initCommentPInfo(function(){discussPost(oData);});
						} else {
							discussPost(oData);
						}
					}else{
						alert('多写点吧~');
					}
				}else{
					alert('系统出错了~');
				}
			}
		}
	}else{
		alert('马上登陆，就可以发言了~');
	}
}

function analogSub(content, userid, uname, avatar, utime) {
	var Buffer = [],i=0;
	Buffer[i++] = '<div><div class="photo-box"><a href="http://t.10jqka.com.cn/' + userid + '" target="_blank"><img src="' + avatar + '" width="50" height="50"></a></div>';
	Buffer[i++] = '<div class="conts-box"><div class="text"><div class="top"><span class="time fr">'+ utime +'</span><a  href="http://t.10jqka.com.cn/' + userid + '" target="_blank">'+uname+'</a></div><p>'+content+'</p>';
	Buffer[i++] = '</div></div></div>';
	$("<div id='analogSub'>"+Buffer.join('')+"</div>").insertBefore($('#comment_'+nowtype+'_container').find('div').eq(0));
	window.location = '#analogSub';
	$('#comment_'+nowtype+'_container').show();
	$('#nocomdata').hide();
	alert('成功点评！');
	showCommentBox();
}

function commit_comment_option(commentid, option , seq , type){
	if(uppedcomments[commentid]){
		alert('投票失败~不能重复投的~ ');	
	}else{
		$.getJSON("http://bbsclick.10jqka.com.cn/clicks.php?action=add&key="+seq+"_"+commentid+"&app=sns&num=1&type=likes&parent=pid&return=jsonp&callback=?", function(json){
		//	if(json.errorcode == '0'){
				var num = parseInt($('#comment_agreenum_' + type + '_' + commentid).html());
				num++;
				var types = new Array('common','tophot');
				for(k in types){
					if($('#comment_agreenum_' + types[k] +'_' + commentid).length > 0){
						$('#comment_agreenum_' + types[k] + '_' + commentid).html(num+' ');
						$('#comment_agree_' + types[k] + '_' + commentid).addClass('selectedAgree');
					}
				}
				$('.cjnum').html((parseInt($('.cjnum').html())+1) + '');
				/*alert('谢谢~');*/
				uppedcomments[commentid] = 1;
				
					TA.log({id:'zx_ngreat', _sid:'imgzx'});
			//}else{
			//	alert('投票失败~不能重复投的~ ');
			//}
			if(json.errorcode == '0'){
				updatePnum('pnum');
			}
		});
	}
}

function commentReply(commentid,type){
	if(isLogined()){
		nowcommentid = commentid;
		if($('#huifubox_' + type +'_' + commentid).length == 0){
			var reply_form = '';
			var Buffer = [],i=0;
			Buffer[i++] = $('#comment_' + type + '_' + commentid).html();
			Buffer[i++] = '<div class="input-box" id="huifubox_' + type +'_' + commentid+'">';
			Buffer[i++] = '<form method="post" action="http://post.10jqka.com.cn/" name="commentform' + type +'_' + commentid + '" id="commentform' + type +'_' + commentid + '" target="comdes">';
			Buffer[i++] = '<input type="hidden" value="' + sequence + '" id="commentseq" name="seq">';
			Buffer[i++] = '<input type="hidden" name="commentid" value="' + commentid + '" />';
			Buffer[i++] = '<textarea name="content" onkeydown="javascript:isEnter(event,this)" class="textareas" id="addcomment' + type +'_' + commentid + '"  onclick="initCommentBox(\'' + type +'_' + commentid + '\');"' + '>我想说....</textarea>';
			Buffer[i++] = '<span class="over" type="button" onclick="javascript:checkSbmit(\'' + type +'_' + commentid+'\')"></span>';
			Buffer[i++] = '</form></div>';
			$('#comment_' + type + '_' + commentid).html(Buffer.join(''));
			if(document.getElementById('comment_' + type +'_' + commentid).style.display == 'none'){
				$('#comment_replybtn_' + type + '_' + commentid).addClass('selected');
				$('#comment_' + type +'_' + commentid).show();
				setTextareaWidth('#comment_' + type + '_' + commentid);
			}else{
				$('#comment_replybtn_' + type + '_' + commentid).removeClass('selected');
				$('#comment_' + type +'_' + commentid).hide();
			}
		}else{
			if($('#comment_reply_' + type +'_' + commentid).length == 0){
				if(document.getElementById('comment_' + type +'_' + commentid).style.display == 'none'){
					$('#comment_replybtn_' + type + '_' + commentid).addClass('selected');
					$('#comment_' + type +'_' + commentid).show();
					setTextareaWidth('#comment_' + type + '_' + commentid);
				}else{
					$('#comment_replybtn_' + type + '_' + commentid).removeClass('selected');
					$('#comment_' + type +'_' + commentid).hide();
				}
			}else{
				if(document.getElementById('comment_' + type +'_' + commentid).style.display == 'none'){
					$('#comment_replybtn_' + type + '_' + commentid).addClass('selected');
					$('#comment_' + type +'_' + commentid).show();
					setTextareaWidth('#comment_' + type + '_' + commentid);
				}else{
					$('#comment_replybtn_' + type + '_' + commentid).removeClass('selected');
					$('#comment_' + type +'_' + commentid).hide();
				}
			}
		}
	}else{
		alert('马上登陆，就可以回复了~');
	}
}

function showLen(obj,msgid) {
	var sid = obj.id;
	var ctext = $('#'+sid).val();
	ctext = ctext.replace(/\n/gi,"");
	$("#"+msgid).html((maxreply - ctext.length) + '');
}

function CheckLength(obj) {
	obj.value  = splitString(obj.value , obj.scrollWidth , '\n');
	if(obj.scrollHeight > 20){
		var roolwidth = obj.scrollWidth;
		var roolheight = obj.style.height?parseInt(obj.style.height):0;
		roolheight = obj.scrollHeight - roolheight;
	}
}


function splitString(str,linewidth,tag) {
		$result = new Array();
		$k = 0;
		$temp = str.split(tag);
		for(var i=0;i < $temp.length;i++){
			$cha = ($temp[i].replace(/[^\x00-\xff]/g, 'xx')).length;
			if(($cha * 9) > linewidth){
				linenum = parseInt(linewidth/14);
				strlen = $temp[i].length;
				line = parseInt(strlen/linenum) + 1;
				for(var $t = 0; $t < line;$t++){
					$start = $t * linenum;
					$end = ($t+1)*linenum;
					var con = $temp[i].substring($start,$end);
					if((con.replace(/\n/gi,'')).replace(/\s/g,'') != ''){
						$result[$k] = con;
						$k++;
					}
				}
			}else{
				$result[$k] = $temp[i].replace(/\n/gi,"");
				$k++;
			}
		}
		return $result.join(tag);
}

function isEnter(event,obj) {
	if (event.keyCode == 13) {
		 var toheight = obj.scrollWidth;
	}else{
		if(event.keyCode != 8){
			CheckLength(obj);
		}
	}
}

function ReFrashComment() {
	var types = new Array('common','hot');
	for(k in types){
		$('#comment_' + types[k] + '_container').html('');
		$('#comment_' + types[k] + '_container').css({'height':'0px'});
		$('#comment_' + types[k] + '_more').html('');
		document.getElementById('li_' + types[k]).className = 'no';
	}
	document.getElementById('li_' + nowtype).className = 'yes';
}


function showCommentBox() {
	if(isLogined()){
		user = getUser();
		$('#comment_user_avatar').attr('src',user['avatar']);
		$('.comment_user_avatar').parents('a').attr('href',user['userid']);
	}
	$('#addcomment').val('我想说....');
}

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


function tabOver(item){
	if(item.className != 'yes'){
		item.className = 'over';
	}
}

function tabOut(item){
	if(item.className != 'yes'){
		item.className = 'no';
	}
}

function tabChange(type, init){
	var types = new Array('common','hot');
	for(k in types){
		$('#comment_' + types[k] + '_container').hide();
		$('#comment_' + types[k] + '_more').hide();
		document.getElementById('li_' + types[k]).className = 'no';
	}
	$('#comment_' + type + '_container').show();
	$('#comment_' + type + '_more').show();
	nowtype = type;
	document.getElementById('li_' + type).className = 'yes';
	if($('#comment_' + type + '_container').html() == ''){
		if  (typeof(init) == 'undefined') {
			window.location =  '#li_' +type;
		}
		LoadComment(sequence,type,0,loadnum);
	}
}


function changeContainerHeight(type,cheight){
	showHeight = $('#comment_' + type + '_container').height() + cheight;
	$('#comment_' + type + '_container').animate({height:showHeight+'px'},100);
}
	
function LoadCommonComment(startnum) {
	LoadComment(sequence,'common',startnum,loadnum);
}


function LoadOption(cids, callback) {
	
	$.getJSON('http://bbsclick.10jqka.com.cn/clicks.php?type=likes&action=getList&app=sns&return=jsonp&key='+cids+'&parent=pid&callback=?', function(json){
			if(json.errorcode == '0'){
				callback(json.result);
			}
		});
	
}

function LoadComment(seq,type,startnum,getnum) {
	var cid = 0;
	if (sns_comment.core.store[type]) {
		 cid = sns_comment.core.store[type] ;
	}
	 Protocol({
            "dataType": "JSONP",
            "isShowError": true,
            "data": {
                "pid": seq,
                "cid": cid,
                "limit": getnum,
				"sort":"down",
                "return": "jsonp"
            },
            "url": sns_comment.core.DiscussUrl.getDiscussList,
            "successCallback": function(result, options){
                if(result.errorCode == 0 &&  result.result){
					if(result.result.reply){
						var comments = result.result.reply;
						var con = document.createElement('div');
						conid = 'comment_' + type + '_' + startnum + '_' + getnum;
						con.id = conid;
						var Buffer = [],i=0;
						var Buffer2 = [],k=0;
						var appendHeight = 0;
						$.each(comments, function(key, item) {
							 sns_comment.core.store[type] = item.id;
							 Buffer2[k++] = seq+'_'+item.id;
							 Buffer[i++] = CommentHtml(item,type);
						});
						con.innerHTML = Buffer.join('');
						Buffer = [];
						document.getElementById('comment_' + type + '_container').appendChild(con);
						
						LoadOption(Buffer2.join(','),function(result){
							var maxlike = 0;
							for(t in result) {
									var tmp=t.split('_');
									$('#comment_agreenum_'+type+'_'+tmp[1]).html(result[t].likes);
									if  (parseInt(result[t].likes) > maxlike) 
										maxlike = parseInt(result[t].likes);
							}
							if (cid < 1) {
								if (Buffer2.length == getnum  || maxlike > 3)  {
									getHots(seq);
								}
							}
						});
						
						if (Buffer2.length<getnum) {
							$('#comment_'+type+'_more').hide();
						} 
						
					} else {
						 $('#comment_'+type+'_more').hide();
					}
					if  (typeof (result.result.amount) != 'undefined'){
						$('.ctnum').html(result.result.amount);
					}
                } 
            },
            "failCallback": function(result, options){
				$('#nocomdata').show();
				 $('#comment_'+type+'_more').hide();
            }
        });
}



function CommentHtml(item,type){
	var Buffer = [],i=0;
	var reply = item.reply?item.reply.length:0;
	item.ctime = formatDate(new Date(item.ctime*1000), 'MM-dd hh:mm');
	Buffer[i++] = '<div><div class="photo-box"><a href="http://t.10jqka.com.cn/' + item.userid + '" target="_blank"><img src="' + item.avatar + '" width="50" height="50"></a></div>';
	Buffer[i++] = '<div class="conts-box"><div class="text"><div class="top"><span class="time fr">'+item.ctime+'</span><a  href="http://t.10jqka.com.cn/' + item.userid + '" target="_blank">'+item.nickname+'</a></div>';
	Buffer[i++] = '<p>'+item.content+'</p>';
	
	if  (type == 'common' && item.bereply) {
		Buffer[i++] = '<div class="reply-box"><div class="texts">';
		var rt =1;
		var rpstr = '';
		$.each(item.bereply, function(key, reply) {
				rpstr = '<div class="texts-div">'+rpstr+'<div class="name"><span class="fr lou">'+rt+'F</span>';
				rpstr += '<a target="_blank" href="http://t.10jqka.com.cn/' + reply.userid + '">'+reply.nickname+'</a></div>';
				rpstr += '<p>'+reply.content+'</p>';
				rpstr += '</div>';
				rt++;
		});
		Buffer[i++] = rpstr;
		Buffer[i++] = '</div></div>';
	}
	
	
	if(shareSwitch){
		Buffer[i++] = '<div class="ps"><div><span class="fr"><a href="###" class="agree" id="comment_agree_' + type + '_' + item.id + '"  onclick="commit_comment_option(' + item.id + ', \'agree\' , ' + sequence + ',\'' + type + '\')"><em id="comment_agreenum_' + type + '_' + item.id + '" >0 </em></a><a href="javascript:void(0)" class="reply" id="comment_replybtn_' + type + '_' + item.id + '" target="_self" onclick="javascript:commentReply(\'' + item.id + '\',\'' + type + '\')">回复</a><a href="javascript:void(0)" class="share">分享</a></span></div></div>';
	}else{
		Buffer[i++] = '<div class="ps"><div><span class="fr"><a href="###" class="agree" id="comment_agree_' + type + '_' + item.id + '"  onclick="commit_comment_option(' + item.id + ', \'agree\' , ' + sequence + ',\'' + type + '\')"><em id="comment_agreenum_' + type + '_' + item.id + '" >0 </em></a><a href="javascript:void(0)" class="reply" id="comment_replybtn_' + type + '_' + item.id + '" target="_self" onclick="javascript:commentReply(\'' + item.id + '\',\'' + type + '\')">回复</a></span></div></div>';
	}
	Buffer[i++] = '<div id="comment_' + type + '_' + item.id + '" style="display:none;"></div>';
	Buffer[i++] = '</div></div></div>';
	return Buffer.join('');
}




function setTextareaWidth(parentId){
	var width = $(parentId).parents('div').width() - 86;
	 $(parentId).find('.textareas').css('width',width);
}

function LoadMoreComment(type)
{
	LoadComment(sequence,type,getnums[type],loadnum);
}
