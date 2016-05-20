<?php /* Smarty version 3.1.27, created on 2016-03-21 19:42:26
         compiled from "template\Admin\include\sidebar.html" */ ?>
<?php
/*%%SmartyHeaderCode:2132256efde22348506_59173222%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc6f949066a4b7c8ff76f73f225498208bec7c88' => 
    array (
      0 => 'template\\Admin\\include\\sidebar.html',
      1 => 1458560537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132256efde22348506_59173222',
  'variables' => 
  array (
    'activeid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56efde22441095_87338252',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56efde22441095_87338252')) {
function content_56efde22441095_87338252 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2132256efde22348506_59173222';
?>
        <div class="sidebar">
            <ul class="nav nav-stacked nav-sidebar">
                <li><a href="<?php echo U('Admin/index');?>
"><span class="glyphicon glyphicon-stats"></span> 系统信息</span></a></li>
                <li><a href="<?php echo U('Admin/siteset');?>
"><span class="glyphicon glyphicon-cog"></span> 站点设置</span></a></li>
                <li><a href="<?php echo U('Admin/adminset');?>
"><span class="glyphicon glyphicon-king"></span> 管理设置</a></li>
                <li><a href="<?php echo U('Admin/user');?>
"><span class="glyphicon glyphicon-user"></span> 用户管理</a></li>
                <li><a href="<?php echo U('Admin/classify');?>
"><span class="glyphicon glyphicon-th"></span> 商品分类</a></li>
                <li><a href="<?php echo U('Admin/goods');?>
"><span class="glyphicon glyphicon-gift"></span> 商品管理</a></li>
                <li><a href="<?php echo U('Admin/order');?>
"><span class="glyphicon glyphicon-list-alt"></span> 订单管理</a></li>
                <li><a href="<?php echo U('Admin/comment');?>
"><span class="glyphicon glyphicon-comment"></span> 评论管理</a></li>
                <!-- <li><a href="<?php echo U('Admin/nav');?>
"><span class="glyphicon glyphicon-tasks"></span> 导航管理</a></li> -->
                <!-- <li><a href="<?php echo U('Admin/brands');?>
"><span class="glyphicon glyphicon-sunglasses"></span> 品牌专题</a></li> -->
            </ul>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            var navli=document.getElementsByTagName('ul')[3].getElementsByTagName('li');
            navli[<?php echo $_smarty_tpl->tpl_vars['activeid']->value;?>
-1].setAttribute('class', 'active');
        <?php echo '</script'; ?>
><?php }
}
?>