<?php
/**
 * Admin模块
 */
class AdminController{

    //登录
    function login(){
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['verify'])){
            $adminModel=M('Admin');
            $loginInfo=array(
                'username'=>S($_POST['username']),
                'password'=>md5($_POST['password']),
            );
            if($_POST['verify']===$_SESSION['verify']){
                if($userInfo=$adminModel->login($loginInfo)){
                    // var_dump($userInfo);
                    $_SESSION['admin']=$userInfo;
                    $_SESSION['admin']['loginstatus']=1;
                    header('location:'.U('admin/index'));
                }else{
                    logError('账号密码错误,请重试!');
                }
            }else{
                logError('验证码错误！');
            }
        }

        global $V;
        $V->display('Admin/login.html');
    }

    //登出
    function logout(){
        $logoutModel=M('Admin');
        $logoutModel->logout();
    }
    
    //系统信息
    function index(){
        global $V;
        global $siteInfo;
        $V->assign('siteInfo',$siteInfo);
        $adminModel=M('Admin');
        $loginInfo=$adminModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);

        $V->assign('adminInfo',$_SESSION['admin']);
        $V->assign('activeid',1);

        $classCountData=$adminModel->getClassCountData();
        foreach($classCountData as $key => $value){
            $classCountData[$key]['class_name']=$adminModel->getClassifyName($value['class_id']);
        }
        $classnameArr=array_column($classCountData, 'class_name');
        $saleArr=array_column($classCountData, 'sale');
        $viewsArr=array_column($classCountData, 'views');
        $class_name='';
        foreach($classnameArr as $value){
            $class_name.="'$value',";
        }
        $class_name=rtrim($class_name,',');

        $classCountData=array(
            'class_name'=>$class_name,
            'sale'=>implode(',',$saleArr),
            'views'=>implode(',',$viewsArr),
        );

        $V->assign('classCountData',$classCountData);

        $classCount=$adminModel->getClassCount();
        foreach($classCount as $key => $value){
            $classCount[$key]['class_name']=$adminModel->getClassifyName($value['class_id']);
        }
        // $classNameArr=array_column($classCount, 'class_name');
        // $classTotalArr=array_column($classCount, 'total');
        // $V->assign('classNameArr',$classNameArr);
        // $V->assign('classTotalArr',$classTotalArr);

        $V->assign('classCount',$classCount);
        // var_dump($classCount);
        // var_dump($classCountData);


        $orderStatus['0']=$adminModel->getOrderCount("ostatus=0");
        $orderStatus['1']=$adminModel->getOrderCount("ostatus=1");
        $orderStatus['2']=$adminModel->getOrderCount("ostatus=2");
        $orderStatus['3']=$adminModel->getOrderCount("ostatus=3");
        $V->assign('orderStatus',$orderStatus);



        $siteData['user']=$adminModel->getUserCount();
        $siteData['order']=$adminModel->getOrderCount();
        $siteData['order1']=$adminModel->getOrderCount("uptime<".(time()-24*60*60)." AND uptime>".(time()-2*24*60*60));
        $siteData['order2']=$adminModel->getOrderCount("uptime>".(time()-24*60*60));
        $siteData['price']=$adminModel->getOrderSumPrice();
        $siteData['price1']=$adminModel->getOrderSumPrice("uptime<".(time()-24*60*60)." AND uptime>".(time()-2*24*60*60));
        $siteData['price2']=$adminModel->getOrderSumPrice("uptime>".(time()-24*60*60));
        $siteData['goods']=$adminModel->getGoodsCount();

        $V->assign('siteData',$siteData);



        $V->display('Admin/index.html');
    }

    //站点设置
    function siteset(){
        global $V;
        global $siteInfo;
        $V->assign('siteInfo',$siteInfo);
        $adminModel=M('Admin');
        $loginInfo=$adminModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);

        $V->assign('activeid',2);
        $V->display('Admin/siteset.html');
    }

    //管理设置
    function adminset(){
        global $V;
        global $siteInfo;
        $V->assign('siteInfo',$siteInfo);
        $adminModel=M('Admin');
        $loginInfo=$adminModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);
        $adminList=$adminModel->getAdminList();
        $V->assign('adminList',$adminList);


        $action=S(G('action'));
        if(!empty($action)){
            switch($action){
                case 'addadmin':
                    if(isset($_POST)){
                        $adminModel->addAdmin($_POST['username'],$_POST['password'],$_POST['email']);
                    }
                    break;
                case 'deladmin':
                    $id=S(G('adminid'));
                    $adminModel->delAdmin($id);
                    break;
            }
            exit;
        }

        $V->assign('adminInfo',$_SESSION['admin']);
        $V->assign('activeid',3);
        $V->display('Admin/adminset.html');
    }

    //会员管理
    function user(){
        global $V;
        global $siteInfo;
        $adminModel=M('Admin');
        $V->assign('siteInfo',$siteInfo);
        $loginInfo=$adminModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);
        $groupList=$adminModel->getGroupList();
        $V->assign('groupList',$groupList);
        $V->assign('activeid',4);


        $action=S(G('action'));
        if(!empty($action)){
            switch($action){
                case 'adduser':
                    if(!empty($_POST)){
                        $regInfo=array(
                            'username'=>S($_POST['username']),
                            'password'=>md5($_POST['password']),
                            'email'=>S($_POST['email']),
                        );
                        $indexModel=M('Index');
                        $result=@$indexModel->register($regInfo,false);
                        if($result==1){
                            echo 1;
                        }else{
                            echo 0;
                        }
                    }else{
                        echo 0;
                    }
                    break;

                case 'edituser':
                    $id=S(G('id'));
                    if(!empty($id)){
                        $userInfo=$adminModel->getUserInfo($id);
                        // var_dump($userInfo);
                        $V->assign('userInfo',$userInfo);
                        $V->assign('page',G('page'));
                        $V->display('Admin/edituser.html');
                    }else{
                        echo '非法数据！';
                    }
                    break;

                case 'deluser':
                    $id=S(G('id'));
                    if(!empty($id)){
                        $result=$adminModel->delUser($id);
                        // var_dump($userInfo);
                    }else{
                        echo '非法数据！';
                    }
                    break;

                case 'addgroup':
                    if(!empty($_POST)){
                        $groupInfo=array(
                            'name'=>S($_POST['groupname']),
                            'discount'=>S($_POST['discount']),
                            'minexp'=>S($_POST['minexp']),
                            'maxexp'=>S($_POST['maxexp']),
                        );
                        $result=@$adminModel->addGroup($groupInfo);
                        if($result!==false){
                            echo 1;
                        }else{
                            echo 0;
                        }
                    }else{
                        echo 0;
                    }
                    break;

                case 'delgroup':
                    $id=S(G('id'));
                    if(!empty($id)){
                        $result=$adminModel->delGroup($id);
                    }else{
                        echo '非法数据！';
                    }
                    break;

                case 'editgroup':
                    if(!empty($_POST)){
                        $groupInfo=array(
                            'name'=>S($_POST['groupname']),
                            'discount'=>S($_POST['discount']),
                            'minexp'=>S($_POST['minexp']),
                            'maxexp'=>S($_POST['maxexp']),
                        );
                        $id=S($_POST['id']);
                        $result=@$adminModel->editGroup($groupInfo,$id);
                        if($result!==false){
                            echo 1;
                        }else{
                            echo 0;
                        }
                    }else{
                        echo 0;
                    }
                    break;
            }
            exit;
        }

        //搜索条件
        $search=S(G('search'));
        $keywords=S(G('keywords'));
        if($search!='' && $keywords!=''){
            switch($search){
                case 'username':
                    $where="username LIKE '%$keywords%'";
                    break;
                case 'id':
                    $where="id LIKE '$keywords'";
                    break;
                case 'truename':
                    $where="true_name LIKE '%$keywords%'";
                    break;
                case 'moblie':
                    $where="moblie LIKE '%$keywords%'";
                    break;
                case 'telephone':
                    $where="telephone LIKE '%$keywords%'";
                    break;
                case 'email':
                    $where="email LIKE '%$keywords%'";
                    break;
                default:
                    $where=1;
                    break;
            }
        }else{
            $where=1;
        }

        //分页设置
        $total=$adminModel->getUserCount($where);
        $rows=7;
        $pageCount=ceil($total/$rows);
        $showSize=3;
        $page=(int)G('page');
        if($page<1){
            $page=1;
        }
        if($page>$pageCount && $pageCount!=0){
            $page=$pageCount;
        }

        $start=$page-$showSize;
        $end=$page+$showSize;
        $startBanner='';
        $endBanner='';
        if($page-$showSize<=0){
            $start=1;
            $end=$showSize*2+1;
        }
        if($page+$showSize>=$pageCount){
            $start=$pageCount-$showSize*2;
            $end=$pageCount;
        }
        if($start>1){
            $startBanner='...';
        }
        if($end<$pageCount){
            $endBanner='...';
        }

        //转为正常显示
        $keywords=stripslashes($keywords);
        $pageInfo=compact('total','page','rows','pageCount','showSize','start','end','startBanner','endBanner','search','keywords');
        $V->assign('pageInfo',$pageInfo);
        // var_dump($pageInfo);

        //获取用户列表
        $offset=($page-1)*$rows;
        $userList=$adminModel->getUserList($offset,$rows,$where);
        //格式化用户列表
        $userList=$adminModel->formatUserInfo($userList);
        $V->assign('userList',$userList);

        $V->display('Admin/user.html');
    }

    //增加随机用户
    function addranduser(){
        $indexModel=M('Index');
        $username=chr(mt_rand(65,122)).chr(mt_rand(65,122)).chr(mt_rand(65,122)).chr(mt_rand(65,122)).chr(mt_rand(65,122)).chr(mt_rand(65,122)).chr(mt_rand(65,122));
        $regInfo=array(
            'username'=>$username,
            'password'=>md5('123456'),
            'email'=>$username.'@mostclan.com',
        );
        var_dump($regInfo);
        $result=$indexModel->register($regInfo,false);
        switch($result){
            case 0:
                logError('添加机器人失败!');
                break;
            case 1:
                logNotice('添加机器人成功!');
                break;
            case 2:
                logError('用户名或邮箱已存在!');
                break;
        }
    }


    //商品分类
    function classify(){
        global $V;
        global $siteInfo;
        $adminModel=M('Admin');
        $V->assign('siteInfo',$siteInfo);
        $loginInfo=$adminModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);
        $V->assign('activeid',5);

        $pid=S(G('pid'));
        if(empty($pid)){
            $classifyList=$adminModel->getClassifyList();
            $V->assign('classifyList',$classifyList);
            $V->assign('pid',0);
        }else{
            $classifyList=$adminModel->getClassifyList($pid);
            $V->assign('classifyList',$classifyList);
            $V->assign('pid',$pid);
        }


        $action=S(G('action'));
        if(!empty($action)){
            switch($action){
                case 'addclassify':
                    $classifyname=S(G('classifyname'));
                    $adminModel->addClassify($classifyname);
                    break;
                case 'delclassify':
                    $classifyid=S(G('classifyid'));
                    $class_name=$adminModel->getClassifyName($classifyid);
                    $result=$adminModel->checkSubClassify($classifyid);
                    if($result){
                        $delstatus=$adminModel->delClassify($classifyid);
                        if($delstatus){
                            echo '删除成功！';
                        }else{
                            echo '删除失败！该分类下含有商品！';
                        }
                    }else{
                        echo '删除分类【'.$class_name.'】失败！该分类下含有子分类！';
                    }
                    break;
                case 'editclassify':
                    $classifyid=S(G('classifyid'));
                    $classifyname=S(G('classifyname'));
                    $adminModel->editClassify($classifyname,$classifyid);
                    break;
                case 'display':
                    $classifyid=S(G('classifyid'));
                    $status=S(G('status'));
                    $result=$adminModel->changeDisplay($classifyid,$status);
                    var_dump($result);
                    break;
                case 'addsubclassify':
                    $classifyname=S(G('classifyname'));
                    $classifypid=S(G('classifypid'));
                    $classifypath=S(G('classifypath'));
                    $adminModel->addSubClassify($classifyname,$classifypid,$classifypath);
                    break;
                case 'addsub2classify':
                    $classifyname=S(G('classifyname'));
                    $classifypid=S(G('classifypid'));
                    $adminModel->addSub2Classify($classifyname,$classifypid);
                    break;
                case 'importclassify':
                    $content=$_POST['content'];
                    $arr=json_decode($content);
                    $adminModel->importClassify($arr);
                    break;
            }
            exit;
        }


        $V->display('Admin/classify.html');
    }


    //商品管理
    function goods(){
        global $DB;
        global $V;
        global $siteInfo;
        $adminModel=M('Admin');
        $V->assign('siteInfo',$siteInfo);
        $loginInfo=$adminModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);
        $V->assign('activeid',6);

        $action=S(G('action'));
        if(!empty($action)){
            switch($action){
                case 'addgoods':
                    $classifyList=$adminModel->getClassifyListAll();
                    foreach($classifyList as $keys => $values){
                        $n=substr_count($values['bpath'],',')-1;
                        if($n!=0){
                            $classifyList[$keys]['name']=str_repeat("&nbsp;",2*$n).'|-'.$classifyList[$keys]['name'];
                        }
                    }
                    // var_dump($classifyList);
                    $V->assign('classifyList',$classifyList);
                    $V->assign('page',G('page'));
                    $V->display('Admin/addgoods.html');
                    break;
                case 'savegoods':
                    //表单不为空
                    // var_dump($_POST);
                    // exit();
                    foreach ($_POST as $key => $val) {
                        if ($val == '' && $key!='desc' && $key!='content') {
                            logError('请完善商品表单！');
                            exit;
                        }
                    }
                    //上传图片
                    $save_dir = APP_PATH.'uploads/image/';
                    $filename = upload('file',10485760,array('image'),$save_dir);
                    // var_dump($filename);
                    if (!$filename) {
                        logError('文件上传失败');
                        exit;
                    }
                    //缩放吧  骚年...
                    //首先得到上传文件的名字
                    //拼成zoom函数所使用的路径
                    $img_path =  APP_PATH.'uploads/image/';
                    $img_path .= substr($filename,0,4).'/';
                    $img_path .= substr($filename,4,2).'/';
                    $img_path .= substr($filename,6,2).'/';
                    $img_path .= $filename;

                    //处理缩放
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

                    //处理商品信息
                    $goodsInfo=array(
                        'gname'       =>$_POST['name'],
                        'class_id'    =>$_POST['class'],
                        'price'       =>$_POST['price'],
                        'point'       =>$_POST['point'],
                        'stock'       =>$_POST['stock'],
                        'isnew'       =>$_POST['isnew'],
                        'ishot'       =>$_POST['ishot'],
                        'status'      =>$_POST['status'],
                        'description' =>strip_tags($_POST['desc']),
                        'content'     =>$_POST['content'],
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

                    // 图片信息处理
                    $goods_id = $id;//商品的自增ID
                    $cover = 1;

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
                    }else{
                        header('location:'.U('admin/goods/page/'.G('page')));
                    }
                    break;
                case 'delgoods':
                    $goodsId=S(G('id'));
                    $adminModel->delGoods($goodsId);
                    break;
                case 'editgoods':
                    $id=S(G('id'));
                    $goodsInfo=$adminModel->getGoodsInfo($id);
                    $goodsInfo['image']=getImagePath(APP_NAME.'/uploads/image/',$goodsInfo['image'],'c');
                    $V->assign('goodsInfo',$goodsInfo);
                    // var_dump($goodsInfo);
                    $classifyList=$adminModel->getClassifyListAll();
                    foreach($classifyList as $keys => $values){
                        $n=substr_count($values['bpath'],',')-1;
                        if($n!=0){
                            $classifyList[$keys]['name']=str_repeat("&nbsp;",2*$n).'|-'.$classifyList[$keys]['name'];
                        }
                    }
                    $V->assign('classifyList',$classifyList);
                    $V->assign('page',G('page'));
                    $V->display('Admin/editgoods.html');
                    break;
                case 'updategoods':
                    //表单不为空
                    // var_dump($_POST);
                    // exit;
                    foreach ($_POST as $key => $val) {
                        if ($val == '' && $key!='desc' && $key!='content') {
                            logError('请完善商品表单！');
                            exit;
                        }
                    }
                    if($_FILES['file']['error']==0){
                        //上传图片
                        $save_dir = APP_PATH.'uploads/image/';
                        $filename = upload('file',10485760,array('image'),$save_dir);
                        // var_dump($filename);
                        if (!$filename) {
                            logError('文件上传失败');
                            exit;
                        }
                        //缩放吧  骚年...
                        //首先得到上传文件的名字
                        //拼成zoom函数所使用的路径
                        $img_path =  APP_PATH.'uploads/image/';
                        $img_path .= substr($filename,0,4).'/';
                        $img_path .= substr($filename,4,2).'/';
                        $img_path .= substr($filename,6,2).'/';
                        $img_path .= $filename;

                        //处理缩放
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
                    }

                    //处理商品信息
                    $goodsInfo=array(
                        'gname'       =>$_POST['name'],
                        'class_id'    =>$_POST['class'],
                        'price'       =>$_POST['price'],
                        'point'       =>$_POST['point'],
                        'stock'       =>$_POST['stock'],
                        'isnew'       =>$_POST['isnew'],
                        'ishot'       =>$_POST['ishot'],
                        'status'      =>$_POST['status'],
                        'description' =>strip_tags($_POST['desc']),
                        'content'     =>$_POST['content'],
                    );

                    $id=S(G('id'));
                    $result = $DB->update('goods',$goodsInfo,"id=$id");
                    if($_FILES['file']['error']==0){
                        if (!$result) {
                            //商品添加失败,要删除之前处理好的图片
                            @unlink($img_path);
                            @unlink(dirname($img_path).'/180_'.$filename);
                            @unlink(dirname($img_path).'/64_'.$filename);
                            @unlink(dirname($img_path).'/32_'.$filename);
                            logError('商品表写入失败');
                            exit;
                        }

                        // 图片信息处理
                        $goods_id = $id;//商品的自增ID
                        $cover = 1;

                        //执行添加
                        $imageInfo=array(
                            'iname'    =>$filename,
                            'goods_id' =>$goods_id,
                            'cover'    =>$cover,
                        );

                        $filename2=$DB->findOne('image','iname',"cover=1 and goods_id=$id")[0]['iname'];
                        $DB->delete('image',"cover=1 and goods_id=$id");
                        $img_path2 =  APP_PATH.'uploads/image/';
                        $img_path2 .= substr($filename2,0,4).'/';
                        $img_path2 .= substr($filename2,4,2).'/';
                        $img_path2 .= substr($filename2,6,2).'/';
                        $img_path2 .= $filename2;
                        @unlink($img_path2);
                        @unlink(dirname($img_path2).'/180_'.$filename2);
                        @unlink(dirname($img_path2).'/64_'.$filename2);
                        @unlink(dirname($img_path2).'/32_'.$filename2);

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
                        }else{
                            header('location:'.U('admin/goods/page/'.G('page')));
                        }
                    }
                    header('location:'.U('admin/goods/page/'.G('page')));
                    break;

                case 'isnew':
                    $goodsid=S(G('goodsid'));
                    $status=S(G('status'));
                    $result=$adminModel->changeGoodsIsnew($goodsid,$status);
                    break;
                case 'ishot':
                    $goodsid=S(G('goodsid'));
                    $status=S(G('status'));
                    $result=$adminModel->changeGoodsIshot($goodsid,$status);
                    break;
                case 'status':
                    $goodsid=S(G('goodsid'));
                    $status=S(G('status'));
                    $result=$adminModel->changeGoodsStatus($goodsid,$status);
                    break;
                case 'goodsimage':
                    $id=S(G('id'));
                    $imageInfo=$adminModel->getGoodsImageInfo($id);
                    foreach($imageInfo as $key => $value){
                        $imageInfo[$key]['iname']=getImagePath(APP_NAME.'/uploads/image/',$value['iname'],'d');
                    }
                    $V->assign('imageInfo',$imageInfo);
                    $V->assign('goods_id',$id);
                    $goods_name=$adminModel->getGoodsInfo($id)['gname'];
                    $V->assign('goods_name',$goods_name);
                    $V->assign('page',G('page'));
                    $V->display('Admin/goodsimage.html');
                    break;
                case 'uploadgoodsimage':
                    $goods_id=S(G('id'));
                    foreach($_FILES['file']['name'] as $keys => $values){
                        $files['files'.$keys]['name']=$_FILES['file']['name'][$keys];
                        $files['files'.$keys]['type']=$_FILES['file']['type'][$keys];
                        $files['files'.$keys]['tmp_name']=$_FILES['file']['tmp_name'][$keys];
                        $files['files'.$keys]['error']=$_FILES['file']['error'][$keys];
                        $files['files'.$keys]['size']=$_FILES['file']['size'][$keys];
                    }
                    $_FILES=$files;
                    // var_dump($_FILES);
                    foreach($_FILES as $keys => $values){
                        //上传图片
                        $save_dir = APP_PATH.'uploads/image/';
                        $filename = upload($keys,10485760,array('image'),$save_dir);
                        // var_dump($filename);
                        if (!$filename) {
                            logError('文件上传失败');
                            exit;
                        }
                        //缩放吧  骚年...
                        //首先得到上传文件的名字
                        //拼成zoom函数所使用的路径
                        $img_path = APP_PATH.'uploads/image/';
                        $img_path .= substr($filename,0,4).'/';
                        $img_path .= substr($filename,4,2).'/';
                        $img_path .= substr($filename,6,2).'/';
                        $img_path .= $filename;

                        //处理缩放
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
                        $imageInfo=array(
                            'iname'    =>$filename,
                            'goods_id' =>$goods_id,
                            'cover'    =>0,
                        );
                        $result = $DB->insert('image',$imageInfo);

                        if (!$result) {
                            logError('添加失败');
                        }
                    }
                    header('location:'.U('admin/goods/action/goodsimage/page/'.G('page').'/id/'.$goods_id));
                    break;
                case 'delgoodsimage':
                    $imageId=S(G('id'));
                    $adminModel->delGoodsImage($imageId);
                    break;
                case 'setcover':
                    $imageId=S(G('id'));
                    $adminModel->setCover($imageId);
                    break;
                case 'collection':
                    $class_id=S(G('class_id'));
                    $item_id=S(G('item_id'));
                    $adminModel->collectionGoods($class_id,$item_id);
                    break;

            }
            exit;
        }

        //搜索条件
        $search=S(G('search'));
        $keywords=S(G('keywords'));
        $order="order by g.id desc";
        if($search!='' && $keywords!=''){
            switch($search){
                case 'order':
                    switch ($keywords) {
                        case 'idd':
                            $where="1";
                            $order="order by g.id desc";
                            break;
                        case 'ida':
                            $where="1";
                            $order="order by g.id asc";
                            break;
                        case 'up':
                            $where="status LIKE '1'";
                            break;
                        case 'down':
                            $where="status LIKE '0'";
                            break;
                    }
                    break;
                case 'class_id':
                    $where="class_id LIKE '$keywords'";
                    break;
                case 'id':
                    $where="id LIKE '$keywords'";
                    break;
                case 'gname':
                    $where="gname LIKE '%$keywords%'";
                    break;
                case 'price':
                    $where="price LIKE '$keywords'";
                    break;
                case 'point':
                    $where="point LIKE '$keywords'";
                    break;
                case 'stock':
                    $where="stock LIKE '$keywords'";
                    break;
                case 'sale':
                    $where="sale LIKE '$keywords'";
                    break;
                default:
                    $where=1;
                    break;
            }
        }else{
            $where=1;
        }

        //分页设置
        $total=$adminModel->getGoodsCount($where);
        $rows=7;
        $pageCount=ceil($total/$rows);
        $showSize=3;
        $page=(int)G('page');
        if($page<1){
            $page=1;
        }
        if($page>$pageCount && $pageCount!=0){
            $page=$pageCount;
        }

        $start=$page-$showSize;
        $end=$page+$showSize;
        $startBanner='';
        $endBanner='';
        if($page-$showSize<=0){
            $start=1;
            $end=$showSize*2+1;
        }
        if($page+$showSize>=$pageCount){
            $start=$pageCount-$showSize*2;
            $end=$pageCount;
        }
        if($start>1){
            $startBanner='...';
        }
        if($end<$pageCount){
            $endBanner='...';
        }

        //转为正常显示
        $keywords=stripslashes($keywords);
        $pageInfo=compact('total','page','rows','pageCount','showSize','start','end','startBanner','endBanner','search','keywords');
        $V->assign('pageInfo',$pageInfo);
        // var_dump($pageInfo);

        //获取用户列表
        $offset=($page-1)*$rows;
        $goodsList=$adminModel->getGoodsList($offset,$rows,$where,$order);
        foreach($goodsList as $key => $value){
            $goodsList[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'b');
        }
        $V->assign('goodsList',$goodsList);

        
        $classifyList=$adminModel->getClassifyListAll();
        foreach($classifyList as $keys => $values){
            $n=substr_count($values['bpath'],',')-1;
            if($n!=0){
                $classifyList[$keys]['name']=str_repeat("&nbsp;",2*$n).'|-'.$classifyList[$keys]['name'];
            }
        }
        // var_dump($classifyList);
        $V->assign('classifyList',$classifyList);
        $V->assign('page',G('page'));
        

        $V->display('Admin/goods.html');
    }

    //订单管理
    function order(){
        global $V;
        global $siteInfo;
        global $DB;
        $adminModel=M('Admin');
        $V->assign('siteInfo',$siteInfo);
        $loginInfo=$adminModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);
        $groupList=$adminModel->getGroupList();
        $V->assign('groupList',$groupList);
        $V->assign('activeid',7);


        $action=S(G('action'));
        if(!empty($action)){
            switch($action){
                case 'updateStatus':
                    $id=S(G('id'));
                    $status=S(G('status'));
                    $orderInfo=array(
                        'ostatus'=>$status,
                    );
                    $DB->update('order',$orderInfo,"id='$id'");
                    break;
            }
            exit;
        }

        //搜索条件
        $search=S(G('search'));
        $keywords=S(G('keywords'));
        if($search!='' && $keywords!=''){
            switch($search){
                case 'num':
                    $where="num LIKE '$keywords'";
                    break;
                case 'id':
                    $where="user_id LIKE '$keywords'";
                    break;
                case 'is':
                    if($keywords=='yes'){
                        $where="ostatus>0";
                    }else{
                        $where="ostatus=0";
                    }
                    break;
                default:
                    $where=1;
                    break;
            }
        }else{
            $where=1;
        }

        //分页设置
        $total=$adminModel->getOrderCount($where);
        $rows=7;
        $pageCount=ceil($total/$rows);
        $showSize=3;
        $page=(int)G('page');
        if($page<1){
            $page=1;
        }
        if($page>$pageCount && $pageCount!=0){
            $page=$pageCount;
        }

        $start=$page-$showSize;
        $end=$page+$showSize;
        $startBanner='';
        $endBanner='';
        if($page-$showSize<=0){
            $start=1;
            $end=$showSize*2+1;
        }
        if($page+$showSize>=$pageCount){
            $start=$pageCount-$showSize*2;
            $end=$pageCount;
        }
        if($start>1){
            $startBanner='...';
        }
        if($end<$pageCount){
            $endBanner='...';
        }

        //转为正常显示
        $keywords=stripslashes($keywords);
        $pageInfo=compact('total','page','rows','pageCount','showSize','start','end','startBanner','endBanner','search','keywords');
        $V->assign('pageInfo',$pageInfo);
        // var_dump($pageInfo);

        //获取用户列表
        $offset=($page-1)*$rows;
        $orderList=$adminModel->getOrderList($offset,$rows,$where);
        foreach($orderList as $value){
            $orderGoodsList[$value['id']]=$adminModel->getOrderGoods($value['id']);
        }
        // var_dump($orderList);
        if(isset($orderGoodsList)){
            foreach($orderGoodsList as $keys => $values){
                foreach($values as $key => $value){
                    $orderGoodsList[$keys][$key]['iname']=getImagePath(APP_NAME.'/uploads/image/',$value['iname'],'b');
                }
            }
            $V->assign('orderGoodsList',$orderGoodsList);
        }

        $V->assign('orderList',$orderList);

        // var_dump($orderGoodsList);

        $V->display('Admin/order.html');
    }

    //评论管理
    function comment(){
        global $V;
        global $siteInfo;
        global $DB;
        $adminModel=M('Admin');
        $V->assign('siteInfo',$siteInfo);
        $loginInfo=$adminModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);
        $groupList=$adminModel->getGroupList();
        $V->assign('groupList',$groupList);
        $commentList=$adminModel->getMsgListAll();
        foreach($commentList as $key => $value){
            $commentList[$key]['goods_name']=@$adminModel->getGoodsInfo($value['goods_id'])['gname'];
        }
        foreach($commentList as $key => $value){
            $commentList[$key]['avatar']=getImagePath(APP_NAME.'/uploads/image/',$value['avatar'],'d');
        }
        $V->assign('commentList',$commentList);


        // var_dump(($commentList));


        $action=S(G('action'));
        if(!empty($action)){
            switch($action){
                case 'del':
                    $id=(int)(G('id'));
                    $DB->delete('comment',"id='$id'");
                    break;
            }
            exit;
        }


        $V->assign('activeid',8);

        // var_dump(($commentList));
        $V->display('Admin/comment.html');
    }

    //保存选项
    function save($params){
        if(!empty($_POST)){
            $saveInfo=$_POST;
            $saveInfo['action']=$params['action'];
            $adminModel=M('Admin');
            $status=$adminModel->save($saveInfo);
            echo $status;
        }else{
            echo 0;
        }
    }

}