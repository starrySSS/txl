<?php
return array(
    //'配置项'=>'配置值'
    'TMPL_ENGINE_TYPE'=>'Smarty',
    'TMPL_ENGINE_CONFIG'	=> array(
        'left_delimiter' => '<{',
        'right_delimiter' => '}>',
    ),


    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '139.199.196.26', // 服务器地址
    'DB_NAME'               =>  'txl',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123456',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'tb_',    // 数据库表前缀
    'SHOW_PAGE_TRACE'       =>  'true',
    'SESSION_AUTO_START'    =>  true,    // 是否自动开启Session

);