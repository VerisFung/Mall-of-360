<?php /* Smarty version 3.1.27, created on 2016-03-21 14:56:15
         compiled from "template\Index\shopcart.html" */ ?>
<?php
/*%%SmartyHeaderCode:432256ef9b0f145fc5_15628583%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8bd4902680a48a7fdf9fd2afe1e002ad920a650' => 
    array (
      0 => 'template\\Index\\shopcart.html',
      1 => 1458543374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '432256ef9b0f145fc5_15628583',
  'variables' => 
  array (
    'cartList' => 0,
    'k' => 0,
    'v' => 0,
    'loginInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ef9b0f395af9_31256122',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ef9b0f395af9_31256122')) {
function content_56ef9b0f395af9_31256122 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '432256ef9b0f145fc5_15628583';
echo $_smarty_tpl->getSubTemplate ('Index/include/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="main">
            <div class="contentwrap">
                <div class="title">我的购物车</div>

                <?php if (count($_smarty_tpl->tpl_vars['cartList']->value) == 0) {?>
                    <div style="height:320px;line-height:250px;font-size: 48px;text-align:center">购物车空空如也，立即<a style="color:#5CAB00" href="<?php echo U('index/allproduct');?>
">买买买！！</a></div>
                <?php } else { ?>
                <div class="con">
                    <div class="hd">
                        <div class="col1">商品信息</div>
                        <div class="col2">单价</div>
                        <div class="col3">数量</div>
                        <div class="col4">小计</div>
                        <div class="col5">操作</div>
                    </div>
                    <div class="bd">
                        <div class="wrap_row">
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
                            <div class="row">
                                <div class="r1">
                                    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['k']->value;
$_tmp1=ob_get_clean();
echo U(('index/product/id/').($_tmp1));?>
" target="_blank"><img class="item-img" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"></a>
                                    <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['k']->value;
$_tmp2=ob_get_clean();
echo U(('index/product/id/').($_tmp2));?>
" target="_blank"><span class="item-name"><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</span></a>
                                </div>
                                <div class="r2"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</span>元</div>
                                <div class="r3">
                                    <div class="gcIpt">
                                        <a href="javascript:void(0);" class="decrement"></a>
                                        <input type="text" class="goodsCount" disabled="" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>
">
                                        <input type="hidden" class="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                                        <input type="hidden" class="stock" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['stock'];?>
">
                                        <a href="javascript:void(0);" class="increment"></a>
                                    </div>
                                    <div class="errTip">已达到最大购买数量</div>
                                </div>
                                <div class="r4"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['price']*$_smarty_tpl->tpl_vars['v']->value['num'];?>
</span>元</div>
                                <div class="r5"><a href="javascript:void(0);" class="delOrder">删除</a>
                                </div>
                            </div>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                        </div>
                            <?php if (!empty($_smarty_tpl->tpl_vars['cartList']->value)) {?>
                            <a href="javascript:void(0);" id="btn-delCartAll" style="margin-top:15px;float:left">清空购物车</a>
                            <?php }?>
                    </div>
                    <div class="pay"> 商品总计：<span></span>元</div>
                    <div class="btn">
                        <a href="javascript:history.back(-1);" class="b1">继续购物</a>
                    <?php if ($_smarty_tpl->tpl_vars['loginInfo']->value['loginstatus'] == 0) {?>
                        <a href="javascript:void(0)" onclick="userFrame('login','show')" class="b2">去结算</a>
                    <?php } else { ?>
                        <a href="<?php echo U('index/order');?>
" class="b2">去结算</a>
                    <?php }?>
                    </div>
                </div>

                <?php }?>
            </div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            <!--
            $(document).ready( function () {
                cartSum();
                function cartSum(){
                    sum=0;
                    count=$(".r4 span").length;
                    for(i=0;i<count;i++){
                        sum+=$(".r4 span:eq("+i+")").html()*1;
                    }
                    $(".pay span").html(sum);
                    if(count==0){
                        $(".b2").hide();
                        $("#btn-delCartAll").hide();
                    }else{
                        $(".b2").show();
                        $("#btn-delCartAll").show();
                    }
                }


                $(".decrement").click(function(){
                    i=$(".decrement").index($(this));
                    goods_id=$(".goods_id:eq("+i+")").val();
                    $(".goodsCount:eq("+i+")").val($(".goodsCount:eq("+i+")").val()*1-1);
                    if($(".goodsCount:eq("+i+")").val()<1){
                        $(".goodsCount:eq("+i+")").val(1);
                    }
                    price=$(".r2 span:eq("+i+")").html();
                    num=$(".goodsCount:eq("+i+")").val();
                    setCart(goods_id,num);
                    $(".r4 span:eq("+i+")").html(price*num);
                    cartSum();
                });

                $(".increment").click(function(){
                    i=$(".increment").index($(this));
                    goods_id=$(".goods_id:eq("+i+")").val();
                    $(".goodsCount:eq("+i+")").val($(".goodsCount:eq("+i+")").val()*1+1);
                    if($(".goodsCount:eq("+i+")").val()>$(".stock:eq("+i+")").val()){
                        $(".goodsCount:eq("+i+")").val($(".stock:eq("+i+")").val());
                        alert('已达到最大购买数量！');
                    }
                    price=$(".r2 span:eq("+i+")").html();
                    num=$(".goodsCount:eq("+i+")").val();
                    setCart(goods_id,num);
                    $(".r4 span:eq("+i+")").html(price*num);
                    cartSum();
                });

                $(".delOrder").click(function(){
                    i=$(".delOrder").index($(this));
                    goods_id=$(".goods_id:eq("+i+")").val();
                    $(".row:eq("+i+")").fadeOut();
                    $.ajax({
                    url: "<?php echo U('Index/shopcart/action/del');?>
",
                    type: 'GET',
                    data:'id='+goods_id,
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        $(".row:eq("+i+")").remove();
                        cartSum();
                    }
                    });
                });

                $("#btn-delCartAll").click(function(){
                    count=$(".row").length;
                    // alert(count);
                    for(i=count-1;i>=0;i--){
                        goods_id=$(".goods_id:eq("+i+")").val();
                        $.ajax({
                        url: "<?php echo U('Index/shopcart/action/del');?>
",
                        type: 'GET',
                        data:'id='+goods_id,
                        dataType: 'html',
                        timeout: 1000,
                        });
                        $(".row:eq("+i+")").remove();
                    }
                    cartSum();
                });
            });
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ('Index/include/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>