<?php
return array(
	//'配置项'=>'配置值'
    //禁止模块访问
   //  'MODULE_DENY_LIST'=>array('Common','Runtime'),
    //'MODULE_DENY_LIST'=>array('Runtime'),

    //允许模块访问
  //  'MODULE_ALLOW_LIST'=>array('Runtime','Admin'),
    //默认加载的模块
//    'DEFAULT_MODULE'=>'Admin',
    //只允许一个模块
//    'MULTI_MODULE'=>false,

    //设置键值对分隔符
//     'URL_PATHINFO_DEPR'=>'_',

    //修改键值名称  调用地址 如：http://localhost/index.php?mm=Home&cc=User&AA=test&user=Lee&pass=3211
//    'VAR_MODULE'=>'mm',
//    'VAR_CONTROLLER'=> 'cc',
//    'VAR_ACTION'=> 'AA',

    //mySql 全局定义
    'DB_TYPE'=>'mysql',
    'DB_HOST'=>'localhost',
    'DB_USER'=>'richie',
    'DB_PWD'=>'richie',
    'DB_NAME'=>'thinkphp',
    'DB_PORT'=>'3306',
    'DB_PREFIX'=>'think_',

    //PDO专用定义 连接方式
//    'DB_TYPE'   => 'pdo',
// 数据库类型
//'DB_USER'   => 'richie',
// 用户名
//'DB_PWD'    => 'richie',
// 密码
//'DB_PREFIX' => 'think_',
// 数据库表前缀
// 'DB_DSN'    => 'mysql:host=localhost;dbname=thinkphp;charset=UTF-8',

    'SHOW_PAGE_TRACE'=>true,
);