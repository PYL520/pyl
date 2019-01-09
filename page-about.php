<?php get_header(); ?>
    <div class="c">
        <div id="left-box">
            <div id="post-box">
                <?php
                    //获取下一篇文章的信息，并且将信息存入全局变量$post中
                    the_post();
                    $zan = get_post_meta($post -> ID, '_zan', true);
                    update_post_meta($post -> ID, '_zan', $zan + 1);
                    $cat = get_the_category(get_the_ID()); // 获取分类信息

                    $name = $cat[0]->slug;
                    get_template_part('content', $name);// 加载模板，若第二个参数文件不在则加载第一个
                ?>
            </div>
        </div>
        <!--加载右边侧边栏-->
        <?php get_sidebar(); ?>
    </div>
    <!--获取底部php-->
    <?php get_footer(); ?>