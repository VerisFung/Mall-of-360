<?php
/**
 * @Author: Veris
 * @Date:   2015-12-13 20:25:09
 * @Last Modified by:   Veris
 * @Last Modified time: 2016-03-22 12:07:14
 */

    // var_dump($_SESSION);
    $params=$_GET;
    $module=$params['m']=isset($_GET['m']) && !empty($_GET['m']) ? $_GET['m'] : 'Index';
    $action=$params['a']=isset($_GET['a']) && !empty($_GET['a']) ? $_GET['a'] : 'index';
    unset($params['a']);
    unset($params['m']);


    //站点开关检测
    if(!$siteInfo['sitestatus'] && $module!='Admin'){
        logError('站点已关闭!');
    }

    //限制后台登陆
    if(strtolower($module)=='admin' && strtolower($action)!='login'){
        if(isset($_SESSION['admin']['loginstatus']) && ($_SESSION['admin']['loginstatus']==1)){
        }else{
            header('location:'.U('admin/login'));
            exit();
        }
    }
    //加载控制器
    C($module,$action,$params);
    //蜘蛛探测
    // spider($module,$action,$params);
    