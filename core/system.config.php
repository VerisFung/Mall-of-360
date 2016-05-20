<?php
/**
 * @Author: Veris
 * @Date:   2015-10-28 14:49:24
 * @Last Modified by:   Veris
 * @Last Modified time: 2016-03-21 19:42:44
 */

    //************************ 数据库配置信息 ************************

    $config['db']=array(
        'type' =>'mysql',               //数据库类型
        'host' =>'localhost',           //数据库地址
        'port' =>'3306',                //数据库端口
        'char' =>'utf8',                //数据库编码
        'name' =>'mall',             //数据库名称
        'pref' =>'mall_',                    //数据表前缀
        'user' =>'root',                //数据库账号
        'pass' =>'',                    //数据库密码
    );


    //*********************** 蜘蛛探测配置列表 ***********************

    //探测模块
    $config['spiderACL']=array(
        'Index'=>array("*"),
    );

    //*********************** 模块访问控制列表 ***********************

    $config['moduleACL']=array(
        'Common'=>array(            //**公共模块**
            'verify',               //验证码页
        ),
        'Index' =>array(            //**前台模块**
            'index',                //首页
            'register',             //注册页
            'login',                //登陆页
            'logout',               //登出页
            'brands',               
            'order',
            'product',
            'allproduct',
            'shopcart',
            'user',
            'usertry',
            'zan',
        ),
        'User' =>array(             //**用户模块**
            'activate',             //邮箱验证
        ),
        'Admin' =>array(            //**后台模块**
            'index',                //首页
            'login',                //登陆页
            'logout',               //登出页
            'siteset',
            'notify',
            'goods',
            'order',
            'nav',
            'classify',
            'brands',
            'user',
            'save',
            'user',
            'addranduser',
            'adduser',
            'edituser',
            'adminset',
            'comment',
        ),
        'Assist'=>array(            //**辅助模块**
            'spider',
        ),
        'Api'=>array(               //**API接口模块**
            'getareas',             //获取全国地区信息
            'getclassify',
            'checkform',
        ),
    );

    //************************ Smarty配置信息 ************************

    $config['view']=array(
        'left_delimiter'  => '{',
        'right_delimiter' => '}',
        'template_dir'    => 'template',
        'compile_dir'     => 'template_c',
        'cache_dir'       => 'cache',
        // 'caching' => true,
        // 'cache_lifetime' => 120,
    );

    //************************* SMTP配置信息 *************************

    $config['email']=array(
        'host'  =>'smtp.qq.com',        //SMTP服务器
        'port'  =>25,                   //SMTP服务器端口
        'auth'  =>true,                 //是否启用身份验证
        'mail'  =>'562854011@qq.com',   //SMTP服务器的用户邮箱
        'user'  =>'562854011',          //SMTP服务器的用户帐号
        'pass'  =>'',           //SMTP服务器的用户密码
        'debug' =>false,                 //是否显示发送的调试信息
    );

    //*********************** 系统常量配置信息 ***********************

    //站点路径名称
    if(dirname($_SERVER['SCRIPT_FILENAME'])==$_SERVER['DOCUMENT_ROOT']){
        define('APP_NAME','');
    } else{
        define('APP_NAME',substr(dirname($_SERVER['SCRIPT_FILENAME']),strlen($_SERVER['DOCUMENT_ROOT'])-1));
    }

    //模板目录名称
    define('TPL_NAME',$config['view']['template_dir']);

    //模板路径
    define('TPL_PATH',APP_NAME.'/'.TPL_NAME);