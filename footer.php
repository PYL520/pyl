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
            <div class="col-xs-5 footer_link">
                <?php wp_nav_menu(array(
                    'container_class' => 'menu-container',
                    'menu_id' => 'menu'
                )); ?>
            </div>
            <div class="col-xs-2">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/image/enterpriser.png" />
            </div>
            <div class="col-xs-2">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/image/engineer.png" />
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