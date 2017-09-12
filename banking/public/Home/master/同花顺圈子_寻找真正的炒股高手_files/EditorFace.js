//@charset "utf-8";
//由seajs-modules中的editorFace改编而来
define(['requirePath/editor/FaceData.js'],function(faceData){
    var faceData = faceData;
    function EditorFace(settings) {
        var defaults = {
            faceClickCallback: function(dom) {},
            facaDataUrl: faceData,
            trigger: "",
            $input: ""
        };
        var options = $.extend(defaults, settings);
        if (!options["trigger"]) {
            return false;
        }
        this.options = options;
        var $triggers = $(options["trigger"]);
        var self = this;
        $triggers.each(function() {
            var $this = $(this);
            $this.click(function() {
                self.init($this);
            });
        });
    }
    EditorFace.prototype.init = function($trigger) {
        this.$trigger = $trigger;
        this._insertFaceTpl();
        this.setEvents();
        this.setPosition();
    };
    // 加载表情的json文件
    EditorFace.prototype.getFaceData = function() {
        var self = this;
        var options = this.options;
        // var $faceImgs = this.$J_EditorFace.find('.editor-emotion').find('img');
        this.renderFace(options["facaDataUrl"], 0);
        this.$J_EditorFace.attr("isLoad", "true");
    };
    // 根据json 文件加载表情
    EditorFace.prototype.renderFace = function(json, index) {
        var self = this;
        var faceHtml = "";
        var jsonLength = json[index].length;
        // fixed v-1.0.2
        for (var i = 0; i < jsonLength; i++) {
            faceHtml = faceHtml + self.simpleTemplate("", json[index][i]);
        }
        self.insertFaceHtml(faceHtml, index);
    };
    // 所有的图片的表情加载完成后插入到html中
    EditorFace.prototype.insertFaceHtml = function(faceHtml, index) {
        this.$J_EditorFace.find(".editor-emotion-panel").eq(index).attr("isLoad", "true").empty().append(faceHtml);
        this.setPosition();
    };
    // 判断图片是否加载完成
    EditorFace.prototype.loadImg = function(url, fn) {
        var img = new Image();
        img.src = url;
        if (img.complete) {
            fn.call(img);
        } else {
            img.onload = function() {
                // ie6 加载gif多次触发
                img.onload = null;
                fn.call(img);
            };
        }
    };
    // 绑定事件
    EditorFace.prototype.setEvents = function() {
        var $J_EditorFace = this.$J_EditorFace;
        var options = this.options;
        var self = this;
        $J_EditorFace.off("click", "a").on("click", "a", function() {
            var sTitle = "[" + $(this).attr("title") + "]";
            if (typeof options["faceClickCallback"] == "function") {
                options["faceClickCallback"](this);
            }
            self.hideFaceNode();
        });
        $J_EditorFace.off("click", ".editor-emotion-nav-item").on("click", ".editor-emotion-nav-item", function() {
            var $this = $(this);
            var index = $this.index();
            $this.siblings(".editor-emotion-nav-item").removeClass("editor-emotion-nav-cur").end().addClass("editor-emotion-nav-cur");
            if (index == 1) {
                if ($J_EditorFace.find(".editor-emotion-panel").eq(index).attr("isLoad") != "true") {
                    self.renderFace(options["facaDataUrl"], index);
                }
            }
            $J_EditorFace.find(".editor-emotion-panel").hide().eq(index).show();
            self.setPosition();
        });
        // 如果是第一次就自动切换到默认表情
        if (this.$trigger.data("isBindEvent") != "true") {
            $J_EditorFace.find(".editor-emotion-nav-item").eq(0).trigger("click");
        }
        this.$trigger.data("isBindEvent", "true");
        $J_EditorFace.on("click", function() {
            setTimeout(function() {
                $J_EditorFace.find(".editor-emotion-nav-cur").focus();
            }, 0);
        });
        // 点击其他地方的时候隐藏表情框
        // Bugfixed 2014-02-14 ykq 出现2编辑ueditor的时候，点击第二个编辑器的表情不出来的
        $(document).on("click", function(e) {
            var $target = $(e.target);
            if ($target.parents("#J_EditorFace").length || $.contains(self.$trigger[0], $target[0]) || $target.parents(".editor-face").length || $target.hasClass("editor-face") || $target.hasClass("edui-for-face") || $target.parents(".edui-for-face").length) {
                return;
            }
            // this.$trigger
            self.hideFaceNode();
        });

        //页面滚动，将显示的表情弹窗隐藏 @yaoyongfang
        $(document).scroll(function() {
            $J_EditorFace.hide();
        });

    };
    // 隐藏弹出框
    EditorFace.prototype.hideFaceNode = function() {
        if (this.$J_EditorFace) {
            this.$J_EditorFace.hide();
        }
    };
    // 根据页面高度定位并设置箭头指向
    EditorFace.prototype.setPosition = function() {
        var $target = this.$trigger;
        var $showElenment = this.$J_EditorFace;
        var $editorArrow = this.$J_EditorFace.find(".editor-arrow");
        if (!autoSetPosition($target, $showElenment)) {
            $editorArrow.hasClass("editor-arrowup") && $editorArrow.removeClass("editor-arrowup") && $editorArrow.addClass("editor-arrowdown");
        } else {
            $editorArrow.hasClass("editor-arrowdown") && $editorArrow.removeClass("editor-arrowdown") && $editorArrow.addClass("editor-arrowup");
        }
    };
    // 插入html结构
    EditorFace.prototype._insertFaceTpl = function() {
        if (!$("#J_EditorFace").length) {
            var editorFace = '<div id="J_EditorFace" class="editor-dialog" style="display: none;">\n    <div class="editor-dialog-wrap">\n        <i class="editor-arrow editor-arrowup"></i>\n        <!-- <i class="editor-arrow editor-arrowdown"></i> -->\n        <div class="editor-dialog-main">\n            <div class="editor-emotion-nav">\n                <a class="editor-emotion-nav-item editor-emotion-nav-cur" href="javascript:void(0);">默认表情</a>\n                <a class="editor-emotion-nav-item" href="javascript:void(0);">小熊猫表情</a>\n            </div>\n             <div class="editor-emotion">\n                <div class="editor-emotion-panel" style="display: block;">\n                    <img src="https://i.thsi.cn/sns/circle/loading.gif" alt="正在加载...">\n                </div>\n                <div class="editor-emotion-panel">\n                    <img src="http://i.thsi.cn/sns/circle/loading.gif" alt="正在加载...">\n                </div>                \n             </div>\n        </div>\n    </div>\n</div>';
            $("body").append(editorFace);
            this.$J_EditorFace = $("#J_EditorFace");
        } else {
            this.$J_EditorFace = $("#J_EditorFace");
        }
        // 已经获得表情就不再渲染表情
        if (this.$J_EditorFace.attr("isLoad") != "true") {
            this.getFaceData();
        }
        var $J_EditorFace = this.$J_EditorFace;
        // Bugfixed 百度编辑器聚焦的时候，点击表情，再点击百度编辑器，表情不消失的bug
        setTimeout(function() {
            $J_EditorFace.find(".editor-emotion-nav-cur").focus();
        }, 0);
    };
    // 简单的模板引擎
    // ref http://www.zhangxinxu.com/wordpress/2012/09/javascript-html-json-template/
    // 添加
    EditorFace.prototype.simpleTemplate = function(tpl, oData) {
        var defaultTpl = '<a title="$value$" href="javascript:;"><img title="$value$" src="$src$" class="snsface"></a>';
        tpl = tpl || defaultTpl;
        return tpl.replace(/\$\w+\$/gi, function(matchs) {
            var returns = oData[matchs.replace(/\$/g, "")];
            return returns + "" == "undefined" ? "" : returns;
        });
    };
    // 表情朝上朝下自动定位
    function autoSetPosition($target, $popDialog) {
        var fromTop = $target.offset().top - $(document).scrollTop();
        var fromBottom = getClientHeight() - fromTop;
        var heightOfDialog = $popDialog.outerHeight();
        var widthOfDialog = $popDialog.outerWidth();
        var down = true;
        // 默认向下
        if (fromTop < heightOfDialog && heightOfDialog <= fromBottom) {
            down = true;
        } else if (fromBottom < heightOfDialog && heightOfDialog < fromTop) {
            down = false;
        }
        var aPos = $target.offset();
        var nTargetWidth = $target.outerWidth();
        var nTargetHeight = $target.outerHeight();
        var pos = {
            left: aPos["left"] - 15,
            top: aPos["top"] + nTargetHeight + 5,
            position: "absolute",
            "z-index": 1e4
        };
        // 朝上定位
        if (!down) {
            pos["top"] = aPos["top"] - heightOfDialog - 5;
        }
        $popDialog.css(pos).show();
        return down;
    }
    function getClientHeight() {
        var h1 = document.body && document.body.clientHeight ? document.body.clientHeight : 0;
        var h2 = document.documentElement && document.documentElement.clientHeight ? document.documentElement.clientHeight : 0;
        return Math.min(h1, h2);
    }
    return EditorFace;
});