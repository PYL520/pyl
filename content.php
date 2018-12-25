<div class="post-item">
    <div class="post-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
    <div class="post-meta">
        <?php _e('category', 'pyl'); // 翻译 ?>:<?php the_category(','); ?><span>|</span>
        <?php _e('author', 'pyl'); ?>:<?php the_author(); ?><span>|</span>
        阅读：<?php echo get_post_meta($post->ID, '_zan', true); ?><span>|</span>
        <?php echo __('time', 'pyl'); ?>:<?php the_time('Y-m-d'); ?>
        <?php edit_post_link(__('Edit', 'pyl'), '<span>|</span>', ''); ?>
    </div>
    <div class="post-content"><?php the_content(); ?></div>
    <div class="post-nav">
        <?php previous_post_link('上一篇：%link'); ?><br />
        <?php next_post_link('下一篇：%link'); ?>
    </div>
</div>