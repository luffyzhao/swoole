<?php
return [
    // 数据库类型
    'type' => 'mysql',
    // 服务器地址
    'hostname' => '127.0.0.1,127.0.0.1',
    // 数据库名
    'database' => 'test,test1',
    // 用户名
    'username' => 'root',
    // 密码
    'password' => '123456',
    // 端口
    'hostport' => 3306,
    // 连接dsn
    'dsn' => '',
    // 数据库连接参数
    'params' => [],
    // 数据库编码默认采用utf8
    'charset' => 'utf8',
    // 数据库表前缀
    'prefix' => '',
    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'deploy' => 1,
    // 数据库读写是否分离 主从式有效
    'rw_separate' => true,
    // 读写分离后 主服务器数量
    'master_num' => 1,
    // 指定从服务器序号
    'slave_no' => '',
    // 调试
    'debug' => function ($messages) {
        \luffyzhao\Debug::info($messages);
    },
];
