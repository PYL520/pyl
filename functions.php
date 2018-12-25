<?php 
    add_action("after_setup_theme", "my_theme_setup");
    function my_theme_setup(){
        load_theme_textdomain('pyl', get_template_directory() . '/languages'); //wordpress内置的
    }

    //注册一个小工具
    register_sidebar(
        array(
            'name' => '侧边栏',
            'before_widget' => '<div class="sbox">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>'
        )
    );

    function wz(){ //面包屑函数
        if(!is_home()){ ?>
            <div class="c">
                <div class="wz">
                    <a href="<?php bloginfo('url'); ?>">首页</a>>
                    <?php 
                        if(is_category()){ // 分类
                            single_cat_title(); // 输出分类页
                        }elseif(is_search()){
                            echo $s; // 输出查询关键词
                        }elseif(is_single()){
                            $cat = get_the_category();
                            $cat = $cat[0];
                            echo '<a href="' . get_category_link($cat) . '">' . $cat->name . '</a>>文章内容';
                        }elseif(is_page()){ //独立页面
                            the_title();
                        }elseif(is_404()){
                            echo '404错误页面';
                        }
                    ?>
                </div>
            </div>
        <?php }
    }

    //添加伪静态规则
    add_filter('rewrite_rules_array', 'my_insert_rewrite_rules');
    add_filter('query_vars', 'my_insert_query_vars');
    add_action('wp_loaded', 'my_flush_rules');

    //如果伪静态规则里面没有我的规则，则进行重置
    function my_flush_rules(){
        $rules = get_option('rewrite_rules');

        if(!isset($rules['url-(.*).html$'])){
            global $wp_rewrite;
            $wp_rewrite->flush_rules(); // 重置
        }
    }

    //添加一个伪静态规则
    function my_insert_rewrite_rules($rules){
        $newrules = array();
        $newrules['url-(.*).html$'] = 'index.php?pagename=url&v=$matches[1]';
        return $newrules + $rules;
    }

    //添加一个变量名称
    function my_insert_query_vars($vars){
        array_push($vars, 'v');
        return $vars;
    }
?>