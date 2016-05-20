<?php
/**
 * Common模块
 */
class CommonController{
    //验证码页
    function verify(){
        $indexModel=M('Common');
        $indexModel->getVerify();
    }
}