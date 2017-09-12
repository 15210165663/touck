//@charset "utf-8";
define(function(){
    function ImgDialog(options){
        var defaults = {
            'tpl': ''
        }
        this.options = $.extend(defaults, options);
        if( !!this.options['tpl'] &&  this.options['$base'].length ){
            if( !$('#J_ImgDialog').length ){
                var $element = $( this.options['tpl'] ).appendTo( $('body') ).hide();
            } else {
                $element = $('#J_ImgDialog');
            }

            this.$element = $element;
            this.$closeBtn = $element.find('[node-type="imgdelete"]');
            this.setEvents();
        }

    }

    ImgDialog.prototype = {
        setEvents: function(){
            var $element = this.$element;  
            var self = this;
            $element.on('click', '[node-type="imgdelete"]', function(){
                self.hide();
            });
        },
        hide: function(){
            var $element = this.$element;
            $element.hide().find('[node-type="imgvalue"]').val(''); 
            var options = this.options;
            var $element = this.$element;
            if( SNS.isFunction(options['hideCallback'])){
                options['hideCallback'].call(this, $element);
            }
        },
        doShowCallback: function(){
            var options = this.options;
            var $element = this.$element;
            if( SNS.isFunction(options['showCallback'])){
                options['showCallback'].call(this, $element);
            }
        },
        showLoading: function(){
            var $element = this.$element;
            this.setPosition();
            $element.hide().find('[node-type="imgvalue"]').val('');             
            $element.find('.editor-uploadimg-loading').show();
            $element.find('.editor-uploadimg-show').hide();
        },
        show: function(imgUrl, callback){
            var $element = this.$element;
            $element.find('.editor-uploadimg-loading').hide();
            $element.find('.editor-uploadimg-show')
                .show().find('img')
                .css({
                    'background-image': 'url('+ imgUrl +')'
                });
            $element.find('[node-type="imgvalue"]').val(imgUrl);
            if( SNS.isFunction(callback) ){
                callback.call(this, $element);
            };
            this.setPosition();
        },
        showAn:function(){
            var $element = this.$element;
            $element.fadeIn(500);
        },
        hideAn:function(){
            var $element = this.$element;
            $element.fadeOut(500);
        },
        getImgUrl: function(){
            return this.$element.find('[node-type="imgvalue"]').val();
        },
        setPosition: function(){
            var $element = this.$element;
            var $base = this.options.$base;
            // FSJ.autoPosition($element, $base, { x: -15, y: 0} );
            $element.css({
                top:$base.offset().top - $element.outerHeight(),
                left:$base.offset().left - 15
            }).show();
            this.doShowCallback();
        }

    }

    return ImgDialog;
});
 