<?php
/**
 * Index模块
 */
class IndexController{
    
    //首页
    function index(){
        global $V;
        global $siteInfo;
        $V->assign('siteInfo',$siteInfo);

        $indexModel=M('Index');
        $loginInfo=$indexModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);
        $cartList=$indexModel->getCartList();
        $V->assign('cartList',$cartList);

        $adminModel=M('Admin');

            $class_id=9;
            $path=$adminModel->getClassifyPath($class_id);
            $in_id='';
            foreach($path as $value){
                $in_id.=$value['id'].',';
            }
            $in_id=rtrim($in_id,',');
            $where="class_id in ($in_id)";
            if($in_id==''){
                $where="class_id in ($class_id)";
            }
            $count=$adminModel->getGoodsCount($where);
            $c1=$adminModel->getGoodsList(0,7,$where);
            foreach($c1 as $key => $value){
                $c1[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $c2=$adminModel->getGoodsList(7,7,$where);
            foreach($c2 as $key => $value){
                $c2[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $c3=$adminModel->getGoodsList(14,7,$where);
            foreach($c3 as $key => $value){
                $c3[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $V->assign('c1',$c1);
            $V->assign('c2',$c2);
            $V->assign('c3',$c3);


            $class_id=5;
            $path=$adminModel->getClassifyPath($class_id);
            $in_id='';
            foreach($path as $value){
                $in_id.=$value['id'].',';
            }
            $in_id=rtrim($in_id,',');
            $where="class_id in ($in_id)";
            if($in_id==''){
                $where="class_id in ($class_id)";
            }
            $count=$adminModel->getGoodsCount($where);
            $d1=$adminModel->getGoodsList(0,7,$where);
            foreach($d1 as $key => $value){
                $d1[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $d2=$adminModel->getGoodsList(7,7,$where);
            foreach($d2 as $key => $value){
                $d2[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $d3=$adminModel->getGoodsList(14,7,$where);
            foreach($d3 as $key => $value){
                $d3[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $V->assign('d1',$d1);
            $V->assign('d2',$d2);
            $V->assign('d3',$d3);


            $class_id=4;
            $path=$adminModel->getClassifyPath($class_id);
            $in_id='';
            foreach($path as $value){
                $in_id.=$value['id'].',';
            }
            $in_id=rtrim($in_id,',');
            $where="class_id in ($in_id)";
            if($in_id==''){
                $where="class_id in ($class_id)";
            }
            $count=$adminModel->getGoodsCount($where);
            $e1=$adminModel->getGoodsList(0,7,$where);
            foreach($e1 as $key => $value){
                $e1[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $e2=$adminModel->getGoodsList(7,7,$where);
            foreach($e2 as $key => $value){
                $e2[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $e3=$adminModel->getGoodsList(14,7,$where);
            foreach($e3 as $key => $value){
                $e3[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $V->assign('e1',$e1);
            $V->assign('e2',$e2);
            $V->assign('e3',$e3);


            $class_id=6;
            $path=$adminModel->getClassifyPath($class_id);
            $in_id='';
            foreach($path as $value){
                $in_id.=$value['id'].',';
            }
            $in_id=rtrim($in_id,',');
            $where="class_id in ($in_id)";
            if($in_id==''){
                $where="class_id in ($class_id)";
            }
            $count=$adminModel->getGoodsCount($where);
            $f1=$adminModel->getGoodsList(0,7,$where);
            foreach($f1 as $key => $value){
                $f1[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $f2=$adminModel->getGoodsList(7,7,$where);
            foreach($f2 as $key => $value){
                $f2[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $f3=$adminModel->getGoodsList(14,7,$where);
            foreach($f3 as $key => $value){
                $f3[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $V->assign('f1',$f1);
            $V->assign('f2',$f2);
            $V->assign('f3',$f3);


            $class_id=7;
            $path=$adminModel->getClassifyPath($class_id);
            $in_id='';
            foreach($path as $value){
                $in_id.=$value['id'].',';
            }
            $in_id=rtrim($in_id,',');
            $where="class_id in ($in_id)";
            if($in_id==''){
                $where="class_id in ($class_id)";
            }
            $count=$adminModel->getGoodsCount($where);
            $g1=$adminModel->getGoodsList(0,7,$where);
            foreach($g1 as $key => $value){
                $g1[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $g2=$adminModel->getGoodsList(7,7,$where);
            foreach($g2 as $key => $value){
                $g2[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $g3=$adminModel->getGoodsList(14,7,$where);
            foreach($g3 as $key => $value){
                $g3[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $V->assign('g1',$g1);
            $V->assign('g2',$g2);
            $V->assign('g3',$g3);


            $class_id=8;
            $path=$adminModel->getClassifyPath($class_id);
            $in_id='';
            foreach($path as $value){
                $in_id.=$value['id'].',';
            }
            $in_id=rtrim($in_id,',');
            $where="class_id in ($in_id)";
            if($in_id==''){
                $where="class_id in ($class_id)";
            }
            $count=$adminModel->getGoodsCount($where);
            $h1=$adminModel->getGoodsList(0,7,$where);
            foreach($h1 as $key => $value){
                $h1[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $h2=$adminModel->getGoodsList(7,7,$where);
            foreach($h2 as $key => $value){
                $h2[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $h3=$adminModel->getGoodsList(14,7,$where);
            foreach($h3 as $key => $value){
                $h3[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'a');
            }
            $V->assign('h1',$h1);
            $V->assign('h2',$h2);
            $V->assign('h3',$h3);
        

            $where="isnew=1";
            $count=$adminModel->getGoodsCount($where);
            $newGoods=$adminModel->getGoodsList(0,8,$where);
            foreach($newGoods as $key => $value){
                $newGoods[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'c');
            }
            $V->assign('newGoods',$newGoods);
            // var_dump($newGoods);


            $where="ishot=1";
            $count=$adminModel->getGoodsCount($where);
            $hotGoods=$adminModel->getGoodsList(0,8,$where);
            foreach($hotGoods as $key => $value){
                $hotGoods[$key]['image']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'c');
            }
            $V->assign('hotGoods',$hotGoods);

            $topGoods=$adminModel->getTopGoods();
            $V->assign('topGoods',$topGoods);


        $V->display('Index/index.html');
    }

    //登录
    function login(){
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['verify'])){
            $indexModel=M('Index');
            $loginInfo=array(
                'username'=>S($_POST['username']),
                'password'=>md5($_POST['password']),
            );
            if($_POST['verify']===$_SESSION['verify']){
                if($userInfo=$indexModel->login($loginInfo)){
                    if($userInfo['status']==0){
                        logError('您的账户已被锁定，无法登录本网站！');
                    }
                    // var_dump($userInfo);
                    $_SESSION['index']['id']=$userInfo['id'];
                    $_SESSION['index']['username']=$userInfo['username'];
                    $_SESSION['index']['loginstatus']=1;
                    header('location:'.$_SERVER['HTTP_REFERER']);
                }else{
                    logError('账号密码错误,请重试!');
                }
            }else{
                logError('验证码错误！');
            }
        }else{
            logError('错误提交方式!');
        }
    }

    //登出
    function logout(){
        $indexModel=M('Index');
        $indexModel->logout();
    }
    
    //注册
    function register(){
        global $DB;
        // var_dump($_POST);
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['email']) && isset($_POST['verify'])){

            $data=$_POST['username'];
                if(strlen($data)>14 || strlen($data)<2){
                    logError('<font color="red">密码长度必须在2-14位</font>');
                }
                $rex=preg_match("/^[Za-z0-9]{2,14}$/",$data);
                if($rex){
                    $result=$DB->numRows('user',"username='$data'");
                    if($result!=0){
                        logError('<font color="red">用户名已存在</font>');
                    }
                }else{
                    logError('<font color="red">用户名不能包含除英文、数字外的其他字符</font>');
                }
            $data=$_POST['email'];
                $rex=preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/",$data);
                if($rex){
                    $result=$DB->numRows('user',"email='$data'");
                    if($result!=0){
                        logError('<font color="red">此邮箱已存在</font>');
                    }
                }else{
                    logError('<font color="red">邮箱格式错误！</font>');
                }
            $data=$_POST['password'];
                if(strlen($data)<6 || strlen($data)>20){
                    logError('<font color="red">密码长度必须在6-20位</font>');
                }

            $indexModel=M('Index');
            $regInfo=array(
                'username'=>S($_POST['username']),
                'email'=>S($_POST['email']),
                'password'=>md5($_POST['password']),
            );
            if($_POST['verify']===$_SESSION['verify']){
                $result=$indexModel->register($regInfo,false);
                switch($result){
                    case 0:
                        logError('注册失败!');
                        break;
                    case 1:
                        $loginInfo=array(
                            'username'=>$regInfo['username'],
                            'password'=>$regInfo['password'],
                        );
                        if($userInfo=$indexModel->login($loginInfo)){}
                        
                        $_SESSION['index']['id']=$userInfo['id'];
                        $_SESSION['index']['username']=$userInfo['username'];
                        $_SESSION['index']['loginstatus']=1;
                        
                        logNotice('注册成功!三秒后跳转！<meta http-equiv="refresh" content="3;url=index.php"><a href="index.php">立即跳转</a>');
                        break;
                    case 2:
                        logError('用户名或邮箱已存在!');
                        break;
                }
            }else{
                logError('验证码错误！');
            }
        }else{
            logError('错误提交方式!');
        }
    }

    //订单页面
    function order(){
        global $V;
        global $siteInfo;
        global $DB;
        $V->assign('siteInfo',$siteInfo);
        $indexModel=M('Index');
        $loginInfo=$indexModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);
        $cartList=$indexModel->getCartList();
        $V->assign('cartList',$cartList);
        $adminModel=M('Admin');
        $userInfo=$adminModel->getUserInfo($_SESSION['index']['id']);
        $V->assign('userInfo',$userInfo);
            $topGoods=$adminModel->getTopGoods();
            $V->assign('topGoods',$topGoods);
        // var_dump($cartList);
        
        // var_dump($_POST);

        $action=S(G('action'));
        if(!empty($action)){
            switch($action){
                case 'submit':
                    $orderInfo=array(
                        'num'      =>date('Ymd').uniqid().mt_rand(1000,9999),
                        'user_id'  =>$_SESSION['index']['id'],
                        'oname'    =>S($_POST['oname']),
                        'phone'    =>S($_POST['phone']),
                        'address'  =>S($_POST['province']).S($_POST['city']).S($_POST['area']).S($_POST['address']),
                        'allprice' =>(int)($_POST['allprice']),
                        'uptime'=>time(),
                    );
                    $order_id=$DB->insert('order',$orderInfo);
                    foreach($cartList as $key => $value){
                        $orderGoodsInfo=array(
                            'goods_id' =>$key,
                            'price'    =>$value['price'],
                            'qty'      =>$value['num'],
                            'order_id' =>$order_id,
                        );
                        $DB->insert('order_goods',$orderGoodsInfo);
                        $sql="UPDATE {$DB->pref}goods SET stock=stock-$value[num] WHERE id='$orderGoodsInfo[goods_id]'";
                        $DB->query($sql);
                        $sql="UPDATE {$DB->pref}goods SET sale=sale+$value[num] WHERE id='$orderGoodsInfo[goods_id]'";
                        $DB->query($sql);
                        $sql="UPDATE {$DB->pref}user_info SET `point`=`point`+$value[price] WHERE user_id='$orderInfo[user_id]'";
                        $DB->query($sql);
                    }
                    // var_dump($orderGoodsInfo);
                    $indexModel->delCartAll();
                    logNotice('下单成功！<a href="'.U('index/user/action/order').'">查看订单</a>');
                    break;
            }
            exit;
        }



        $V->display('Index/order.html');
    }

    //360行车记录仪页面
    function brands(){
        global $V;
        global $siteInfo;
        $V->assign('siteInfo',$siteInfo);
        $indexModel=M('Index');
        $loginInfo=$indexModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);
        $cartList=$indexModel->getCartList();
        $V->assign('cartList',$cartList);
            $topGoods=$adminModel->getTopGoods();
            $V->assign('topGoods',$topGoods);

        $V->display('Index/brands.html');
    }

    //全部商品页面
    function allproduct(){
        global $V;
        global $siteInfo;
        $V->assign('siteInfo',$siteInfo);
        $indexModel=M('Index');
        $loginInfo=$indexModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);
        $adminModel=M('Admin');
        
            $topGoods=$adminModel->getTopGoods();
            $V->assign('topGoods',$topGoods);
        $cartList=$indexModel->getCartList();
        $V->assign('cartList',$cartList);

        
        $class_id=(int)(G('class_id'));
        $V->assign('class_id',$class_id);

        $classifyList=$adminModel->getClassifyListAll("display=1");
        foreach($classifyList as $keys => $values){
            $n=substr_count($values['bpath'],',')-1;
            if($n!=0){
                $classifyList[$keys]['name']=str_repeat("&nbsp;",2*$n).'|-'.$classifyList[$keys]['name'];
            }
        }
        $V->assign('classifyList',$classifyList);

        $order=$order_price='';
        switch(S(G('price'))){
            case 'asc':
                $order="order by price asc";
                $order_price='asc';
                break;
            case 'desc':
                $order="order by price desc";
                $order_price='desc';
                break;
        }
        $V->assign('order_price',$order_price);

        $is_stock=isset($_GET['is_stock'])?(int)($_GET['is_stock']):0;
        $V->assign('is_stock',$is_stock);

        $search=isset($_GET['search'])?S($_GET['search']):'';
        $V->assign('search',$search);
        if($is_stock!=0){
            $order_where="gname like '%$search%' and status=1 and stock>'0'";
        }else{
            $order_where="gname like '%$search%' and status=1";
        }




        if($class_id==0){
            $count=$adminModel->getGoodsCount($order_where);


            //分页设置
            $total=$count;
            $rows=20;
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

            $pageInfo=compact('total','page','rows','pageCount','showSize','start','end','startBanner','endBanner');
            $V->assign('pageInfo',$pageInfo);
            // var_dump($pageInfo);
            $offset=($page-1)*$rows;


            $goodsList=$adminModel->getGoodsList($offset,$rows,$order_where,$order);
        }else{
            $path=$adminModel->getClassifyPath($class_id);
            $in_id='';
            foreach($path as $value){
                $in_id.=$value['id'].',';
            }
            $in_id=rtrim($in_id,',');

            $where="gname like '%$search%' and status=1 and class_id in ($in_id)";

            if($in_id==''){
                $where="gname like '%$search%' and status=1 and class_id in ($class_id)";
            }

            if($order_where!='1'){
                $where.=" and ".$order_where;
            }
            $count=$adminModel->getGoodsCount($where);




            //分页设置
            $total=$count;
            $rows=20;
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

            $pageInfo=compact('total','page','rows','pageCount','showSize','start','end','startBanner','endBanner');
            $V->assign('pageInfo',$pageInfo);
            // var_dump($pageInfo);
            $offset=($page-1)*$rows;




            $goodsList=$adminModel->getGoodsList($offset,$rows,$where,$order);
            // var_dump($goodsList);
        }
        foreach($goodsList as $key => $value){
            $goodsList[$key]['iname']=getImagePath(APP_NAME.'/uploads/image/',$value['image'],'c');
        }
        // $goodsList=array();
        $V->assign('goodsList',$goodsList); 
        // var_dump($goodsList);
        






        $V->display('Index/allproduct.html');
    }
    
    //赞
    function zan(){
        global $V;
        $id=(int)(G('id'));
        $indexModel=M('Index');
        $indexModel->updateZan($id);
    }

    //商品页面
    function product(){
        global $V;
        global $siteInfo;
        $indexModel=M('Index');
        $loginInfo=$indexModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);
        
        $cartList=$indexModel->getCartList();
        $V->assign('cartList',$cartList);

        $id=(int)(G('id'));

        $adminModel=M('Admin');

            $topGoods=$adminModel->getTopGoods();
            $V->assign('topGoods',$topGoods);
        $action=S(G('action'));
        if(!empty($action)){
            switch($action){
                case 'addmsg':
                    if(!empty($_POST['msg'])){
                        $adminModel->addMsg($id,$_SESSION['index']['id'],S($_POST['msg']));
                    }
                    break;
            }
            exit();
        }


        $goodsInfo=$adminModel->getGoodsInfo($id);
        if(empty($goodsInfo)){
            header('location:'.U('index/error'));
        }
        $V->assign('goodsInfo',$goodsInfo);

        //增加浏览次数
        $views=$indexModel->updateViews($id);
        $V->assign('views',$views);

        $goodsImageInfo=$adminModel->getGoodsImageInfo($id);
        foreach($goodsImageInfo as $key => $value){
            $goodsImageInfo[$key]['iname']=getImagePath(APP_NAME.'/uploads/image/',$value['iname'],'b');
        }
        $V->assign('goodsImageInfo',$goodsImageInfo);
        // var_dump($goodsImageInfo);
        // var_dump($goodsInfo);

        $classifyClanInfo=$adminModel->getClassifyClan($goodsInfo['class_id']);
        $V->assign('classifyClanInfo',$classifyClanInfo);
        
        $siteInfo['sitetitle2']=' - '.$siteInfo['sitetitle'];
        $siteInfo['sitetitle']=$goodsInfo['gname'];
        $V->assign('siteInfo',$siteInfo);


        $msgList=$adminModel->getMsgList($id);
        foreach($msgList as $key => $value){
            $msgList[$key]['avatar']=getImagePath(APP_NAME.'/uploads/image/',$value['avatar'],'d');
        }
        // var_dump($msgList);
        $V->assign('msgList',$msgList);

        if(isset($_SESSION['index'])){
            $relation=$adminModel->relationOrder($goodsInfo['id'],$_SESSION['index']['id']);
        }else{
            $relation=false;
        }
        $V->assign('relation',$relation);


        $V->display('Index/product.html');
    }

    //购物车页面
    function shopcart(){
        global $V;
        global $siteInfo;
        $V->assign('siteInfo',$siteInfo);
        $indexModel=M('Index');
        $loginInfo=$indexModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);
            $adminModel=M('Admin');
            $topGoods=$adminModel->getTopGoods();
            $V->assign('topGoods',$topGoods);
        $action=S(G('action'));
        if(!empty($action)){
            switch($action){
                case 'add':
                    $id=S(G('id'));
                    $num=S(G('num'));
                    $indexModel->addCart($id,$num);
                    break;
                case 'set':
                    $id=S(G('id'));
                    $num=S(G('num'));
                    $indexModel->setCart($id,$num);
                    break;
                case 'del':
                    $id=S(G('id'));
                    $indexModel->delCart($id);
                    break;
            }
            exit;
        }

        $cartList=$indexModel->getCartList();
        $V->assign('cartList',$cartList);

        $V->display('Index/shopcart.html');
    }

    //试用页面
    function usertry(){
        global $V;
        global $siteInfo;
        $V->assign('siteInfo',$siteInfo);
        $indexModel=M('Index');
        $loginInfo=$indexModel->getLoginInfo();
        $V->assign('loginInfo',$loginInfo);
        $cartList=$indexModel->getCartList();
        $V->assign('cartList',$cartList);
            $adminModel=M('Admin');
            $topGoods=$adminModel->getTopGoods();
            $V->assign('topGoods',$topGoods);

        $V->display('Index/usertry.html');
    }

    //用户中心页面
    function user(){
        global $V;
        global $siteInfo;
        global $DB;
        $V->assign('siteInfo',$siteInfo);
        $indexModel=M('Index');
        $loginInfo=$indexModel->getLoginInfo();

        if($loginInfo['loginstatus']==0){
            logError('您还未登录!');
        }
        $V->assign('loginInfo',$loginInfo);
        $cartList=$indexModel->getCartList();
        $V->assign('cartList',$cartList);
        
        $apiModel=M('Api');
        $areasInfo=$apiModel->getAreas(0);
        $V->assign('areasInfo',$areasInfo);

        $adminModel=M('Admin');
            $topGoods=$adminModel->getTopGoods();
            $V->assign('topGoods',$topGoods);
        $action=S(G('action'));
        if(!empty($action)){
            switch($action){
                case 'save':
                    $userInfo=array(
                        'true_name'=>S($_POST['true_name']),
                        'telephone'=>S($_POST['telephone']),
                        'sex'=>S($_POST['sex']),
                        'address'=>S($_POST['address']),
                        'area'=>(int)($_POST['province']).','.(int)($_POST['city']).','.(int)($_POST['area']),
                    );

                    if($_FILES['file']['error']==0){
                        //上传图片
                        $save_dir = APP_PATH.'uploads/image/';
                        $filename = upload('file',10485760,array('image'),$save_dir);
                        // var_dump($filename);
                        if (!$filename) {
                            logError('文件上传失败');
                            exit;
                        }
                        $userInfo['avatar']=$filename;
                    }

                    // var_dump($userInfo);
                    $user_id=$_SESSION['index']['id'];
                    $DB->update('user_info',$userInfo,"user_id='$user_id'");

                    $userInfo=array(
                        'email'=>S($_POST['email']),
                    );
                    if(!empty($_POST['password'])){
                        $userInfo['password']=md5($_POST['password']);
                    }
                    $DB->update('user',$userInfo,"id='$user_id'");

                    header('location:'.U('index/user'));
                    break;
                case 'order':
                    $adminModel=M('Admin');
                    $where="user_id='".$_SESSION['index']['id']."'";
                    $total=$adminModel->getOrderCount($where);
                    $orderList=$adminModel->getOrderList(0,$total,$where);
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
                    $V->display('Index/user-order.html');
                    break;
                case 'cancleorder':
                    $id=S(G('id'));
                    $DB->update('order',array('ostatus'=>3),"id='$id'");
                    break;
                case 'comfirmorder':
                    $id=S(G('id'));
                    $DB->update('order',array('ostatus'=>2),"id='$id'");
                    break;
            }
            exit;
        }

        $userInfo=$adminModel->getUserInfo($_SESSION['index']['id']);
        $userInfo=$adminModel->formatUserInfo(array(0=>$userInfo))[0];
        $filename=$userInfo['avatar'];
        $img_path =  APP_NAME.'/uploads/image/';
        $img_path .= substr($filename,0,4).'/';
        $img_path .= substr($filename,4,2).'/';
        $img_path .= substr($filename,6,2).'/';
        $img_path .= $filename;
        $userInfo['avatar']=$img_path;
        $areaArr=explode(',',$userInfo['area']);
        $userInfo['province']=$areaArr[0];
        $userInfo['city']=$areaArr[1];
        $userInfo['area']=$areaArr[2];
        // var_dump($userInfo);
        $V->assign('userInfo',$userInfo);

        $V->display('Index/user.html');
    }
}