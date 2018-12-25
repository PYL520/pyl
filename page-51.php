<?php 
    // //定义了一个shuohua的函数
    // function shuohua(){
    //     echo '在说话了！<br />';
    // }
    // function zoulu(){
    //     echo '我在走路!<br />';
    // }
    // //挂载shuohua函数到pyl这个动作上
    // add_action('pyl', 'shuohua');
    // add_action('pyl', 'zoulu', 1); // 三参数默认10，越小优先级越高
    // //运行pyl这个动作
    // do_action('pyl');
    function zhuijia($text){
        return $text . '...';
    }
    function zhuijia1($text){
        return $text . '!!!';
    }
    //挂载zuijia函数到shuchu这个过滤器上
    add_filter('shuchu', 'zhuijia');
    add_filter('shuchu', 'zhuijia1');
    //创建一个shuchu过滤器，传递要过滤的字符串“庞扬龙"
    echo apply_filters('shuchu', '庞扬龙');
?>