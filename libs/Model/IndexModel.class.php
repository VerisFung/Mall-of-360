<?php 
    class IndexModel{
        function login($loginInfo){
            global $DB;

            $sql="SELECT  u.id,u.username,u.password,u.email,u.email_status,u.email_token,u.email_token_exptime,u.reg_ip,u.reg_time,u.last_ip,u.last_time,i.status FROM {$DB->pref}user as u,{$DB->pref}user_info as i WHERE u.id=i.user_id AND u.username like '$loginInfo[username]' and password like '$loginInfo[password]'";

            if($userInfo=$DB->query($sql)->fetchAll(PDO::FETCH_ASSOC)){
                //更新登录信息
                $DB->update('user',array(
                    'last_ip'   =>$_SERVER['REMOTE_ADDR'],
                    'last_time' =>$_SERVER['REQUEST_TIME'],
                ),"`id`='".$userInfo[0]['id']."'");
                return $userInfo[0];
            }else{
                return false;
            }
        }

        //退出登陆
        function logout(){
            if(isset($_SESSION['index'])){
                unset($_SESSION['index']); //清除会话
            }
            header('location:'.U('index/index'));
        }

        //获取登陆信息
        function getLoginInfo(){
            if(isset($_SESSION['index'])){
                $loginInfo=array(
                    'id'          =>$_SESSION['index']['id'],
                    'username'    =>$_SESSION['index']['username'],
                    'loginstatus' =>$_SESSION['index']['loginstatus'],
                );
            }else{
                $loginInfo['loginstatus']=0;
            }
            
            return $loginInfo;
        }
        
        function register($regInfo,$sendEmail=true){
            global $DB;
            global $siteInfo;
            
            $check=$DB->findOne('user','id',"`username`='$regInfo[username]' or `email`='$regInfo[email]'");
            if(!empty($check)){
                return 2;
            }

            //用户基本信息
            $nowtime=$_SERVER['REQUEST_TIME'];
            $userParams=array(
                'username'            =>$regInfo['username'],
                'password'            =>$regInfo['password'],
                'email'               =>$regInfo['email'],
                'email_status'        =>'0',
                'email_token'         =>md5($regInfo['username'].$regInfo['password'].$nowtime),
                'email_token_exptime' =>$nowtime+60*60*24,
                'reg_ip'              =>$_SERVER['REMOTE_ADDR'],
                'reg_time'            =>$nowtime,
                'last_ip'             =>$_SERVER['REMOTE_ADDR'],
                'last_time'           =>$nowtime,
            );
            if(($id=$DB->insert('user',$userParams))===false){
                return 0;
            }
            //用户详细信息
            $userInfoParams=array(
                'user_id'   =>$id,
                'true_name' =>'',
                'telephone' =>'',
                'mobile'    =>'',
                'area'      =>'0,0,0',
                'address'   =>'',
                'qq'        =>'',
                'sex'       =>'1',
                'brithday'  =>'',
                'exp'       =>'0',
                'point'     =>'0',
                'zip'       =>'',
                'status'    =>'1',
                'balance'   =>'0.00',
                'group_id'  =>'0',
            );
            if($DB->insert('user_info',$userInfoParams)===false){
                return 0;
            }

            if($sendEmail==true){
                $actlink='http://'.$_SERVER['SERVER_NAME'].U('user/activate/code/'.$userParams['email_token']);
                $sendInfo=array(
                    'to'      =>$regInfo['email'],//发送给谁
                    'title'   =>'欢迎注册'.$siteInfo['sitetitle'].'(请不要回复此邮件)', //邮件主题
                    'content' =>'<table style="margin: 25px auto;" border="0" cellspacing="0" cellpadding="0" width="648" align="center">
    <tbody>
    <tr><td style ="color:#2590BC;"><h1 style="margin-bottom:10px;">'.$siteInfo['sitetitle'].'</h1></td></tr>
    <tr>
    <td style="border-left: 1px solid #66ABC7; padding: 20px 20px 0px; background: none repeat scroll 0% 0% #ffffff; border-top: 5px solid #2590BC; border-right: 1px solid #66ABC7;">
    <p>'.$regInfo['username'].', 你好 </p>
    </td>
    </tr>
    <tr>
    <td style="border-left: 1px solid #66ABC7; padding: 10px 20px; background: none repeat scroll 0% 0% #ffffff; border-right: 1px solid #66ABC7;">
    <p>您已经成功注册为<strong>'.$siteInfo['sitetitle'].'</strong>会员！</p>
    <p style="font-weight:bold">请点击以下链接激活此帐号：<br>
    <a href="'.$actlink.'">'.$actlink.'</a></p>
    </td>
    </tr>
    <tr>
    <td style="border-bottom: 1px solid #66ABC7; border-left: 1px solid #66ABC7; padding: 0px 20px 20px; background: none repeat scroll 0% 0% #ffffff; border-right: 1px solid #66ABC7;">
    <hr style="color:#ccc;">
    <p style="color:#2590BC;font-size:9pt;">想了解更多信息，请访问 <a href="http://www.fytpy.com" target="_blank"></a></p>
    </td>
    </tr>
    </tbody>
    </table>', //邮件内容
                    'type'    =>'HTML', //邮件格式（HTML/TXT）,TXT为文本邮件
                );
                $commonModel=M('Common');
                $commonModel->sendEmail($sendInfo);
            }
            return 1;
        }

        //赞
        function updateZan($id){
            global $DB;
            $sql="UPDATE {$DB->pref}goods SET zan=zan+1 WHERE id='$id'";
            if($DB->query($sql)){
                return true;
            }
            return false;
        }
        //浏览次数
        function updateViews($id){
            global $DB;
            $sql="UPDATE {$DB->pref}goods SET views=views+1 WHERE id='$id'";
            $DB->query($sql);
            $views=$DB->findOne('goods','views',"id=$id")[0]['views'];
            return $views;
        }

        //获取购物车列表
        function getCartList(){
            $adminModel=M('Admin');
            $cartArr=isset($_SESSION['shopcart'])?$_SESSION['shopcart']:array();
            foreach($cartArr as $key => $value){
                $goodsInfo=$adminModel->getGoodsInfo($key);
                $goodsArr[$key]=array(
                    'gname' =>$goodsInfo['gname'],
                    'image' =>getImagePath(APP_NAME.'/uploads/image/',$goodsInfo['image'],'b'),
                    'price' =>$goodsInfo['price'],
                    'stock' =>$goodsInfo['stock'],
                    'num'   =>$value['num'],
                );
            }
            if(!isset($goodsArr)){
                $goodsArr=array();
            }
            return $goodsArr;
        }

        //添加购物车
        function addCart($id,$num){
            $adminModel=M('Admin');
            $stock=$adminModel->getGoodsInfo($id)['stock'];
            if(isset($_SESSION['shopcart'][$id])){
                $_SESSION['shopcart'][$id]['num']=$_SESSION['shopcart'][$id]['num']+$num;
            }else{
                $_SESSION['shopcart'][$id]['num']=$num;
            }
            $_SESSION['shopcart'][$id]['num']=max($_SESSION['shopcart'][$id]['num'],1);
            $_SESSION['shopcart'][$id]['num']=min($_SESSION['shopcart'][$id]['num'],$stock);
        }
        //设置购物车
        function setCart($id,$num){
            $adminModel=M('Admin');
            $stock=$adminModel->getGoodsInfo($id)['stock'];
            $_SESSION['shopcart'][$id]['num']=max($num,1);
            $_SESSION['shopcart'][$id]['num']=min($num,$stock);
        }
        //删除购物车
        function delCart($id){
            if(isset($_SESSION['shopcart'][$id])){
                unset($_SESSION['shopcart'][$id]);
            }
        }
        //删除购物车
        function delCartAll(){
            if(isset($_SESSION['shopcart'])){
                unset($_SESSION['shopcart']);
            }
        }
    }
?>