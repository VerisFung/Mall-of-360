<?php
/**
 * @Author: Veris
 * @Date:   2015-10-28 14:17:01
 * @Last Modified by:   Veris
 * @Last Modified time: 2016-03-15 14:46:28
 */
    //控制器
    function C($module,$action,$params){
        global $config;

        //模块访问控制
        if(!array_key_exists($module,$config['moduleACL']) || !in_array($action, $config['moduleACL'][$module])){
            err404();
        }

        $path=APP_PATH.'libs/Controller/'.$module.'Controller.class.php';
        if(!file_exists($path)){
            logError('加载'.$module.'控制器失败！');
        }
        require_once($path);
        $controller=$module.'Controller';
        $obj=new $controller();
        if(!method_exists($obj,$action)){
            logError('加载'.$action.'模块失败！');
        }
        $obj->$action($params);
    }

    //模型
    function M($name){
        $path=APP_PATH.'libs/Model/'.$name.'Model.class.php';
        if(!file_exists($path)){
            logError('加载'.$name.'模型失败！');
        }
        require_once($path);
        $model =$name.'Model';
        $obj   =new $model();
        return $obj;
    }

    //视图
    function V($name){
        require_once(APP_PATH.'libs/View/'.$name.'View.class.php');
        $view =$name.'View';
        $obj  =new $view();
        return $obj;
    }

    //URL地址转换
    function U($url){
        if(strpos($url,'/')){
            $params=explode('/',$url);
            $urlNew=$params[0].'&a='.$params[1];
            for($i=2;$i<count($params);$i=$i+2){
                if(isset($params[$i+1])){
                    $urlNew.='&'.$params[$i].'='.$params[$i+1];
                }
            }
            //ucfirst自动URL规范
            return APP_NAME.'/index.php?m='.ucfirst($urlNew);
        } else {
            return APP_NAME.'/index.php?m='.ucfirst($url);
        }
    }

    // 获取GET数据
    function G($param){
        return isset($_GET[$param])?$_GET[$param]:null;
    }

    //JSON编码
    function J($arr=array(),$zh=false){
        // var_dump($arr);
        if($zh){
            foreach($arr as $key => $value){
                $arr[$key]=urlencode($value);
            }
            return urldecode(json_encode($arr));
        }
        return json_encode($arr);
    }

    //加载第三方插件
    function ORG($name,$path,$params){
        require_once(APP_PATH.'libs/ORG/'.$path.$name.'.class.php');
        $obj =new $name();
        if(!empty($params)){
            foreach ($params as $key => $value) {
                $obj->$key=$value;
            }
        }
        return $obj;
    }

    //安全过滤
    function S($str){
        return (!get_magic_quotes_gpc())?addslashes($str):$str;
    }
    

    //错误地址
    function err404(){
        require APP_PATH.TPL_NAME.'/404/404.php';
        die();
        // return die("<h1>404错误，没有该地址！<a href='javascript:history.go(-1);'>返回</a></h1>");
    }

    //提示
    function logNotice($str){
        echo '<h1>提示:'.$str.'</h1>';
    }

    //警告
    function logWarning($str){
        echo '<h1>警告:'.$str.'</h1>';
    }

    //错误
    function logError($str){
        die('<h1>错误:'.$str.'</h1>');
    }

    /**
     * 蜘蛛探测
     * @param  String $module 模块
     * @param  String $action 页面
     * @param  String $params 参数
     * @return 调用C函数传递探测数据
     */
    function spider($module,$action,$params){
        global $config;
        //蜘蛛探测规则
        if(
            //满足模块存在于探测列表中
            array_key_exists($module,$config['spiderACL']) 
            && 
            (
                //*表示允许探测该模块下所有页面
                (
                    in_array('*',$config['spiderACL'][$module]) 
                    || 
                    //满足页面存在于探测列表中
                    in_array($action,$config['spiderACL'][$module])
                ) 
                && 
                //^表示不允许探测该页面
                !in_array('^'.$action,$config['spiderACL'][$module])
            )
        ){
            //传递数据
            $post['module']=$module;
            $post['action']=$action;

            $post['params']='';
            foreach($params as $key => $value){
                $post['params'].=$key.'='.$value.'&';
            }
            $post['params']=rtrim($post['params'],'&');
            $post['atime']=time();
            $post['aip']=$_SERVER['REMOTE_ADDR'];
            // var_dump($post);

            //定义唯一入口钥匙
            define('SPIDER_RUN',TRUE);
            C('Assist','spider',$post);
        }
    }