<?php
/**
 * @Author: Veris
 * @Date:   2015-10-22 12:43:41
 * @Last Modified by:   Veris
 * @Last Modified time: 2016-03-22 13:18:31
 */

    //******************** 初始化页面头信息 ********************
    
    //设置页面编码
    header('Content-Type:text/html;charset=utf-8');
    //设置默认时区
    date_default_timezone_set('asia/shanghai');
    //关闭错误报告
    error_reporting(0);
    //开启session
    session_start();


    //********************* 初始化底层代码 *********************

    //加载系统配置文件
    require_once(APP_PATH.'core/system.config.php');
    //加载系统函数库
    require_once(APP_PATH.'core/system.func.php');
    //加载用户函数库
    require_once(APP_PATH.'core/user.func.php');

    //************************ 加载类库 ************************

    //加载数据库类
    require_once(APP_PATH.'libs/Db.class.php');
    //加载用户配置文件
    require_once(APP_PATH.'core/user.config.php');
    //加载验证码类
    require_once(APP_PATH.'libs/Verify.class.php');
    //加载邮件传输类
    require_once(APP_PATH.'libs/Email.class.php');
    //初始化Smarty视图引擎
    $V=ORG('Smarty','smarty/',$config['view']);


    //加载响应层
    require_once(APP_PATH.'core/response.php');