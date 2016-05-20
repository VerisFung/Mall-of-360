<?php /* Smarty version 3.1.27, created on 2016-03-15 20:29:52
         compiled from "template\Index\include\footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:567956e80040e0fa60_91303339%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72de1fa7ea9c397ec4e8a261dc7ea3690df9a9cf' => 
    array (
      0 => 'template\\Index\\include\\footer.html',
      1 => 1457950197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '567956e80040e0fa60_91303339',
  'variables' => 
  array (
    'siteInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56e80040f39fb0_13726416',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e80040f39fb0_13726416')) {
function content_56e80040f39fb0_13726416 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '567956e80040e0fa60_91303339';
?>
        <div class="footer">
            <ul class="footer-banner">
                <li><i>7</i>7天无理由退货</li>
                <li><i>15</i>15天免费换货</li>
                <li><i>包</i>满99元包邮</li>
            </ul>
            <div class="contentwrap">
                <ul>
                    <li><span class="title">新手入门</span></li>
                    <li><a href="<?php echo U('index/error');?>
">新用户注册</a></li>
                    <li><a href="<?php echo U('index/error');?>
">用户登录</a></li>
                    <li><a href="<?php echo U('index/error');?>
">找回密码</a></li>
                </ul>
                <ul>
                    <li><span class="title">购物指南</span></li>
                    <li><a href="<?php echo U('index/error');?>
">购买流程</a></li>
                    <li><a href="<?php echo U('index/error');?>
">支付方式</a></li>
                    <li><a href="<?php echo U('index/error');?>
">配送说明</a></li>
                </ul>
                <ul>
                    <li><span class="title">售后服务</span></li>
                    <li><a href="<?php echo U('index/error');?>
">服务条款</a></li>
                    <li><a href="<?php echo U('index/error');?>
">七日退货</a></li>
                    <li><a href="<?php echo U('index/error');?>
">十五日换货</a></li>
                </ul>
                <ul>
                    <li><span class="title">免费试用</span></li>
                    <li><a href="<?php echo U('index/error');?>
">试用流程</a></li>
                    <li><a href="<?php echo U('index/error');?>
">查看申请结果</a></li>
                    <li><a href="<?php echo U('index/error');?>
">提交报告</a></li>
                </ul>
                <ul>
                    <li><span class="title">推广合作</span></li>
                    <li><a href="<?php echo U('index/error');?>
">厂商合作</a></li>
                    <li><a href="<?php echo U('index/error');?>
">招商渠道</a></li>
                    <li><a href="<?php echo U('index/error');?>
">企业采购</a></li>
                    <li><a href="<?php echo U('index/error');?>
">360生态链</a></li>
                </ul>
                <ul>
                    <li><span class="title">联系我们</span></li>
                    <li><span class="tel">400-6822-360</span></li>
                    <li><span class="con">周一至周日 8:00-22：00</span></li>
                    <li><span class="con">（仅收市话费）</span></li>
                    <li>
                        <a href="<?php echo U('index/error');?>
"><img src="<?php echo TPL_PATH;?>
/Index/images/t019c3c42d7b0ea4f41.png"></a>
                        <a href="<?php echo U('index/error');?>
"><img src="<?php echo TPL_PATH;?>
/Index/images/t0113493aa732f72837.png"></a>
                        <a href="<?php echo U('index/error');?>
"><img src="<?php echo TPL_PATH;?>
/Index/images/t0128093bd494ffc7e9.png"></a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="footer-copyright">360商城©2013-2016 360公司版权所有 <?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['icp'];?>
</div>
        </div>
        <div class="slidebar">
            <ul>
                <li class="l1"><a href="<?php echo U('index/error');?>
" target="_blank"></a></li>
                <li class="l2"><a href="<?php echo U('index/error');?>
" target="_blank"></a></li>
                <li class="l3">
                    <a href="<?php echo U('index/error');?>
" target="_blank"></a>
                    <div class="hidden">
                        <span class="arrowr"></span>
                        <img src="<?php echo TPL_PATH;?>
/Index/images/t01d06b994b8798623c.jpg">
                        <p>扫码关注官方微信<br>先人一步知晓促销活动</p>
                    </div>
                </li>
                <li class="l4">
                    <a href="<?php echo U('index/error');?>
" target="_blank"></a>
                    <div class="hidden">
                        <span class="arrowr"></span>
                        <img src="<?php echo TPL_PATH;?>
/Index/images/t013df41dbfac4d5924.jpg">
                        <p>手机商城首次登录<br><span>送5元现金券</span></p>
                    </div>
                </li>
                <li class="l5"><a href="javascript:returnTop();"></a></li>
            </ul>
        </div>
        <?php echo $_smarty_tpl->tpl_vars['siteInfo']->value['footerinfo'];?>

</body>
</html><?php }
}
?>