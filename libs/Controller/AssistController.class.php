<?php
    class AssistController{
        function spider($params){
            //限制必须从spider函数入口进入,直接访问不予回应
            if(defined('SPIDER_RUN')){
                $assistModel=M('Assist');
                $assistModel->postSpider($params);
            }
        }
    }