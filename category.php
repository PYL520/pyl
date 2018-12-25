<?php get_header(); ?>
    <div class="c">
        <div class="cat-title">【<?php single_cat_title(); ?>】分类下的文章:</div>
    </div>
    <div class="c">
        <div id="left-box">
            <div id="home-loop">
                <?php
                    global $post; // 生命全局变量调用
                    if(have_posts()){
                        while(have_posts()){
                            //获取下一篇文章的信息，并且将信息存入全局变量$post中
                            the_post();
                            ?>
                            <div class="post-item">
                                <div class="post-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
                                <div class="post-content"><?php the_content(); ?></div>
                                <div class="post-meta">
                                    <?php _e('category', 'pyl'); // 翻译 ?>:<?php the_category(','); ?><span>|</span>
                                    <?php _e('author', 'pyl'); ?>:<?php the_author(); ?><span>|</span>
                                    <?php echo __('time', 'pyl'); ?>:<?php the_time('Y-m-d'); ?>
                                    <?php edit_post_link(__('Edit', 'pyl'), '<span>|</span>', ''); ?>
                                </div>
                            </div>
                            <?php
                        }
                    }else{
                        echo "没有日志可以显示";
                    }
                ?>
            </div>
            <div class="posts_nav_link">
                <!--自动生成翻页导航链接-->
                <?php posts_nav_link() ?>
            </div>
        </div>
        <!--加载右边侧边栏-->
        <?php get_sidebar(); ?>
    </div>
    <!--获取底部php-->
    <?php get_footer(); ?>