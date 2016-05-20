<?php /* Smarty version 3.1.27, created on 2016-03-21 19:22:48
         compiled from "template\Index\user-order.html" */ ?>
<?php
/*%%SmartyHeaderCode:2885356efd98843f5e8_99833574%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '187a3054d843f19dba74fb91f9b457a081a03460' => 
    array (
      0 => 'template\\Index\\user-order.html',
      1 => 1458559367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2885356efd98843f5e8_99833574',
  'variables' => 
  array (
    'orderList' => 0,
    'v' => 0,
    'orderGoodsList' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56efd988719380_57871914',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56efd988719380_57871914')) {
function content_56efd988719380_57871914 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2885356efd98843f5e8_99833574';
echo $_smarty_tpl->getSubTemplate ('Index/include/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="main">
            <div class="contentwrap">
                <div class="leftcon">
                    <ul>
                        <span>个人中心</span>
                        <li><a href="<?php echo U('index/user');?>
">个人信息</a></li>
                        <li><a href="<?php echo U('index/user/action/order');?>
" class="cur">我的订单</a></li>
                    </ul>
                    <ul>
                        <span>消息中心</span>
                        <li><a href="<?php echo U('index/error');?>
">评论通知</a></li>
                        <li><a href="<?php echo U('index/error');?>
">站内消息</a></li>
                    </ul>
                    <ul>
                        <span>售后服务</span>
                        <li><a href="<?php echo U('index/error');?>
">退货记录</a></li>
                        <li><a href="<?php echo U('index/error');?>
">换货记录</a></li>
                    </ul>
                </div>
                <div class="rightcon">
                    <form action="<?php echo U('index/user/action/save');?>
" method="POST" enctype="multipart/form-data">
                    <div class="con">
                        <?php if (count($_smarty_tpl->tpl_vars['orderList']->value) == 0) {?>
                            <div>暂无订单数据</div>
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['orderList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                        <table border="0" cellspacing="0" class="table-user-order" <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 3) {?>style="opacity:0.6"<?php }?>>
                            <thead>
                                <tr style="height:30px;color:#333;background-color: #eee;">
                                    <th style="width:80px;">订单号</th>
                                    <td style="width:220px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
</td>
                                    <th style="width:50px;">姓名</th>
                                    <td style="width:60px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['oname'];?>
</td>
                                    <th style="width:50px;">手机</th>
                                    <td style="width:100px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['phone'];?>
</td>
                                    <th style="width:50px;">地址</th>
                                    <td style="width:200px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</td>
                                    <th style="width:50px;">总价</th>
                                    <td style="width:50px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['allprice'];?>
</td>
                                    <th style="width:50px;">状态</th>
                                    <td style="width:100px;color:green;font-weight: bold">
                                    <input type="hidden" class="order_id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"/>
                                    <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 0) {?>未发货<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 1) {?>已发货<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 2) {?>已完成<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 3) {?>已失效<?php }?>
                                    </td>
                                    <td style="width:100px;">
                                    <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 0) {?>
                                    <a style="color:red;text-decoration: underline" href="javascript:void(0);" onclick="cancleOrder(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)">取消订单</a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 1) {?>
                                    <a style="color:red;text-decoration: underline" href="javascript:void(0);" onclick="comfirmOrder(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)">确认收货</a>
                                    <?php }?>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['orderGoodsList']->value[$_smarty_tpl->tpl_vars['v']->value['id']];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['g'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['g']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
$foreach_g_Sav = $_smarty_tpl->tpl_vars['g'];
?>
                                <tr style="height:50px">
                                    <td colspan="1"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['g']->value['id'];
$_tmp1=ob_get_clean();
echo U(('index/product/id/').($_tmp1));?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['g']->value['iname'];?>
" alt=""></a></td>
                                    <td colspan="6"><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['g']->value['id'];
$_tmp2=ob_get_clean();
echo U(('index/product/id/').($_tmp2));?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</a></td>
                                    <th colspan="1">单价：</th>
                                    <td colspan="1"><?php echo $_smarty_tpl->tpl_vars['g']->value['price'];?>
</td>
                                    <th colspan="2">数量：</th>
                                    <td colspan="1"><?php echo $_smarty_tpl->tpl_vars['g']->value['qty'];?>
</td>
                                    <td colspan="1">
                                    <?php if ($_smarty_tpl->tpl_vars['v']->value['ostatus'] == 2) {?>
                                    <a style="color:red;text-decoration: underline" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['g']->value['id'];
$_tmp3=ob_get_clean();
echo U(('index/product/id/').($_tmp3));?>
#msg">立即评价</a>
                                    <?php }?>
                                    </td>
                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['g'] = $foreach_g_Sav;
}
?>
                            </tbody>
                        </table>
                        <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                        <div class="clear"></div>
                    </div>

                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            function cancleOrder(id){
                if(confirm("确定要取消该订单吗？")){
                    $.ajax({
                    url: "<?php echo U('index/user/action/cancleorder');?>
",
                    type: 'GET',
                    data:'id='+id,
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        alert('取消订单成功!');
                        location.reload();
                    }
                    });
                }
            }
            function comfirmOrder(id){
                if(confirm("是否确认收货吗？")){
                    $.ajax({
                    url: "<?php echo U('index/user/action/comfirmorder');?>
",
                    type: 'GET',
                    data:'id='+id,
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        location.reload();
                    }
                    });
                }
            }
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ('Index/include/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>