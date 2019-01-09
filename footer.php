<div class="container-fluid footer_wrapper">
        <!--背景图-->
        <div class="row small_program_wrapper">
            <div class="col-1-1 small_program">小程序下载中心</div>
            <div class="col-1-1 small_program_download">
                <div class="small_program_btn">点击进入</div>
            </div>
        </div>
        <!--底部链接-->
        <div class="row footer_link_wrapper">
            <div class="col-sm-5 col-md-4 col-lg-3 footer_link">
                <?php wp_nav_menu(array(
                    'container_class' => 'menu-container',
                    'menu_id' => 'menuWrapper'
                )); ?>
            </div>
            <!--两个二维码-->
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-1 col-sm-offset-3 footer_enterpriser">
                <div class="footer_enterpriser_img">
                    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/image/enterpriser.png" />
                </div>
                <div class="footer_img_title">企业端APP下载</div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2 col-lg-1 footer_engineer">
                <div class="footer_engineer_img">
                    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/image/engineer.png" />
                </div>
                <div class="footer_img_title">工程师端APP下载</div>
            </div>
        </div>
        <!--底部版权-->
        <div class="row">
            <div class="col-sm-12 footer_copyright">
                Copyright © 2002-2018，www.gzsam.com.cn，All rights reserved 版权所有 © 广州赛姆科技资讯股份有限公司 粤ICP备16068226号-1
            </div>
        </div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/header.js"></script>
<?php 
    if(is_home()){ ?>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/index.js"></script>
    <?php }
?>
</body>
</html>