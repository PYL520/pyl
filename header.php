<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <?php 
        if(is_home()){ // 当前页为首页
            $title = get_bloginfo('name');
        }else{
            $title = wp_title('', false)."_itbcn";
        }
        if($paged > 0){ //分页了
            $title .= "-第". $paged . "页";
        }
    ?>
    <title><?php echo $title; ?></title>
    <?php
        if(is_home()){ //首页则输出描述
    ?>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php } ?>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/footer.css" type="text/css"/>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header_bg" style="margin-bottom: 10px;">
        <div class="container-fluid">
            <!--头部开始-->
            <div class="row">
                <!--logo开始-->
                <div class="col-sm-4 col-md-5 col-lg-5">
                    <div class="logo_img">
                        <img src="<?php bloginfo('template_directory'); ?>/image/logo2.png" />
                        <span class="logo_title">IT帮服务平台</span>
                        <div id="LoginWrapper1" style="display:none">
                            <a href="/wordpress/wp-login.php" type="button" class="btn btn-default login">登录</a>
                            <a href="#" type="button" class="btn registe">注册</a>
                        </div>
                    </div>
                </div>
                <!--logo结束-->
                <!--导航开始-->
                <div class="col-sm-6 col-md-5 col-lg-5" id="NavbarWrapper">
                    <nav class="navbar" role="navigation" id="NavbarHeader">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                <span class="sr-only">切换</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">首页</a></li>
                                <li><a href="#">服务内容</a></li>
                                <li><a href="#">项目案例</a></li>
                                <li><a href="#">工程师简介</a></li>
                                <li><a href="#">合作伙伴</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--导航结束-->
                <!--登录开始-->
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <div id="LoginWrapper">
                        <a href="/wordpress/wp-login.php" type="button" class="btn btn-default login">登录</a>
                        <a href="#" type="button" class="btn registe">注册</a>
                    </div>
                </div>
                <!--登录结束-->
            </div>
            <!--头部下部-->
            <div class="row">
                <!--左侧内容开始-->
                <div class="col-xs-5 col-sm-4 col-md-5">
                    <div class="left_title">Intelligent service Professional problem Solver
                    </div>
                    <div class="left_content">
                        <span class="content_title">服务智能化 专业问题解决大师<span>
                    </div>
                    <!--最下三个图片-->
                    <div class="left_img">
                        <div class="row">
                            <div class="col-xs-6 col-sm-4">
                                <div class="android">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/Android.png" />
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 marginIosLeft">
                                <div class="appstore">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/App store1.png" />
                                </div>
                            </div>
                            <div class="col-sm-4 marginCodeLeft">
                                <div class="code">
                                    <img src="<?php bloginfo('template_directory'); ?>/image/QRcode.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--左侧内容结束-->
                <!--右侧图标开始-->
                <div class="col-xs-7 col-lg-7">
                    <div class="right_img">
                        <img src="<?php bloginfo('template_directory'); ?>/image/banner-itbang.png" />
                    </div>
                </div>
                <!--右侧图标结束-->
            </div>
        </div>
    </header>
    
    <!--菜单-->
    <!-- <div class="c">
        <div class="nav">
            <ul> -->
                <?php //wp_nav_menu() ?>
            <!-- </ul>
        </div>
    </div> -->
    <!--面包屑导航-->
    <?php 
        //wz(); // function.php自定义函数
    ?>