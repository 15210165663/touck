//@charset "utf-8";
//新版圈子头部引用。20150706.sunxiongying@myhexin.com 和autoComplete唯一区别在于新增ajaxUrl参数。
/*20160520 update 今天520啊~~~更新了一下可以使用 ajaxSucCallBack 作为 ajax成功以后的传入参数来调用。bindEvent作为对应的自定义绑定事件。setPosition 设置位置，也可以设置宽度
* target 属性应该用于老版本的 点击之后新开页面。selectItem 按enter键的触发事件
*/
// keyCode
    // var test = {
    //     "errorcode": 0,
    //     "errormsg": "",
    //     "result": {
    //         "stock": [{
    //             "code": "1A0001",
    //             "name": "\u4e0a\u8bc1\u6307\u6570",
    //             "isself": 1,
    //             "url": "http:\/\/t.10jqka.com.cn\/stock\/1A0001"
    //         }, {
    //             "code": "1B0300",
    //             "name": "\u6caa\u6df1300\u6307\u6570",
    //             "isself": 1,
    //             "url": "http:\/\/t.10jqka.com.cn\/stock\/1B0300"
    //         }, {
    //             "code": "000010",
    //             "name": "ST\u534e\u65b0",
    //             "url": "http:\/\/t.10jqka.com.cn\/stock\/000010"
    //         }, {
    //             "code": "430210",
    //             "name": "\u821c\u80fd\u79d1\u6280",
    //             "url": "http:\/\/t.10jqka.com.cn\/stock\/430210"
    //         }],
    //         "name": [{
    //             "name": "\u0001\u0001\u0001\u0001\u00011001",
    //             "url": "http:\/\/t.10jqka.com.cn\/118412",
    //             "avatar": "http:\/\/u.thsi.cn\/avatar\/8412\/118412.gif"
    //         }, {
    //             "name": "\u0001\u0001\u0001\u00011",
    //             "url": "http:\/\/t.10jqka.com.cn\/123970",
    //             "avatar": "http:\/\/u.thsi.cn\/avatar\/3970\/123970.gif"
    //         }, {
    //             "name": "\u0001\u0001\u0001\u0001123",
    //             "url": "http:\/\/t.10jqka.com.cn\/117813",
    //             "avatar": "http:\/\/u.thsi.cn\/avatar\/7813\/117813.gif"
    //         }]
    //     }
    // }

    function AutoComplete(options) {

        var defaults = {
            'triggerSelect': '#J-header-u-search',
            'ajaxUrl':'/circle/search/stockWithNameWizard/',
            'target':'self',
            'ajaxSucCallBack':'',
            'bindEvent':'',
            'setPosition':'',
            'selectItem':'',
            'keyUpCallback':'',
            'dataType':'json'
        };
        this.KEY = {
            UP: 38,
            DOWN: 40,
            LEFT: 37,
            RIGHT: 39,
            ENTER: 13,
            ESC: 27,
            BACKSPACE: 8,
            TAB: 9
        };

        var suggestNodeStr = '<div class="suggestTip" style="left: 9px; top: 35px; width: 180px; display:none"><div class="suggest-panel"><div class="selected-stock"></div>'+
                            '<div class="selected-circle"></div><div class="selected-live"></div><div class="selected-tactic"></div></div></div>';

        this.options = $.extend({}, defaults, options);
        this.trigger = $(this.options.triggerSelect);
        this.ajaxUrl = this.options.ajaxUrl;
        this.element = $('.ui-autocomplete');
        this.completePanel = $('.ui-autocomplete');
        this.selectedIndex = -1;
        this.$suggestNode = $(suggestNodeStr).appendTo($('body'));
        this._$inputNode = $(this.options.triggerSelect);
        this.$stockResult = this.$suggestNode.find(".selected-stock");
        this.$circleResult = this.$suggestNode.find(".selected-circle");
        this.$liveResult = this.$suggestNode.find(".selected-live");
        this.$tacticResult = this.$suggestNode.find(".selected-tactic");
        var suggestNodeWidth = this.$suggestNode.outerWidth();
        this.$suggestNode.css({
            'width': suggestNodeWidth - 3
        });

        this.init();

    }

    AutoComplete.prototype = {
        init: function() {
            var options = this.options,
                trigger = this.trigger;
            var that = this;

            trigger.attr('autocomplete', 'off')
                .blur(function() {
                    that._blurEvent();
                })
                .keydown(function(event) {
                    that._keyDownEvent(event);
                }).keyup(function(event){
                    that._keyUpEvent(event);
                });
            //添加 自助 bindEvent
            var optsbindEvent = options.bindEvent;
            if( $.isFunction(optsbindEvent) ){
                optsbindEvent(that);
            }else{
                this.bindEvent();
            }
            this.bindScroll();
        },
        bindEvent:function(){
            var options = this.options;
            var that = this;
            this.$stockResult.delegate('[node-type="item"]', 'mousedown', function(e) {
                var curTarget = e.currentTarget,
                    $curTarget = $(curTarget);
                var jumpUrl = $curTarget.attr("jump-url");
                if (jumpUrl) {
                    if(options.target == 'self'){
                        location.href = jumpUrl;
                    }else{
                        window.open(jumpUrl);
                    }
                    
                }
            });
            this.$stockResult.delegate('[node-type="item"]', 'mouseenter', function(e) {
                var curTarget = e.currentTarget,
                    $curTarget = $(curTarget);
                that.setSelectedItem($curTarget.attr("item-index"));
            });
            this.$circleResult.delegate('[node-type="item"]', 'mousedown', function(e) {
                var curTarget = e.currentTarget,
                    $curTarget = $(curTarget);
                var jumpUrl = $curTarget.attr("jump-url");
                if (jumpUrl) {
                    if(options.target == 'self'){
                        location.href = jumpUrl;
                    }else{
                        window.open(jumpUrl);
                    }
                    
                }

            });
            this.$circleResult.delegate('[node-type="item"]', 'mouseenter', function(e) {
                var curTarget = e.currentTarget,
                    $curTarget = $(curTarget);
                that.setSelectedItem($curTarget.attr("item-index"));

            });
            this.$liveResult.delegate('[node-type="item"]', 'mousedown', function(e) {
                var curTarget = e.currentTarget,
                    $curTarget = $(curTarget);
                var jumpUrl = $curTarget.attr("jump-url");
                if (jumpUrl) {
                    if(options.target == 'self'){
                        location.href = jumpUrl;
                    }else{
                        window.open(jumpUrl);
                    }
                    
                }

            });
            this.$liveResult.delegate('[node-type="item"]', 'mouseenter', function(e) {
                var curTarget = e.currentTarget,
                    $curTarget = $(curTarget);
                that.setSelectedItem($curTarget.attr("item-index"));

            });
            this.$tacticResult.delegate('[node-type="item"]', 'mousedown', function(e) {
                var curTarget = e.currentTarget,
                    $curTarget = $(curTarget);
                var jumpUrl = $curTarget.attr("jump-url");
                if (jumpUrl) {
                    if(options.target == 'self'){
                        location.href = jumpUrl;
                    }else{
                        window.open(jumpUrl);
                    }
                    
                }

            });
            this.$tacticResult.delegate('[node-type="item"]', 'mouseenter', function(e) {
                var curTarget = e.currentTarget,
                    $curTarget = $(curTarget);
                that.setSelectedItem($curTarget.attr("item-index"));

            });
        },
        // 滚动时按键精灵隐藏
        bindScroll: function(){
            var self = this;
            var $window = $(window);
            $window.bind('scroll', function(){
                self.hide();
            });
        },

        setSelecteIndex: function(i) {
            this.selectedIndex = i;
        },

        selectItem: function() {

            var item = this.$suggestNode.find('[node-type="item"]').eq(this.selectedIndex);
            var jumpUrl = item.attr("jump-url");
            var itemClass = item.attr('class');
            var options = this.options;
            if (jumpUrl) {
                if(options.target == 'self'){
                    location.href = jumpUrl;
                }else{
                    window.open(jumpUrl);
                }
                
            } else {
                var code = this._$inputNode.val();
                code = $.trim(code);

                // 为何要把链接写死  ykq 2013-11-11 13:38:57
                //location.hr = "http://t.10jqka.com.cn/code/" + code + "/";
                if(itemClass){
                    if(itemClass.indexOf('title') != -1){
                        //do nothing sxy 在title上，按enter键，不做操作 2014-11-20
                    }else{
                        if(options.target == 'self'){
                            location.href = "error/err404";    
                        }else{
                            window.open("error/err404");
                        }
                        
                    }
                }
            }
        },


        _blurEvent: function() {
            //$(".suggestTip").hide();
            this.hide();
        },

        _keyTimeout: function() {
            var trigger = this.trigger;
            if ( !!trigger.attr('searchKey') || trigger.attr('searchKey') != $.trim(trigger.val()) ) {
                this._loadData();
            }
        },

        hide: function() {
            $(".suggestTip").hide();
            this.trigger.parents('.header-input').removeClass('header-input-focus');
        },

        _loadData: function() {
            var options = this.options,
                self = this;
            var searchKeyValue = $.trim(this.trigger.val());

            if(!searchKeyValue){
                return false;
            }

            var ajaxSucCallBack = options.ajaxSucCallBack;
            var params = {
                'num': 5,
                'param': searchKeyValue
            };

            var url;
            if(options.dataType == 'jsonp'){
                url = 'http://news.10jqka.com.cn/public/index_keyboard_'+params.param+'_sha,sza_'+params.num+'_callback.html';
                $.ajax({
                    url: url,
                    type: 'get',
                    dataType: 'jsonp',
                    jsonpCallback:'callback',
                    success: function(result) {
                        if( $.isFunction(ajaxSucCallBack) ){
                            ajaxSucCallBack(self,result);
                        }else{
                            self.ajaxSuccessHandler(result);
                        }
                    },
                    error: function(xhr, status) {

                    }
                });
            }else{
                url = self.ajaxUrl;
                $.ajax({
                    url: url,
                    type: 'get',
                    cache:false,
                    data :params,
                    dataType: options.dataType,
                    success: function(result) {
                        if( $.isFunction(ajaxSucCallBack) ){
                            ajaxSucCallBack(self,result);
                        }else{
                            self.ajaxSuccessHandler(result);
                        }
                    },
                    error: function(xhr, status) {

                    }
                });
            }

            

        },
        setSelectedItem: function(item) {
            var len = this.$suggestNode.find('[node-type="item"]').length;
            var self = this;
            if (len > 0) {
                this.$suggestNode.find('[node-type="item"]').removeClass('current').eq(item).addClass('current');
                //新增 位置自助

                if( $.isFunction( this.options.setPosition ) ){
                    this.options.setPosition(self);
                }else{
                    this.setPosition();
                }
                this.$suggestNode.show();
            } else {
                $(".suggestTip").hide();
            }
        },
        setPosition:function(){
            var showTop = this.trigger.offset().top + this.trigger.outerHeight() + 1;
            var showLeft = this.trigger.offset().left;
            this.$suggestNode.css({
                top: showTop,
                left: showLeft
            });
        },
        ajaxSuccessHandler: function(data) {

            var that = this,
                htmlArr = [],
                itemIndex = 0,
                inputText = this._$inputNode.val();
            this.$stockResult.empty();
            this.$circleResult.empty();
            this.$liveResult.empty();
            this.$tacticResult.empty();

            if (data.result.stock) {
                htmlArr.push('<p class="title" node-type="item" jump-url="" item-index="', itemIndex++, '">“<span class="s-red">', inputText, '</span>”相关个股圈>></p>');
                $.each(data.result.stock, function(i, o) {
                    if(i < 3){  //最多显示3条匹配数据
                        htmlArr.push('<p class="suggest-item', (o.isself ? " self" : ""),
                                        '" node-type="item" action-click="clickStat" data-statid="t_c_ssearch" jump-url="', o.url,
                                         '" item-index="', itemIndex++, '"><a href="javascript:void(0);"><span class="code">', o.code.replace(eval('/' + inputText + '/g'),
                                          '<font class="s-blue">' + inputText + '</font>'), "</span><span>", o.name.replace(eval('/' + inputText + '/g'),
                                           '<font class="s-blue">' + inputText + '</font>'), '</span></a></p>');
                    }
                });
            }
            if (htmlArr.join("")) {
                that.$stockResult.html(htmlArr.join(""));
            }


            htmlArr = [];
            if (data.result.name) {
                htmlArr.push('<dl class="title" node-type="item" jump-url="" item-index="', itemIndex++, '"><p><span class="ffst">“</span>', inputText, '<span class="ffst">”</span>相关的圈子</p></dl>');
                $.each(data.result.name, function(i, o) {
                    if(i < 3){
                        htmlArr.push('<dl class="clearfix suggest-item" node-type="item" action-click="clickStat" data-statid="t_c_ssearch" jump-url="', o.url, '"  item-index="', itemIndex++, '">',
                            '<dt class="avatar"><img src="', o.avatar, '"/></dt>',
                            '<dd class="user-info"><p /*class="s-blue"*/>', o.name.replace(eval('/' + inputText + '/g'), '<span class="s-blue">' + inputText + '</span>'), '</p></dd>',
                            '</dl>'
                        );
                    }
                });
            }
            if (htmlArr.join("")) {
                that.$circleResult.html(htmlArr.join(""));
            }

            htmlArr = [];
            if (data.result.user) {//改为live  下同
                htmlArr.push('<dl class="title" node-type="item" jump-url="" item-index="', itemIndex++, '"><p><span class="ffst">“</span>', inputText, '<span class="ffst">”</span>相关的用户</p></dl>');
                $.each(data.result.user, function(i, o) {
                    if(i < 3){
                        htmlArr.push('<dl class="clearfix suggest-item" node-type="item" action-click="clickStat" data-statid="t_c_ssearch" jump-url="', o.url, '"  item-index="', itemIndex++, '">',
                            '<dt class="avatar"><img src="', o.avatar, '"/></dt>',
                            '<dd class="user-info"><p>', o.name.replace(eval('/' + inputText + '/g'), '<span class="s-blue">' + inputText + '</span>'), '</p></dd>',
                            '</dl>'
                        );
                    }
                });
            }
            if (htmlArr.join("")) {
                that.$liveResult.html(htmlArr.join(""));
            }

            htmlArr = [];
            if (data.result.tactic) { //策略名搜索
                htmlArr.push('<dl class="title" node-type="item" jump-url="" item-index="', itemIndex++, '"><p><span class="ffst">“</span>', inputText, '<span class="ffst">”</span>相关的策略</p></dl>');
                $.each(data.result.tactic, function(i, o) {
                    if(i < 3){
                        htmlArr.push('<dl class="clearfix suggest-item" node-type="item" action-click="clickStat" data-statid="t_c_ssearch" jump-url="', o.url, '"  item-index="', itemIndex++, '">',
                            '<dt class="avatar"><img src="', o.avatar, '"/></dt>',
                            '<dd class="user-info"><p>', o.name.replace(eval('/' + inputText + '/g'), '<span class="s-blue">' + inputText + '</span>'), '</p></dd>',
                            '</dl>'
                        );
                    }
                });
            }
            if (htmlArr.join("")) {
                that.$tacticResult.html(htmlArr.join(""));
            }

            that.selectedIndex = 1;
            that.setSelectedItem(1);
        },

        _keyDownEvent: function(e) {
            if( this.ajaxTimer ){
                clearTimeout(ajaxTimer);
            }
            var self = this,
                KEY = this.KEY,
                options = this.options;
            if (e.keyCode == KEY.TAB) {
                this.hide();
                return;
            }
            this.trigger.attr('searchKey', this.trigger.val());
            switch (e.which) {
                case KEY.ESC:
                    this.hide();
                    break;
                case KEY.ENTER:
                    if (this.selectedIndex != -1) {
                        this._keyEnter(e);
                    }

                    break;
                case KEY.UP:
                    this._keyUp(e);
                    break;
                case KEY.DOWN:
                    this._keyDown(e);
                    break;
                default:
                    // 拷贝代码，为何没用的代码都不删除
                    // $searchBtn = $('.search-btn');
                    // $searchBtn.hasClass('search-btn-clear') && $searchBtn.removeClass('search-btn-clear');
                    this.keyTimer = setTimeout(function() {
                        self._keyTimeout();
                    }, 10);


                    break;
            }
            //回调函数
            if( $.isFunction(options.keyUpCallback) ){
                options.keyUpCallback(self,event);
            }

            // if( options.dataLoading || this.keyTimer ){
            //  return ;
            // }


        },

        // Fixed ykq 2014-01-06 处理火狐中文输入法状态下的bug
        _keyUpEvent: function(e) {
            if( !/firefox/.test(navigator.userAgent.toLowerCase()) ){
                return ;
            }

            if( this.ajaxTimer ){
                clearTimeout(ajaxTimer);
            }
            var self = this,
                KEY = this.KEY,
                options = this.options;
            if (e.keyCode == KEY.TAB) {
                this.hide();
                return;
            }
            this.trigger.attr('searchKey', this.trigger.val());
            switch (e.which) {
                case KEY.ESC:
                    this.hide();
                    break;
                case KEY.ENTER:
                    if (this.selectedIndex != -1) {
                        this._keyEnter(e);
                    }

                    break;
                default:
                    this.keyTimer = setTimeout(function() {
                        self._keyTimeout();
                    }, 10);

                    break;
            }
            //回调函数
            if( $.isFunction(options.keyUpCallback) ){
                options.keyUpCallback(self,event);
            }
        },

        _keyDown: function(e) {
            e.preventDefault();
            this._step(1);

        },

        _keyUp: function(e) {
            e.preventDefault();
            this._step(-1);
        },

        _keyEnter: function(e) {
            var options = this.options;
            if($.isFunction(options.selectItem)){
                options.selectItem(this);
            }else{
                this.selectItem();
            }
            this.selectedIndex = -1;
            this._$inputNode.trigger('blur');

            e.preventDefault();
        },

        _step: function(drirection) {

            var currentIndex = this.selectedIndex,
                itemLength = this.$suggestNode.find('[node-type="item"]').length;

            if (drirection === -1) {
                if (currentIndex > 0) {
                    this.selectedIndex = currentIndex - 1;
                } else {
                    this.selectedIndex = itemLength - 1;
                }
            } else if (drirection === 1) {
                if (currentIndex < itemLength - 1) {
                    this.selectedIndex = currentIndex + 1;
                } else {
                    this.selectedIndex = 0;
                }

            }

            this.setSelectedItem(this.selectedIndex);
        },
        highlightItem: function(code, matchKey, isCode) {
            //var match = '/([' + matchKey + ']+)/g';
            if (matchKey === '') {
                return code;
            }
            var reg = new RegExp('(' + matchKey + ')', 'gi');
            // if(!!isCode){
            //  var reg = new RegExp('(' + matchKey + ')', 'gi');
            // } else {
            //  var reg = new RegExp('([' + matchKey + ']{' + len + '})', 'gi');    
            // }
            return code.replace(reg, '<b class="ui-autocomplete-item-hl">' + '$1' + '</b>');
        }
    };
