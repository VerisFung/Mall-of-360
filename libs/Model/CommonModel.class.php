<?php 
    class CommonModel{

        //获取验证码
        function getVerify(){
            return new Verify(140,35,4,0);
        }

        //邮件传输
        function sendEmail($sendInfo){
            global $config;

            $to      = $sendInfo['to'];         //发送给谁
            $title   = $sendInfo['title'];      //邮件主题
            $content = $sendInfo['content'];    //邮件内容
            $type    = $sendInfo['type'];       //邮件格式（HTML/TXT）,TXT为文本邮件

            $smtp = new smtp($config['email']['host'],$config['email']['port'],$config['email']['auth'],$config['email']['user'],$config['email']['pass']);
            $smtp->debug = $config['email']['debug'];
            $state = $smtp->sendmail($to, $config['email']['mail'], $title, $content, $type);
            if($state){
                return true;
            }else{
                return false;
            }
        }

        //获取站点配置
        function getSiteInfo(){
            global $DB;
            if($arr=$DB->findAll('config','item,value')){
                $siteInfo=array_combine(array_column($arr, 'item'),array_column($arr, 'value'));
                // foreach($siteInfo as $key => $value){
                //     $siteInfo[$key]=stripslashes($value);
                // }
                // var_dump($siteInfo);
                return $siteInfo;
            }else{
                return false;
            }
        }


    }
?>