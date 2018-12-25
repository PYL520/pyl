<div class="c">
    <div class="footer">
        <p>版权所有<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></p>
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