<?php /* Smarty version 3.1.27, created on 2016-03-21 07:14:07
         compiled from "template\Admin\include\header.html" */ ?>
<?php
/*%%SmartyHeaderCode:103156ef2ebf594c93_48792088%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8b2e02652efc36de0c4c7022e580ea561663c5f' => 
    array (
      0 => 'template\\Admin\\include\\header.html',
      1 => 1458515646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103156ef2ebf594c93_48792088',
  'variables' => 
  array (
    'siteInfo' => 0,
    'loginInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ef2ebf660045_21266221',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ef2ebf660045_21266221')) {
function content_56ef2ebf660045_21266221 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '103156ef2ebf594c93_48792088';
?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
        <title>360商城后台管理系统</title>
        <!-- Bootstrap -->
        <link href="<?php echo TPL_PATH;?>
/Admin/css/<?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['skin'];?>
.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo TPL_PATH;?>
/Admin/css/admin.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="<?php echo TPL_PATH;?>
/Admin/js/html5shiv.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="<?php echo TPL_PATH;?>
/Admin/js/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <?php echo '<script'; ?>
 src="<?php echo TPL_PATH;?>
/Admin/js/jquery.min.js"><?php echo '</script'; ?>
>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <?php echo '<script'; ?>
 src="<?php echo TPL_PATH;?>
/Admin/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <!-- 头部导航 -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
            <div class="container-fluid">
                <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    <a class="navbar-brand" href="#">360商城后台管理系统</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">首页</span></a></li>
                        <!-- <li><a href="#">API接口</a></li> -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['loginInfo']->value['username'];?>
<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 个性设置</a></li> -->
                                <!-- <li><a href="#"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 修改密码</a></li> -->
                                <!-- <li role="separator" class="divider"></li> -->
                                <li><a href="<?php echo U('admin/logout');?>
"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> 注销</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="#">站内消息 <span class="badge">42</span></a></li> -->
                        <!-- <li><a href="#">版权信息</a></li> -->
                        <li><a href="<?php echo U('Index/index');?>
" target="_blank">前台首页</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- 头部导航END --><?php }
}
?>