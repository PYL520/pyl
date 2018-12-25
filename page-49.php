学习使用db</br>
<?php 
    global $wpdb;
    //显示数据库查询错误
    // $wpdb->show_errors();
    //使用insert插入数据表
    // $wpdb->insert('baoming', array('xm' => '扬龙', 'xb' => '男', 'xq' => 'wordpress'));
    //更新表
    // $wpdb->update('baoming', array('xm' => '龙龙', 'xb' => '女', 'xq' => '玩游戏'), array('id' => 2));
    //获取数据
    // $xm = $wpdb->get_var('select `xm` from `baoming` where `id` = 2');
    // echo $xm;
    //query()删除数据库中的数据
    // $wpdb->query('delete from `baoming` where `id` = 2');
    //查询数据返回数据集
    // $rows = $wpdb->get_results('select * from baoming');
    // foreach($rows as $row){
    //     echo $row->xm;
    // }
    //get_row() 从数据库中获取一行数据
    $row = $wpdb->get_row('select * from baoming', ARRAY_A, 2);
    echo $wpdb->last_error;
?>