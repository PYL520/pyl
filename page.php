<?php get_header(); ?>
    <div class="c">
            <div id="page-box">
                <?php
                    //获取下一篇文章的信息，并且将信息存入全局变量$post中
                    the_post();
                ?>
                <div class="post-item page-item">
                    <div class="post-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
                    <div class="post-meta">
                        <?php _e('author', 'pyl'); ?>:<?php the_author(); ?><span>|</span>
                        <?php echo __('time', 'pyl'); ?>:<?php the_time('Y-m-d'); ?>
                        <?php edit_post_link(__('Edit', 'pyl'), '<span>|</span>', ''); ?>
                    </div>
                    <div class="post-content"><?php the_content(); ?></div>
                </div>
                <?php comments_template(); ?>
            </div>
    </div>
    <!--获取底部php-->
    <?php get_footer(); ?>