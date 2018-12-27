var scale; // 全局变量，记录背景图片宽高比
$(function(){
    /*设置头部背景图片 */
    dealNavClass(); //初始化处理导航样式

    setNavBarMargin('NavbarHeader', $(window).width()); //设置导航栏margin
    initHeaderHeight('header_bg'); // 初始化header高度
    $(window).resize(function(){ // 监听浏览器宽度
        dealNavClass();
        setNavBarMargin('NavbarHeader', $(window).width()); //设置导航栏margin
        setHeaderHeight('header_bg', scale); // header高度随窗口变化而变化
    });
})

function initHeaderHeight(header){
    var bgImageUrl = $('.' + header).css('backgroundImage').replace('url("', ''); //获取背景图片url
    bgImageUrl = bgImageUrl.replace('")', '');
    var image = new Image();
    image.src = bgImageUrl;
    image.onload = function(){ // 图片加载完成
        var w = this.width;
        var h = this.height;
        scale = w / h; // 宽高比
        var divW = $('.' + header).width(); 
        var divH = divW / scale;
        $('.' + header).css({'height': divH + 'px'}); // 设置header宽度
    }
}

function setHeaderHeight(header, scale){ // 浏览器宽度变化后调用
    var divW = $('.header_bg').width();
    var divH = divW / scale;
    $('.' + header).css({'height': divH + 'px'});
}

function setNavBarMargin(navEle, windowWidth){ //设置导航栏,登录与logo margin-top一样
    var marginTop
    marginTop = $(".logo_img").css('margin-top').replace('px', '');
    if(windowWidth > 1400) {
        marginTop = parseInt(marginTop) + 5 + 'px';
    }else {
        marginTop = marginTop + 'px';
    }
    $("#" + navEle).css({'margin-top':marginTop});
    // $("#" + loginEle).css({'margin-top':marginTop});
}

function dealNavClass(){ // 处理导航样式
    if($(window).width() < 751){
        $('#NavbarWrapper').addClass('navWidth');
        $('#menu ul').addClass('navBackground');
        $('#LoginWrapper').hide();
        $('#LoginWrapper1').show();
    }else{
        $('#NavbarWrapper').removeClass('navWidth');
        $('#menu ul').removeClass('navBackground');
        $('#LoginWrapper').show();
        $('#LoginWrapper1').hide();
    }
}