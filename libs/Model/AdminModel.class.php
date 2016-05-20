<?php

    class AdminModel{

        function getTopGoods(){
            $class=$this->getClassifyDisplay(1);
            foreach($class as $key => $value){
                $class_id=$value['id'];
                $path=$this->getClassifyPath($class_id);
                $in_id='';
                foreach($path as $value2){
                    $in_id.=$value2['id'].',';
                }
                $in_id=rtrim($in_id,',');
                $where="class_id in ($in_id)";
                if($in_id==''){
                    $where="class_id in ($class_id)";
                }
                $goods=$this->getGoodsList(0,6,$where);
                foreach($goods as $keys => $values){
                    $goods[$keys]['image']=getImagePath(APP_NAME.'/uploads/image/',$values['image'],'c');
                }
                $topGoods[$value['name']][]=$value['id'];
                $topGoods[$value['name']][]=$goods;
            }
            if(!isset($topGoods))
                return array();
            return $topGoods;
        }

        //登录
        function login($loginInfo){
            global $DB;
            $sql="SELECT a.id,a.username,a.last_time,r.name as role_name,r.id as role_id,r.level FROM {$DB->pref}admin as a,{$DB->pref}role as r where a.role_id=r.id and username like '$loginInfo[username]' and password like '$loginInfo[password]'";
            $userInfo=$DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            if($userInfo){
                //更新登录信息
                $DB->update('admin',array(
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
            if(isset($_SESSION['admin'])){
                unset($_SESSION['admin']); //清除会话
            }
            header('location:'.U('admin/login'));
        }

        //获取登陆信息
        function getLoginInfo(){
            if(isset($_SESSION['admin'])){
                $loginInfo=$_SESSION['admin'];
                $_SESSION['admin']['loginstatus']=1;
            }else{
                $loginInfo['loginstatus']=0;
            }
            return $loginInfo;
        }


        //获取管理员列表信息
        function getAdminList(){
            global $DB;
            $sql="SELECT a.id,a.username,a.email,a.last_time,a.last_ip,r.level as role_level,r.name as role_name FROM {$DB->pref}admin as a,{$DB->pref}role as r WHERE a.role_id=r.id order by id";
            return $DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }

        //添加管理员
        function addAdmin($username,$password,$email){
            global $DB;
            $password=md5($password);
            $last_ip=$_SERVER['REMOTE_ADDR'];
            $create_time=$last_time=$_SERVER['REQUEST_TIME'];
            $role_id=1;
            $adminInfo=compact('username','password','create_time','email','last_ip','last_time','role_id');
            // var_dump($adminInfo);
            return $DB->insert('admin',$adminInfo);
        }

        //删除管理员
        function delAdmin($id){
            global $DB;
            if($_SESSION['admin']['level']==255){
                $DB->delete('admin',"(role_id<>2) and (id='$id')");
            }
        }

        //获取用户列表信息
        function getUserList($offset=0,$rows=1,$where=1){
            global $DB;
            $sql="SELECT u.id, u.username, i.group_id, i.true_name, i.sex, u.email, i.point, i.status, u.reg_time, i.telephone ,i.exp FROM {$DB->pref}user as u,{$DB->pref}user_info as i WHERE u.id=i.user_id and $where limit $offset,$rows";
            // echo $sql;
            return $DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }

        //获取用户组列表信息
        function getGroupList(){
            global $DB;
            $result=$DB->findAll('user_group','*');
            return $result;
        }

        //获取用户数量
        function getUserCount($where=1){
            global $DB;
            // var_dump($sql);
            $sql="SELECT count(*) as total FROM {$DB->pref}user as u,{$DB->pref}user_info as i WHERE u.id=i.user_id and $where limit 1";
            // echo $sql;
            $total=$DB->query($sql)->fetchAll(PDO::FETCH_ASSOC)[0]['total'];
            if($total){
                return $total;
            }else{
                return 0;
            }
        }

        //获取用户信息
        function getUserInfo($id=null){
            global $DB;
            $sql="SELECT u.id, u.username, u.email, u.password,i.avatar, i.group_id, i.true_name, i.sex, i.mobile, i.telephone, i.area, i.address, i.zip, i.qq, i.exp, i.point, i.status, u.reg_time FROM {$DB->pref}user as u,{$DB->pref}user_info as i WHERE u.id=i.user_id and u.id='$id' limit 1";
            // echo $sql;
            return $DB->query($sql)->fetchAll(PDO::FETCH_ASSOC)[0];
        }

        //删除用户
        function delUser($id=null){
            global $DB;
            $DB->delete('user_info',"user_id='$id'");
            $DB->delete('user',"id='$id'");
        }

        //添加用户组
        function addGroup($groupInfo){
            global $DB;
            if($groupInfo['minexp']=='' || $groupInfo['maxexp']==''){
                $sql="insert into {$DB->pref}user_group values (NULL,'$groupInfo[name]','$groupInfo[discount]',NULL,NULL)";
            }else{
                $sql="insert into {$DB->pref}user_group values (NULL,'$groupInfo[name]','$groupInfo[discount]','$groupInfo[minexp]','$groupInfo[maxexp]')";
            }
            return $DB->query($sql);
        }

        //删除用户组
        function delGroup($id=null){
            global $DB;
            $DB->update('user_info',array('group_id'=>''),"group_id='$id'");
            $DB->delete('user_group',"id='$id'");
        }

        //保存用户组
        function editGroup($groupInfo,$id){
            global $DB;
            if($groupInfo['minexp']=='' || $groupInfo['maxexp']==''){
                $sql="update {$DB->pref}user_group set name='$groupInfo[name]',discount='$groupInfo[discount]',minexp=NULL,maxexp=NULL where id='$id'";
            }else{
                $sql="update {$DB->pref}user_group set name='$groupInfo[name]',discount='$groupInfo[discount]',minexp='$groupInfo[minexp]',maxexp='$groupInfo[maxexp]' where id='$id'";
            }
            return $DB->query($sql);
        }

        //格式化用户列表
        function formatUserInfo($userList){
            global $DB;
            $arr=$DB->findAll('user_group','*');
            foreach($arr as $values){
                $groupList[$values['id']]=array(
                    'name'=>$values['name'],
                    'minexp'=>$values['minexp'],
                    'maxexp'=>$values['maxexp'],
                );
            }
            // var_dump($userList);
            foreach($userList as $keys => $values){
                foreach($groupList as $value){
                    if(($values['exp']>$value['minexp'] || $values['exp']==$value['minexp']) && ($values['exp']<$value['maxexp'] || $values['exp']==$value['maxexp'])){
                        $userList[$keys]['group_id']=$value['name'];
                    }
                }
                if(isset($groupList[$values['group_id']]) && $groupList[$values['group_id']]['minexp']=='' && $groupList[$values['group_id']]['maxexp']==''){
                    $userList[$keys]['group_id']=$groupList[$values['group_id']]['name'];
                }
                switch($values['sex']){
                    case 0:
                        $userList[$keys]['sex']='女';
                        break;
                    case 1:
                        $userList[$keys]['sex']='男';
                        break;
                    case 2:
                        $userList[$keys]['sex']='保密';
                        break;
                }
                switch($values['status']){
                    case 0:
                        $userList[$keys]['status']='锁定';
                        break;
                    case 1:
                        $userList[$keys]['status']='正常';
                        break;
                }
                $userList[$keys]['reg_time']=date('Y-m-d H:i:s',$values['reg_time']);
            }
            return $userList;
        }

        //获取商品分类列表
        function getClassifyList($pid='0'){
            global $DB;
            $result=$DB->findAll('goods_classify','*',"pid='$pid'");
            return $result;
        }
        //获取商品全部分类
        function getClassifyListAll($where=1){
            global $DB;
            $result=$DB->findAll('goods_classify',"id,name,concat(`path`,`id`) as bpath","$where order by bpath");
            return $result;
        }
        //获取商品分类名
        function getClassifyName($id){
            global $DB;
            $result=$DB->findOne('goods_classify','name',"id='$id'")[0]['name'];
            return $result;
        }
        //获取分类path
        function getClassifyPath($id){
            global $DB;
            $result=$DB->findAll('goods_classify','id',"path like '%,$id,%'");
            return $result;
        }
        //获取商品分类家族
        function getClassifyClan($id){
            global $DB;
            $path=$DB->findOne('goods_classify','*',"id='$id'")[0]['path'].$id;
            $path=ltrim($path,'0,');
            $arr=explode(',',$path);
            foreach($arr as $value){
                $name[$value]=$this->getClassifyName($value);
            }
            return $name;
        }

        function getClassifyDisplay($status=1){
            global $DB;
            $result=$DB->findAll('goods_classify','*',"display='$status'");
            return $result;
        }

        //增加商品分类
        function addClassify($name){
            global $DB;
            $classifyInfo=array(
                'name'=>$name,
                'pid'=>0,
                'path'=>'0,'
            );
            $result=$DB->insert('goods_classify',$classifyInfo);
            return $result;
        }

        //检查是否含有子类
        function checkSubClassify($id){
            global $DB;
            $total=$DB->findOne('goods_classify','count(*) as total',"path like '%,$id,%'")[0]['total'];
            if($total>0){
                return false;
            }
            return true;
        }
        //删除商品分类
        function delClassify($id){
            global $DB;
            $total=$DB->findOne('goods','count(*) as total',"class_id='$id'")[0]['total'];
            if($total>0){
                return false;
            }
            $path=$DB->findOne('goods_classify','path',"id='$id'")[0]['path']."$id,";
            // echo $path;
            $result=$DB->delete('goods_classify',"id='$id'");
            $result=$DB->delete('goods_classify',"path like '$path%'");
            return true;
        }

        //编辑商品分类
        function editClassify($name,$id){
            global $DB;
            $classifyInfo=array(
                'name'=>$name
            );
            $result=$DB->update('goods_classify',$classifyInfo,"id=$id");
            return $result;
        }
        //改变分类显示状态
        function changeDisplay($id,$status){
            global $DB;
            if(($status!=1) && ($status!=0)){
                $status=0;
            }
            $classifyInfo=array(
                'display'=>$status,
            );
            $result=$DB->update('goods_classify',$classifyInfo,"id=$id");
            return $result;
        }
        //增加商品子分类
        function addSubClassify($name,$pid,$path){
            global $DB;
            $classifyInfo=array(
                'name'=>$name,
                'pid'=>$pid,
                'path'=>$path
            );
            $result=$DB->insert('goods_classify',$classifyInfo);
            return $result;
        }
        //增加商品子分类2
        function addSub2Classify($name,$pid){
            global $DB;
            if($pid==0){
                $path='0,';
            }else{
                $path=$DB->findOne('goods_classify','path',"id='$pid'")[0]['path'].$pid.',';
            }
            $classifyInfo=array(
                'name'=>$name,
                'pid'=>$pid,
                'path'=>$path
            );
            // echo $path;
            $result=$DB->insert('goods_classify',$classifyInfo);
            return $result;
        }

        //导入子分类
        function importClassify($arr,$pid=0){
            global $DB;
            foreach($arr as $key => $value){
                $id=$this->addSub2Classify($value->name,$pid);
                $this->importClassify($value->list,$id);
            }
        }


        //获取商品数量
        function getGoodsCount($where=1){
            global $DB;
            $total=$DB->findOne('goods','count(*) as total',"$where")[0]['total'];
            if($total){
                return $total;
            }else{
                return 0;
            }
        }
        //获取商品列表信息
        function getGoodsList($offset=0,$rows=1,$where=1,$order=''){
            global $DB;
            if($where==1){
                $sql="SELECT g.id,g.gname,g.class_id,c.name as class_name,i.iname as image,g.price,g.point,g.stock,g.sale,g.isnew,g.ishot,g.status,g.zan,g.description,c.pid,c.path FROM {$DB->pref}goods as g,{$DB->pref}goods_classify as c,{$DB->pref}image as i WHERE g.class_id=c.id AND g.id=i.goods_id AND i.cover=1 $order limit $offset,$rows";
            }else{
                $sql="SELECT g.id,g.gname,g.class_id,c.name as class_name,i.iname as image,g.price,g.point,g.stock,g.sale,g.isnew,g.ishot,g.status,g.zan,g.description,c.pid,c.path FROM {$DB->pref}goods as g,{$DB->pref}goods_classify as c,{$DB->pref}image as i WHERE g.class_id=c.id AND g.id=i.goods_id AND i.cover=1 AND g.$where $order limit $offset,$rows";
            }
            // echo $sql;
            return $DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        }
        //获取商品信息
        function getGoodsInfo($id=null){
            global $DB;
            $sql="SELECT g.id,g.gname,g.class_id,c.name as class_name,i.iname as image,g.price,g.point,g.stock,g.sale,g.isnew,g.ishot,g.status,g.zan,g.description,g.content FROM {$DB->pref}goods as g,{$DB->pref}goods_classify as c,{$DB->pref}image as i WHERE g.class_id=c.id AND g.id=i.goods_id AND i.cover=1 AND g.id='$id' limit 1";
            // echo $sql;
            $result=$DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            if(empty($result)){
                return array();
            }
            return $result[0];
        }
        //删除商品
        function delGoods($id){
            global $DB;
            $goodsInfo=$this->getGoodsInfo($id)['content'];
            preg_match_all('/<img src="\/mall\/(.*?)"[\s\S]*?[\/]?>/u',$goodsInfo,$arr);
            $content_image=$arr[1];
            foreach($content_image as $value){
                if(file_exists(APP_PATH.$value)){
                    unlink(APP_PATH.$value);
                }
            }
            $imageArr=$DB->findAll('image','id',"goods_id=$id");
            foreach($imageArr as $key => $value){
                $this->delGoodsImage($value['id']);
            }
            $DB->delete('image',"goods_id='$id'");
            $DB->delete('goods',"id='$id'");
        }
        //改变新品状态
        function changeGoodsIsnew($id,$status){
            global $DB;
            if(($status!=1) && ($status!=0)){
                $status=0;
            }
            $goodsInfo=array(
                'isnew'=>$status,
            );
            $result=$DB->update('goods',$goodsInfo,"id=$id");
            return $result;
        }
        //改变热销状态
        function changeGoodsIshot($id,$status){
            global $DB;
            if(($status!=1) && ($status!=0)){
                $status=0;
            }
            $goodsInfo=array(
                'ishot'=>$status,
            );
            $result=$DB->update('goods',$goodsInfo,"id=$id");
            return $result;
        }
        //改变上架状态
        function changeGoodsStatus($id,$status){
            global $DB;
            if(($status!=1) && ($status!=0)){
                $status=0;
            }
            $goodsInfo=array(
                'status'=>$status,
            );
            $result=$DB->update('goods',$goodsInfo,"id=$id");
            return $result;
        }


        //获取商品图片信息
        function getGoodsImageInfo($id=null){
            global $DB;
            return $DB->findAll('image','*',"goods_id='$id' order by cover desc");
        }

        //删除商品图片
        function delGoodsImage($id){
            global $DB;
            $filename2=$DB->findOne('image','iname',"id=$id")[0]['iname'];
            $DB->delete('image',"id=$id");
            $img_path2 =  APP_PATH.'uploads/image/';
            $img_path2 .= substr($filename2,0,4).'/';
            $img_path2 .= substr($filename2,4,2).'/';
            $img_path2 .= substr($filename2,6,2).'/';
            $img_path2 .= $filename2;
            @unlink($img_path2);
            @unlink(dirname($img_path2).'/180_'.$filename2);
            @unlink(dirname($img_path2).'/64_'.$filename2);
            @unlink(dirname($img_path2).'/32_'.$filename2);
        }
        //设置封面
        function setCover($id){
            global $DB;
            $goods_id=$DB->findOne('image','goods_id',"id='$id'")[0]['goods_id'];
            $DB->update('image',array('cover'=>'0'),"goods_id='$goods_id'");
            $DB->update('image',array('cover'=>'1'),"id='$id'");
        }

        //采集商品
        function collectionGoods($class_id,$item_id){
            global $DB;

            $item=file_get_contents('http://mall.360.com/shop/item?item_id='.$item_id);

            preg_match('/<div class="tr nobdr">(.*?)<\/div>/u',$item,$arr);
            $result=$arr[1];

            preg_match('/<strong>(.*?)<\/strong>/u',$result,$arr2);
            $title=$arr2[1];

            preg_match('/<p class=slogan>(.*?)<\/p>/u',$result,$arr3);
            $description=strip_tags(str_replace('<br>',"\r\n",$arr3[1]));

            preg_match('/<strong class=nowprice>[\s]*<em>￥<\/em>[\s]*(.*?)[\s]*<\/strong>/u',$item,$arr4);
            $price=$arr4[1];

            preg_match('/<div class="scroll-items">(.*?)<\/div>/u',$item,$arr5);
            preg_match_all('/<img src="(.*?)"[\s\S]*?[\/]?>/u',$arr5[1],$arr6);
            $preview_old_image=$arr6[1];

            foreach($preview_old_image as $value){
                $img = file_get_contents($value);
                $ext=pathinfo($value,PATHINFO_EXTENSION);
                $path=APP_PATH.'uploads/image/'.date('Y/m/d/');
                $name=$path.date('Ymd').uniqid().'.'.$ext;
                if(!file_exists($path)){
                    mkdir($path,0777,true);
                }
                file_put_contents($name,$img);
                $preview_new_image[]=basename($name);
            }

            preg_match('/<div class=gCon>(.*?)<\/div>/u',$item,$arr7);
            $content=$arr7[1];

            preg_match_all('/<img data-original="(.*?)"[\s\S]*?\/>/u',$item,$arr8);
            $content_old_image=$arr8[1];

            foreach($content_old_image as $value){
                $img = file_get_contents($value);
                $ext=pathinfo($value,PATHINFO_EXTENSION);
                $path=APP_PATH.'uploads/image/'.date('Y/m/d/');
                $name=$path.date('Ymd').uniqid().'.'.$ext;
                if(!file_exists($path)){
                    mkdir($path,0777,true);
                }
                file_put_contents($name,$img);
                $content_new_image[]=APP_NAME.'/uploads/image/'.date('Y/m/d/').pathinfo($name,PATHINFO_BASENAME);
            }

            foreach($content_old_image as $key => $value){
                $content=str_replace($value,$content_new_image[$key],$content);
            }
            $content=str_replace('data-original','src',$content);

            //=======================
            foreach($preview_new_image as $key => $value){
                $filename = $value;
                $img_path =  APP_PATH.'uploads/image/';
                $img_path .= substr($filename,0,4).'/';
                $img_path .= substr($filename,4,2).'/';
                $img_path .= substr($filename,6,2).'/';
                $img_path .= $filename;

                if (
                    !zoom($img_path,180,180) 
                    || 
                    !zoom($img_path,64,64) 
                    || 
                    !zoom($img_path,32,32)
                    ) {
                    //有一张失败 缩放失败 就删除所有图片
                    @unlink($img_path);
                    @unlink(dirname($img_path).'/180_'.$filename);
                    @unlink(dirname($img_path).'/64_'.$filename);
                    @unlink(dirname($img_path).'/32_'.$filename);
                    logError('图片缩放失败');
                    exit;
                }


                if($key==0){
                    //处理商品信息
                    $goodsInfo=array(
                        'gname'       =>$title,
                        'class_id'    =>$class_id,
                        'price'       =>$price,
                        'point'       =>$price,
                        'stock'       =>999,
                        'isnew'       =>0,
                        'ishot'       =>0,
                        'status'      =>1,
                        'description' =>$description,
                        'content'     =>$content,
                    );

                    //返回自增ID
                    $id = $DB->insert('goods',$goodsInfo);
                    if (!$id) {
                        //商品添加失败,要删除之前处理好的图片
                        @unlink($img_path);
                        @unlink(dirname($img_path).'/180_'.$filename);
                        @unlink(dirname($img_path).'/64_'.$filename);
                        @unlink(dirname($img_path).'/32_'.$filename);
                        logError('商品表写入失败');
                        exit;
                    }
                    $cover=1;
                }else{
                    $cover=0;
                }

                // 图片信息处理
                $goods_id = $id;//商品的自增ID

                //执行添加
                $imageInfo=array(
                    'iname'    =>$filename,
                    'goods_id' =>$goods_id,
                    'cover'    =>$cover,
                );
                $result = $DB->insert('image',$imageInfo);

                //判断图片表写入成功否?
                if (!$result) {
                    //商品添加失败,要删除之前处理好的图片
                    @unlink($img_path);
                    @unlink(dirname($img_path).'/180_'.$filename);
                    @unlink(dirname($img_path).'/64_'.$filename);
                    @unlink(dirname($img_path).'/32_'.$filename);
                    $DB->delete('goods',"id=$id");
                    logError('商品添加失败了啊 ...');
                    exit;
                }
            }
            //=======================
            echo 1;
        }



        //获取订单数量
        function getOrderCount($where=1){
            global $DB;
            $total=$DB->findOne('order','count(*) as total',$where)[0]['total'];
            if($total){
                return $total;
            }else{
                return 0;
            }
        }
        //获取订单数量
        function getOrderSumPrice($where=1){
            global $DB;
            $total=$DB->findOne('order','sum(allprice) as allprice',$where)[0]['allprice'];
            if($total){
                return $total;
            }else{
                return 0;
            }
        }
        //获取订单列表
        function getOrderList($offset=0,$rows=1,$where=1){
            global $DB;
            // $sql="SELECT o.id,o.num,o.user_id,o.oname,o.phone,o.address,o.allprice,o.ostatus,og.goods_id,og.price,og.qty FROM {$DB->pref}order as o,{$DB->pref}order_goods as og WHERE o.id=og.order_id AND $where  limit $offset,$rows";

            $result=$DB->findAll('order','*',"$where order by id desc limit $offset,$rows");
            return $result;
        }
        //获取订单商品
        function getOrderGoods($id){
            global $DB;
            $sql="SELECT g.id,g.gname,og.price,og.qty,i.iname FROM {$DB->pref}goods as g,{$DB->pref}order_goods as og,{$DB->pref}image as i WHERE i.goods_id=g.id AND cover=1 AND og.goods_id=g.id AND og.order_id='$id'";
            $result=$DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        //统计各商品分类销量及浏览数
        function getClassCountData(){
            global $DB;
            $sql="select class_id,sum(sale) as sale,sum(views) as views from {$DB->pref}goods group by class_id order by sale desc";
            $result=$DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        //统计分类下商品数
        function getClassCount(){
            global $DB;
            $result=$DB->findAll('goods','class_id,count(*) as total',"1 group by class_id");
            return $result;
        }

        //获取全部评论列表
        function getMsgListAll(){
            global $DB;
            $sql="SELECT c.id,i.true_name,c.goods_id,c.user_id,c.msg,c.uptime,i.avatar FROM {$DB->pref}comment as c,{$DB->pref}user_info as i WHERE c.user_id=i.user_id";
            // echo $sql;
            $result=$DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        //获取评论列表
        function getMsgList($id){
            global $DB;
            $sql="SELECT c.id,i.true_name,c.goods_id,c.user_id,c.msg,c.uptime,i.avatar FROM {$DB->pref}comment as c,{$DB->pref}user_info as i WHERE c.user_id=i.user_id AND goods_id='$id'";
            // echo $sql;
            $result=$DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        //添加评论列表
        function addMsg($goods_id,$user_id,$msg){
            global $DB;
            $commentInfo=array(
                'goods_id' =>$goods_id,
                'user_id'  =>$user_id,
                'msg'      =>$msg,
                'uptime'   =>time(),
            );
            $result=$DB->insert('comment',$commentInfo);
            return $result;
        }

        //获取订单关系
        function relationOrder($goods_id,$user_id){
            global $DB;
            $sql="select o.user_id,og.goods_id,og.order_id,o.ostatus FROM {$DB->pref}order as o,{$DB->pref}order_goods as og WHERE o.id=og.order_id AND user_id='$user_id' AND goods_id='$goods_id' AND ostatus=2";
            $result=$DB->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            if($result)
                return true;
            return false;
        }

        function save($saveInfo){
            global $DB;
            $action='';
            if(isset($saveInfo['action'])){
                $action=$saveInfo['action'];
                unset($saveInfo['action']);
            }
            switch($action){
                case 'baseset':
                case 'seoset':
                    foreach($saveInfo as $key => $value){
                        $result=$DB->updateConfig('config','value',S($value),"`item`='$key'");
                        if(!$result)
                            return '0';
                    }
                    return '1';
                    break;
                case 'userinfo':
                    $userBase=array(
                        'username'  =>$saveInfo['username'],
                        'email'     =>$saveInfo['email'],
                    );
                    if(!empty($saveInfo['password'])){
                         $userBase['password']=md5($saveInfo['password']);
                    }

                    $userExt=array(
                        'group_id'  =>$saveInfo['group_id'],
                        'true_name' =>$saveInfo['true_name'],
                        'sex'       =>$saveInfo['sex'],
                        'mobile'    =>$saveInfo['mobile'],
                        'telephone' =>$saveInfo['telephone'],
                        'area'      =>$saveInfo['province'].','.$saveInfo['city'].','.$saveInfo['area'],
                        'address'   =>$saveInfo['address'],
                        'zip'       =>$saveInfo['zip'],
                        'qq'        =>$saveInfo['qq'],
                        'exp'       =>$saveInfo['exp'],
                        'point'     =>$saveInfo['point'],
                        'status'    =>$saveInfo['status'],
                    );
                    $userBaseResult=$DB->update('user',$userBase,"id='$saveInfo[id]'");
                    $userExtResult=$DB->update('user_info',$userExt,"user_id='$saveInfo[id]'");
                    if($userBaseResult && $userExtResult){
                        return '1';
                    }else{
                        return '0';
                    }
                    break;
                default:
                    return '0';
                    break;
            }
        }
    }