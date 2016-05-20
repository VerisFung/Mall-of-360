<?php /* Smarty version 3.1.27, created on 2016-03-22 13:16:39
         compiled from "template\Index\product.html" */ ?>
<?php
/*%%SmartyHeaderCode:1250456f0d5372f3076_12267042%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '070de5490e48141fa00b1698d9a063cce24e7fe0' => 
    array (
      0 => 'template\\Index\\product.html',
      1 => 1458623798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1250456f0d5372f3076_12267042',
  'variables' => 
  array (
    'classifyClanInfo' => 0,
    'k' => 0,
    'v' => 0,
    'goodsInfo' => 0,
    'views' => 0,
    'goodsImageInfo' => 0,
    'loginInfo' => 0,
    'msgList' => 0,
    'relation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f0d5375c51b7_51463774',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f0d5375c51b7_51463774')) {
function content_56f0d5375c51b7_51463774 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1250456f0d5372f3076_12267042';
echo $_smarty_tpl->getSubTemplate ('Index/include/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
 type="text/javascript">
    window.onload=function(){
        $('.bottom img:eq(0)').attr('class','cur');
        $('#img-big').attr('src',$('.bottom img:eq(0)').attr('src').replace('64_',''));
    }
    function changeBigImg(obj){
        document.getElementById('img-big').src=obj.src.replace('64_','');
        $('.bottom img').attr('class','');
        obj.setAttribute('class','cur');
    }
<?php echo '</script'; ?>
>
        <div class="main">
            <div class="contentwrap">
                <ol class="breadcrumb">
                  <li><a href="<?php echo U('index/allproduct');?>
">全部分类</a></li>
                  <?php
$_from = $_smarty_tpl->tpl_vars['classifyClanInfo']->value;
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
                  <li><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['k']->value;
$_tmp1=ob_get_clean();
echo U(('index/allproduct/class_id/').($_tmp1));?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
                  <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                  <li class="active"><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['gname'];?>
</li>
                  <span style="float:right;color:#333">浏览数：<?php echo $_smarty_tpl->tpl_vars['views']->value;?>
</span>
                </ol>
                <?php if ($_smarty_tpl->tpl_vars['goodsInfo']->value['status'] == 0) {?>
                    <div style="width:100%;height:200px;text-align: center;line-height: 200px;color:#89D92B"><h1>该商品已下架</h1></div>
                <?php } else { ?>
                <div class="picbox">
                    <div class="top">
                        <img id="img-big" src="">
                    </div>
                    <div class="bottom">
                    <?php
$_from = $_smarty_tpl->tpl_vars['goodsImageInfo']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['iname'];?>
" onmouseover="changeBigImg(this)">
                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                    </div>
                </div>
                <div class="mainbox">
                    <span class="title"><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['gname'];?>
</span>
                    <span class="desc"><?php echo strip_tags($_smarty_tpl->tpl_vars['goodsInfo']->value['description']);?>
</span>
                    <span class="price">￥ <?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['price'];?>
</span>
                    <!-- <p>分类&nbsp;&nbsp;&nbsp;&nbsp;<a class="check">套装版</a>&nbsp;&nbsp;<a class="checkbox">尊享版</a></p> -->
                    <p><span style="float:left">数量：&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
                        <div class="gcIpt">
                            <a href="javascript:void(0);" class="decrement" data-num="-1">-</a>
                            <input type="text" class="goodsCount" value="1">
                            <a href="javascript:void(0);" class="increment" data-num="1">+</a>
                        </div>
                    <p>购买可获积分：&nbsp;&nbsp;&nbsp;&nbsp;<font color="#333"><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['point'];?>
</font></p>
                    <p>库存：&nbsp;&nbsp;&nbsp;&nbsp;<font color="#333"><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['stock'];?>
</font></p>
                    <p>销量：&nbsp;&nbsp;&nbsp;&nbsp;<font color="#333"><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['sale'];?>
</font></p>
                    <?php if ($_smarty_tpl->tpl_vars['goodsInfo']->value['stock'] > 0) {?>
                        <?php if ($_smarty_tpl->tpl_vars['loginInfo']->value['loginstatus'] == 0) {?>
                        <a class="addcart" href="javascript:void(0)" onclick="userFrame('login','show')"><span class="icon"></span>加入购物车</a>
                        <?php } else { ?>
                        <a class="addcart" href="javascript:void(0)" onclick="addCart(<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['id'];?>
,$('.goodsCount').val());location.href='<?php echo U('index/shopcart');?>
'"><span class="icon"></span>加入购物车</a>
                        <?php }?>
                    <?php } else { ?>
                        <a class="addcart" style="background: #999;"><span class="icon"></span>已售完</a>
                    <?php }?>
                    <a href="javascript:void(0);" id="zan" class="love"><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['zan'];?>
</a>
                </div>
                <div class="clear"></div>
                <div class="imgcon">
                    <?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['content'];?>

                </div>
                <?php }?>
                <a name="msg"></a>
                <h2 style="margin:20px 0;">买家评论：</h2>
                <?php if (count($_smarty_tpl->tpl_vars['msgList']->value) == 0) {?>
                    <h1 style="text-align: center">暂无买家评论</h1>
                <?php } else { ?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['msgList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                    <div class="message">
                        <table border="0" cellspacing="0" cellpadding="0" width=100<?php echo '%>';?>
                            <tr>
                                <td rowspan="2" width="100px"><img style="width:64px;height:64px;" class="tx" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['avatar'];?>
" alt="" /></td>
                                <td width="50px"><b><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['true_name'],0,1);?>
**</b></td>
                                <td style="color:#666"><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['v']->value['uptime']);?>
</td>
                            </tr>
                            <tr>
                                <td colspan="2" valign="top"><?php echo $_smarty_tpl->tpl_vars['v']->value['msg'];?>
</td>
                            </tr>
                        </table>
                    </div>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['loginInfo']->value['loginstatus'] == 1 && $_smarty_tpl->tpl_vars['relation']->value == true) {?>
                <form action="" method="POST">
                    评论内容：<br />
                    <textarea name="msg" cols="100" rows="10" style="border:2px solid #ddd;outline:none;font-size:16px;width:100%"></textarea>
                    <input type="button" id="submit-comment" value="发表评论" style="cursor:pointer;border:none; padding:10px 20px;background-color: #15AE2F;color:white;float:right"/>
                </form>
                <?php }?>
                <div class="clear"></div>

            </div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            $(document).ready( function () {
                $("#submit-comment").click(function(){
                    $.ajax({
                    url: "<?php ob_start();
echo $_smarty_tpl->tpl_vars['goodsInfo']->value['id'];
$_tmp2=ob_get_clean();
echo U(('Index/product/action/addmsg/id/').($_tmp2));?>
",
                    type: 'POST',
                    data:'msg='+$('textarea').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        location.reload();
                    }
                    });
                });
                $("#zan").click(function(){
                    $.ajax({
                    url: "<?php echo U('Index/zan');?>
",
                    type: 'GET',
                    data:'id=<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['id'];?>
',
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        $("#zan").html($("#zan").html()*1+1);
                    }
                    });
                });
                $(".decrement").click(function(){
                    $(".goodsCount").val($(".goodsCount").val()*1-1);
                    if($(".goodsCount").val()<1){
                        $(".goodsCount").val(1);
                    }
                });
                $(".increment").click(function(){
                    $(".goodsCount").val($(".goodsCount").val()*1+1);
                    if($(".goodsCount").val()><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['stock'];?>
){
                        $(".goodsCount").val(<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['stock'];?>
);
                        alert('已达到最大购买数量！');
                    }
                });
            });
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ('Index/include/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>