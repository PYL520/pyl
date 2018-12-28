$(function(){
    setDivMargin($(window).width());
    $(window).resize(function(){ // 监听浏览器宽度
        var screen = $(window).width();
            setDivMargin(screen);
    });

    $('.deal_content').hover(function(){
        $(this).children(".content_area").addClass('content_area_active');
        $(this).siblings().children(".content_area").removeClass('content_area_active');
        }, function(){
    });
    $('.project_case_hover').hover(function(){ // 经过项目案例
        $(this).children(".project_case").children(".project_case_dedescribesc").children(".project_case_more").addClass('active_more');
        $(this).siblings().children(".project_case").children(".project_case_dedescribesc").children(".project_case_more").removeClass('active_more');
        }, function(){
    });
    $('.cooperation_item').hover(function(){ // 经过合作伙伴
        $(this).children(".cooperation_words").children(".cooperation_more").addClass('cooperation_more_active');
        $(this).siblings().children(".cooperation_words").children(".cooperation_more").removeClass('cooperation_more_active');
        }, function(){
    });
})

function setDivMargin(screen){ // 设置margin与logo相同
    var logoMargin = $('.logo_img').css('margin-left').replace('px', '');
    if(screen < 768){
        $('.server_content_wrapper').css("margin-left", 0);
    }else{
        $('.server_content_wrapper').css("margin-left", logoMargin - 53 + 'px');
    }
    
    $('.content_wrapper').css("margin-left", logoMargin - 15 + 'px');
}