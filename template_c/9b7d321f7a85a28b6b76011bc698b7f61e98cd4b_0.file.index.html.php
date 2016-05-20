<?php /* Smarty version 3.1.27, created on 2016-03-22 11:47:11
         compiled from "template\Index\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1283056f0c03fcb3907_30127242%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b7d321f7a85a28b6b76011bc698b7f61e98cd4b' => 
    array (
      0 => 'template\\Index\\index.html',
      1 => 1458618429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1283056f0c03fcb3907_30127242',
  'variables' => 
  array (
    'c1' => 0,
    'v' => 0,
    'c2' => 0,
    'c3' => 0,
    'd1' => 0,
    'd2' => 0,
    'd3' => 0,
    'e1' => 0,
    'e2' => 0,
    'e3' => 0,
    'f1' => 0,
    'f2' => 0,
    'f3' => 0,
    'g1' => 0,
    'g2' => 0,
    'g3' => 0,
    'h1' => 0,
    'h2' => 0,
    'h3' => 0,
    'newGoods' => 0,
    'hotGoods' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f0c0406f0e51_10374539',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f0c0406f0e51_10374539')) {
function content_56f0c0406f0e51_10374539 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1283056f0c03fcb3907_30127242';
echo $_smarty_tpl->getSubTemplate ('Index/include/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="banner">
            <div class="contentwrap">
                <ul class="navbar">
                    <li class="n1">
                        <a href="<?php echo U('index/allproduct');?>
">全部商品分类</a>
                    </li>
                    <li class="n2">
                        <a href="#">手机及配件</a>
                        <div class="sublist">
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['c1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp1=ob_get_clean();
echo U(('index/product/id/').($_tmp1));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['c2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp2=ob_get_clean();
echo U(('index/product/id/').($_tmp2));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['c3']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp3=ob_get_clean();
echo U(('index/product/id/').($_tmp3));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                        </div>
                    </li>
                    <li class="n3">
                        <a href="#">智能穿戴</a>
                        <div class="sublist" style="width: 840px;">
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['d1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp4=ob_get_clean();
echo U(('index/product/id/').($_tmp4));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['d2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp5=ob_get_clean();
echo U(('index/product/id/').($_tmp5));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['d3']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp6=ob_get_clean();
echo U(('index/product/id/').($_tmp6));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                        </div>
                    </li>
                    <li class="n4">
                        <a href="#">智能家居</a>
                        <div class="sublist">
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['e1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp7=ob_get_clean();
echo U(('index/product/id/').($_tmp7));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['e2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp8=ob_get_clean();
echo U(('index/product/id/').($_tmp8));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['e3']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp9=ob_get_clean();
echo U(('index/product/id/').($_tmp9));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                        </div>
                    </li>
                    <li class="n5">
                        <a href="#">智能车品</a>
                        <div class="sublist" style="width: 840px;">
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['f1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp10=ob_get_clean();
echo U(('index/product/id/').($_tmp10));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['f2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp11=ob_get_clean();
echo U(('index/product/id/').($_tmp11));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['f3']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp12=ob_get_clean();
echo U(('index/product/id/').($_tmp12));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                        </div>
                    </li>
                    <li class="n6">
                        <a href="#">影音娱乐</a>
                        <div class="sublist">
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['g1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp13=ob_get_clean();
echo U(('index/product/id/').($_tmp13));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['g2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp14=ob_get_clean();
echo U(('index/product/id/').($_tmp14));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['g3']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp15=ob_get_clean();
echo U(('index/product/id/').($_tmp15));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                        </div>
                    </li>
                    <li class="n7">
                        <a href="#">充电设备</a>
                        <div class="sublist" style="width: 840px;">
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['h1']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp16=ob_get_clean();
echo U(('index/product/id/').($_tmp16));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['h2']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp17=ob_get_clean();
echo U(('index/product/id/').($_tmp17));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                            <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['h3']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp18=ob_get_clean();
echo U(('index/product/id/').($_tmp18));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="slide">
                    <li><a><img src="<?php echo TPL_PATH;?>
/Index/images/banner/banner_2.jpg" alt="" /></a></li>
                    <!--
                    <li><a href="#"><img src="<?php echo TPL_PATH;?>
/Index/images/banner/banner_1.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="<?php echo TPL_PATH;?>
/Index/images/banner/banner_3.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="<?php echo TPL_PATH;?>
/Index/images/banner/banner_4.jpg" alt="" /></a></li>
                    <li><a href="#"><img src="<?php echo TPL_PATH;?>
/Index/images/banner/banner_5.jpg" alt="" /></a></li>
                    -->
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="contentwrap">
                <div class="product">
                    <div class="left">
                        <a href="<?php echo U('index/product/id/34');?>
" target="_blank"><img src="<?php echo TPL_PATH;?>
/Index/images/product/t014bb50eca8d6529ab.jpg" alt="" /></a>
                    </div>
                    <ul class="right">
                        <li><a href="<?php echo U('index/product/id/74');?>
" target="_blank"><img src="<?php echo TPL_PATH;?>
/Index/images/product/t01d29a4d46449026da.jpg" alt="" /></a></li>
                        <li><a href="<?php echo U('index/product/id/45');?>
" target="_blank"><img src="<?php echo TPL_PATH;?>
/Index/images/product/t01234c379004bbb8e4.jpg" alt="" /></a></li>
                        <li><a href="<?php echo U('index/product/id/73');?>
" target="_blank"><img src="<?php echo TPL_PATH;?>
/Index/images/product/t018576461cce622379.jpg" alt="" /></a></li>
                        <li><a href="<?php echo U('index/product/id/39');?>
" target="_blank"><img src="<?php echo TPL_PATH;?>
/Index/images/product/t011f75b998d004a27a.jpg" alt="" /></a></li>
                        <li><a href="<?php echo U('index/product/id/46');?>
" target="_blank"><img src="<?php echo TPL_PATH;?>
/Index/images/product/t0186ccd41213fde669.jpg" alt="" /></a></li>
                        <li><a href="<?php echo U('index/product/id/43');?>
" target="_blank"><img src="<?php echo TPL_PATH;?>
/Index/images/product/t019d905ae8d34997b2.jpg" alt="" /></a></li>
                    </ul>
                </div>
                <div class="product">
                    <span class="title">人气新品</span>
                    <div class="left">
                        <a href="<?php echo U('index/product/id/40');?>
" target="_blank"><img src="<?php echo TPL_PATH;?>
/Index/images/product/t01001623a24cdb0827.jpg" alt="" /></a>
                    </div>
                    <ul class="default">
                        <?php
$_from = $_smarty_tpl->tpl_vars['newGoods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                        <li>
                            <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp19=ob_get_clean();
echo U(('index/product/id/').($_tmp19));?>
" target="_blank">
                                <p class="info">
                                    <span class="ptitle"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</span>
                                    <span class="pinfo"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</span>
                                    <i class="pprice"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
元</i>
                                </p>
                                <span class="pic">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
">
                                </span>
                            </a>
                        </li>
                        <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                    </ul>
                </div>
                <div class="product">
                    <span class="title">热销推荐</span>
                    <div class="left">
                        <a href="<?php echo U('index/product/id/72');?>
" target="_blank"><img src="<?php echo TPL_PATH;?>
/Index/images/product/t013e9b9ef821efb124.jpg" alt="" /></a>
                    </div>
                    <ul class="default">
                        <?php
$_from = $_smarty_tpl->tpl_vars['hotGoods']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                        <li>
                            <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp20=ob_get_clean();
echo U(('index/product/id/').($_tmp20));?>
" target="_blank">
                                <p class="info">
                                    <span class="ptitle"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</span>
                                    <span class="pinfo"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</span>
                                    <i class="pprice"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
元</i>
                                </p>
                                <span class="pic">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
">
                                </span>
                            </a>
                        </li>
                        <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                    </ul>
                </div>
            </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ('Index/include/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>