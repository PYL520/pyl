<div id="right-box">
    <?php
        if(is_dynamic_sidebar()){
            dynamic_sidebar();
        }else { 
    ?>
    <div class="sbox">
        <h2>分类</h2>
        <ul>
            <?php wp_list_cats(); ?>
        </ul>
    </div>
    <div class="sbox">
        <h2>页面列表</h2>
        <ul>
            <?php wp_list_pages(); ?>    
        </ul>
    </div>
    <?php } ?>
    <div class="sbox">
        <h2>随机文章</h2>
        <?php 
            $args = array(
                'numberposts' => 3, //3篇文章
                'orderby' => 'rand' // 随机排序
            );
            $rand_posts = get_posts($args);
        ?>
        <ul>
            <?php 
                foreach($rand_posts as $post){
                    setup_postdata($post);
            ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php 
                }
                wp_reset_postdata(); 
            ?>
        </ul>
    </div>
</div>