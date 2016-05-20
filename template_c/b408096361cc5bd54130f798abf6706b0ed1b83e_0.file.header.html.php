<?php /* Smarty version 3.1.27, created on 2016-03-22 10:45:57
         compiled from "template\Index\include\header.html" */ ?>
<?php
/*%%SmartyHeaderCode:1183056f0b1e59dc039_19575297%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b408096361cc5bd54130f798abf6706b0ed1b83e' => 
    array (
      0 => 'template\\Index\\include\\header.html',
      1 => 1458614756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1183056f0b1e59dc039_19575297',
  'variables' => 
  array (
    'siteInfo' => 0,
    'loginInfo' => 0,
    'cartList' => 0,
    'v' => 0,
    'sum' => 0,
    'topGoods' => 0,
    'vs' => 0,
    'ks' => 0,
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f0b1e5d53496_81404675',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f0b1e5d53496_81404675')) {
function content_56f0b1e5d53496_81404675 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1183056f0b1e59dc039_19575297';
?>
<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['sitetitle'];
echo $_smarty_tpl->tpl_vars['siteInfo']->value['sitetitle2'];?>
</title>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['seokeywords'];?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['seodescription'];?>
" />
    <link rel="shortcut icon" href="<?php echo TPL_PATH;?>
/Index/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo TPL_PATH;?>
/Index/css/index.css">
    <?php echo '<script'; ?>
 src="<?php echo TPL_PATH;?>
/Admin/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        function userFrame(frame,state){
            obj=document.getElementById(frame+'Frame');
            switch(state){
                case 'show':
                    obj.style.display='block';
                    document.getElementById(frame[0]+'-username').focus();
                    verifyChange(frame);
                    break;
                case 'hide':
                    obj.style.display='none';
                    break;
            }
        }
        //验证码切换
        function verifyChange(frame){
            document.getElementById(frame+'-verify-img').setAttribute('src',"<?php echo U('Common/verify/r/');?>
"+Math.random()+'.png');
        }
        //返回顶部
        function returnTop(){
            $('body,html').animate({
                scrollTop:0
            },1000); 
        }

        function checkForm(action,data){
            if(data==''){
                $("#tip-"+action).html($("#tip-"+action).attr("data-default-tip"));
                return 0;
            }
            $.ajax({
            url: "<?php echo U('Api/checkform');?>
",
            type: 'GET',
            data:'action='+action+'&data='+data,
            dataType: 'html',
            timeout: 1000,
            success: function(html){
                $("#tip-"+action).html(html);
            }
            });
        }

        function checkLoginVerify(data){
            if(data==''){
                $("#tip-verify-login").html($("#tip-verify-login").attr("data-default-tip"));
                return 0;
            }
            $.ajax({
            url: "<?php echo U('Api/checkform');?>
",
            type: 'GET',
            data:'action=verify'+'&data='+data,
            dataType: 'html',
            timeout: 1000,
            success: function(html){
                $("#tip-verify-login").html(html);
            }
            });
        }

        function checkPass(pass){
            if(pass==''){
                $("#tip-password2").html($("#tip-password2").attr("data-default-tip"));
                return 0;
            }
            if(pass!=$("#r-password").val()){
                $("#tip-password2").html('<font color="red">两次密码输入不一致！</font>');
            }else{
                $("#tip-password2").html('<font color="#89D92B">恭喜，密码可用！</font>');
            }
        }

        function addCart(id,num){
            $.ajax({
            url: "<?php echo U('Index/shopcart/action/add');?>
",
            type: 'GET',
            data:'id='+id+'&num='+num,
            dataType: 'html',
            timeout: 1000,
            success: function(html){
            }
            });
        }
        function setCart(id,num){
            $.ajax({
            url: "<?php echo U('Index/shopcart/action/set');?>
",
            type: 'GET',
            data:'id='+id+'&num='+num,
            dataType: 'html',
            timeout: 1000,
            success: function(html){
            }
            });
        }
    <?php echo '</script'; ?>
>
</head>
<body>
        <div class="userFrame" id="loginFrame">
            <div class="userFrame-bg" onclick="userFrame('login','hide')"></div>
            <div class="panel" style="margin-top: 100px;">
                <div class="hd">
                    <div class="title">
                        <span>欢迎登录360商城</span> 
                    </div>
                    <div class="close" onclick="userFrame('login','hide')"></div>
                </div>
                <div class="bd">
                    <form action="<?php echo U('index/login');?>
" method="post">
                        <p>
                            <label for="l-username">帐&nbsp;&nbsp;&nbsp;号</label>
                            <span class="input-bg"><input type="text" name="username" placeholder="请输入您的用户名" id="l-username"></span>
                        </p>
                        <p>
                            <label for="l-password">密&nbsp;&nbsp;&nbsp;码</label>
                            <span class="input-bg"><input type="password" name="password" maxlength="20" placeholder="请输入您的密码" id="l-password"></span>
                        </p>
                        <p>
                            <label for="l-verify-input">验证码</label>
                            <span class="input-bg" id="verify-span"><input type="text" name="verify" maxlength="7" placeholder="请输入验证码" class="verify-input" id="l-verify-input" autocomplete="off" onkeyup="checkLoginVerify(this.value)"></span>
                            <img id='login-verify-img' src="" onclick="verifyChange('login');">
                            <span class="tip" id="tip-verify-login" data-default-tip=""></span>
                        </p>
                        <p style="padding-left:65px;" id="autologin">
                            <label><input type="checkbox" name="autologin" checked="checked">下次自动登录</label>
                        </p>
                        <p style="padding-left:65px;">
                            <input type="submit" value="登录">
                        </p>
                    </form>
                </div>
                <div class="ft">
                    <a href="javascript:userFrame('login','hide');userFrame('register','show')" class="linkblue">注册新账号</a><a href="" class="linkblue">忘记密码?</a>
                </div>
            </div>
        </div>
        
        <div class="userFrame" id="registerFrame">
            <div class="userFrame-bg" onclick="userFrame('register','hide')"></div>
            <div class="panel" style="margin-top: 20px;">
                <div class="hd">
                    <div class="title">
                        <span>欢迎注册360商城</span> 
                    </div>
                    <div class="close" onclick="userFrame('register','hide')"></div>
                </div>
                <div class="bd">
                    <form action="<?php echo U('index/register');?>
" method="post">
                        <p>
                            <label for="r-username">用户名</label>
                            <span class="input-bg"><input required type="text" name="username" minlength="2" maxlength="14" id="r-username" onkeyup="checkForm('username',this.value)"></span>
                            <span class="tip" id="tip-username" data-default-tip="2-14个字符：英文、数字或中文">2-14个字符：英文、数字</span>
                        </p>
                        <p>
                            <label for="r-email">邮&nbsp;&nbsp;&nbsp;箱</label>
                            <span class="input-bg"><input required type="text" name="email" maxlength="30" id="r-email" onkeyup="checkForm('email',this.value)"></span>
                            <span class="tip" id="tip-email" data-default-tip="请输入您的常用邮箱">请输入您的常用邮箱</span>
                        </p>
                        <p>
                            <label for="r-password">密&nbsp;&nbsp;&nbsp;码</label>
                            <span class="input-bg"><input required type="password" name="password" minlength="6" maxlength="20" id="r-password" onkeyup="checkForm('password',this.value)"></span>
                            <span class="tip" id="tip-password" data-default-tip="6-20个字符(区分大小写)">6-20个字符</span>
                        </p>
                        <p>
                            <label for="r-password2">确&nbsp;&nbsp;&nbsp;认</label>
                            <span class="input-bg"><input required type="password" name="password2" minlength="6" maxlength="20" id="r-password2" onkeyup="checkPass(this.value)" ></span>
                            <span class="tip" id="tip-password2" data-default-tip="请再次输入密码">请再次输入密码</span>
                        </p>
                        <p>
                            <label for="r-verify-input">验证码</label>
                            <span class="input-bg" id="verify-span"><input required type="text" name="verify" maxlength="7" placeholder="请输入验证码" class="verify-input" id="r-verify-input" autocomplete="off" onkeyup="checkForm('verify',this.value)"></span>
                            <img id='register-verify-img' src="" onclick="verifyChange('register');">
                            <span class="tip" id="tip-verify" data-default-tip="请输入图中的字母或数字，不区分大小写">请输入图中的字母或数字，不区分大小写</span>
                        </p>
                        <p style="padding-left:65px;">
                            <input type="submit" value="登录">
                        </p>
                        <p style="padding-left:65px;" id="licence">
                            <label><input type="checkbox" name="agree" checked="checked">我已经阅读并同意<a href="">《360用户服务条款》</a></label>
                        </p>
                    </form>
                </div>
                <div class="ft">
                    已有账号,<a href="javascript:userFrame('register','hide');userFrame('login','show')" class="linkblue">立即登录</a><a href="" class="linkblue">忘记密码?</a>
                </div>
            </div>
        </div>


        <div class="header">
            <div class="topbox">
                <div class="contentwrap">
                    <ul class="left-bar">
                        <li><a href="<?php echo U('index/error');?>
">企业采购</a></li>
                        <li><a href="<?php echo U('index/error');?>
">帮助中心</a></li>
                        <li><a href="<?php echo U('index/error');?>
">收藏本站</a></li>
                        <li><a href="<?php echo U('admin/index');?>
" target="_blank">后台入口</a></li>
                    </ul>
                    <ul class="right-bar">
                    <?php if ($_smarty_tpl->tpl_vars['loginInfo']->value['loginstatus'] == 1) {?>
                        <li id="select-user">
                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['loginInfo']->value['username'];?>
</a>
                            <ul>
                                <li><a href="<?php echo U('index/user');?>
">个人中心</a></li>
                                <li><a href="<?php echo U('index/user/action/order');?>
">我的订单</a></li>
                                <li><a href="<?php echo U('index/logout');?>
">退出登录</a></li>
                            </ul>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['loginInfo']->value['loginstatus'] == 0) {?>
                        <li><a href="javascript:void(0);" onclick="userFrame('login','show')">登录</a></li>
                        <li><a href="javascript:void(0);" onclick="userFrame('register','show')">注册</a></li>
                    <?php }?>
                        <!-- <li><a href="#">我的订单</a></li> -->
                        <li id="shopcart">
                            <a href="<?php echo U('index/shopcart');?>
">
                                <i></i>购物车<span class="cart-size">(<?php echo count($_smarty_tpl->tpl_vars['cartList']->value);?>
)</span>
                            </a>
                            <div class="cart-info">
                                <?php $_smarty_tpl->tpl_vars["sum"] = new Smarty_Variable(0, null, 0);?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['cartList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <div class="item">
                                    <a href="<?php echo U('index/shopcart');?>
">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
">
                                        <span class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</span>
                                        <span class="number"><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</span>
                                        <span class="price">¥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span>
                                        <i></i>
                                    </a>
                                    <?php $_smarty_tpl->tpl_vars['sum'] = new Smarty_Variable($_smarty_tpl->tpl_vars['sum']->value+$_smarty_tpl->tpl_vars['v']->value['num']*$_smarty_tpl->tpl_vars['v']->value['price'], null, 0);?>
                                </div>
                                <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                <div class="count">
                                    <a href="<?php echo U('index/shopcart');?>
">去购物车</a>
                                    <span>共<b><?php echo count($_smarty_tpl->tpl_vars['cartList']->value);?>
</b>件商品<br>总计：<b>¥<i><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
</i></b></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav">
                <div class="contentwrap">
                    <div class="logo">
                        <a href="<?php echo U('index/index');?>
"><img src="<?php echo TPL_PATH;?>
/Index/images/logo.gif" /></a>
                    </div>
                    <ul class="navbar">
                        <?php
$_from = $_smarty_tpl->tpl_vars['topGoods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vs'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vs']->_loop = false;
$_smarty_tpl->tpl_vars['ks'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['ks']->value => $_smarty_tpl->tpl_vars['vs']->value) {
$_smarty_tpl->tpl_vars['vs']->_loop = true;
$foreach_vs_Sav = $_smarty_tpl->tpl_vars['vs'];
?>
                        <li>
                            <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['vs']->value[0];
$_tmp1=ob_get_clean();
echo U(('index/allproduct/class_id/').($_tmp1));?>
"><?php echo $_smarty_tpl->tpl_vars['ks']->value;?>
</a>
                            <div class="sublist">
                                <ul>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['vs']->value[1];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                    <li>
                                        <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp2=ob_get_clean();
echo U(('index/product/id/').($_tmp2));?>
" target="_blank">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
">
                                            <span><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</span>
                                            <i><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
元</i>
                                        </a>
                                    </li>
                                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                </ul>
                            </div>
                        </li>
                        <?php
$_smarty_tpl->tpl_vars['vs'] = $foreach_vs_Sav;
}
?>
                    </ul>
                    <div class="right-bar">
                        <form action="" method="GET">
                            <input type="hidden" name="m" value="Index">
                            <input type="hidden" name="a" value="allproduct">
                            <input type="submit" class="search-btn" value="">
                            <input type="text" name="search" class="suggest" value="<?php if (isset($_smarty_tpl->tpl_vars['search']->value)) {
echo $_smarty_tpl->tpl_vars['search']->value;
}?>">
                        </form>
                        <!-- <img src="<?php echo TPL_PATH;?>
/Index/images/t0123b81d5bd9c3ee73.png"> -->
                    </div>
                </div>
            </div>
        </div><?php }
}
?>