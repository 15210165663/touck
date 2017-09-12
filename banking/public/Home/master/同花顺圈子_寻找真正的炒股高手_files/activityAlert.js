//@charset "utf-8";
// liukang@myhexin.com
/*
 * 活动弹窗   
 */

define(['store'],function(store){
    function activityAlert(options){
        if(typeof options == 'undefined'){
            return;
        }
        
        if(options == null){
            return;
        }

        this.opt = {
            device:'1', //判断是否移动设备还是pc:1代表是pc,0代表移动设备
            imgLink:'',  //图片地址
            jumpLink:'', //跳转链接
            hideMask:'0', //是否有遮罩层,0为有遮罩,1为无遮罩
            width:400,
            height:400,
            showStatid:'',  //展示广告的统计代码
            statid:'',      //点击图片链接的统计代码
            closestatid:'', //关闭的统计代码
            target:'_blank'  //是否新开窗口
        };

        this.opt = $.extend(this.opt,options);
        this.init();
    }

    activityAlert.prototype.init = function(){
        this.bindEvent();
    }

    activityAlert.prototype.bindEvent = function(){

        var opt = this.opt;

        var htmlArr = [];
        htmlArr.push(
            '<div class="ad-push-container" style="width:',opt.width,'px;height:',opt.height,'px;display:none;position: relative;z-index:1001">',
                '<a href="javascript:void(0);" class="ad-push-close" data-statid="',opt.closestatid,'" style="width:50px;height:50px;',
                'position:absolute;top:0px;right:0px;z-index: 9000;" title="关闭"></a>',
                '<a class="img-link" href="',opt.jumpLink,'" target="',opt.target,'" data-statid="',opt.statid,'" style="display: block;">',
                    '<img src="',opt.imgLink,'" style="width:',opt.width,'px;height:',opt.height,'px;" alt="">',
                '</a>',
            '</div>'
        );

        $('body').append(htmlArr.join(''));

        if(opt.statid == ''){
            $(".img-link").removeAttr("data-statid");
        }

        if(opt.closestatid == ''){
            $('.ad-push-close').hide();
        }
        if(opt.jumpLink == ''){
            $('.ad-push-container .img-link').attr('href','javascript:void(0);').attr('target','_self');
        }

        var $ad_push_container = $('.ad-push-container');
        var add_date = store.get('ad_push');
        var day = new Date();
        var today = ''+day.getDate();
        
        /*弹标记*/
        if(add_date == undefined || add_date !== today ){
            if(opt.hideMask == '0'){
                SNS.setMask();
            }
            $ad_push_container.show();
            // SNS.setVerticalCenter($ad_push_container);

            if(opt.device == '1'){
                SNS.setVerticalCenter($ad_push_container); //如果是pc端，直接居中
            }else if(opt.device == '0'){                   //如果是移动端，重新调整样式
                $ad_push_container.css({
                    'height':'100%',
                    'position':'fixed',
                    'z-index':'1001'
                });

                $ad_push_container.find(".ad-push-close").css({
                    'width':'13%',
                    'height':'10%'
                });

                $ad_push_container.find("img").css({
                    'width':'100%'
                });
            }
            

            if(opt.showStatid != ''){
                TA.log({'id':opt.showStatid});
            }
        }else{
            // 弹过不弹
        }

        $('.img-link',$ad_push_container).click(function(){
            $('.ad-push-close').trigger('click');
        });

        $('.ad-push-close').click(function(){
            $ad_push_container.hide();
            SNS.hideMask();
            store.set('ad_push',today);
        });
    }

    return activityAlert;
});