<?php
/**
 * @Author: Veris
 * @Date:   2015-10-28 14:49:24
 * @Last Modified by:   Veris
 * @Last Modified time: 2016-03-15 14:35:52
 */

    //*********************** 加载用户配置信息 ***********************
    
    $DB=new DB($config['db']);
    $sitesetModel=M('Common');
    $siteInfo=$sitesetModel->getSiteInfo();

    //*********************** 蜘蛛探测配置列表 ***********************

    //探测模块
    // $config['spiderACL']=array(
    //     'Index'=>array(
    //         'brands',
    //     ),
    // );


    //************************ Smarty配置信息 ************************

    if($siteInfo['sitecache']){
        $config['view']['caching']=true;
        $config['view']['cache_lifetime']=120;
    }
