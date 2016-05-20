<?php

    class AssistModel{
        //蜘蛛探测
        function postSpider($spiderInfo){
            global $DB;
            // var_dump($spiderInfo);
            $sql="insert into spider (module,action,params,atime,aip) values ('$spiderInfo[module]','$spiderInfo[action]','$spiderInfo[params]','$spiderInfo[atime]','$spiderInfo[aip]')";
            // echo $sql;
            if(@$nickname=$DB->query($sql)->fetchAll()){
                return true;
            }else{
                return false;
            }
        }
    }