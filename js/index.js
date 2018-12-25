$(function(){
    setDivMargin();
    $(window).resize(function(){ // 监听浏览器宽度
        var screen = $(window).width();
            setDivMargin();
    });

    $('.deal_content').hover(function(){
        $(this).children(".content_area").addClass('content_area_active').siblings().removeClass('content_area_active');
        $(this).siblings().children(".content_area").removeClass('content_area_active');
    }, function(){

    })
})

function setDivMargin(){ // 设置margin与logo相同
        var logoMargin = $('.logo_img').css('margin-left').replace('px', '');
        console.log(logoMargin);
        $('.server_content_wrapper').css("margin-left", logoMargin - 53 + 'px');
        $('.content_wrapper').css("margin-left", logoMargin - 15 + 'px');
}