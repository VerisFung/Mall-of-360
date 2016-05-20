<?php /* Smarty version 3.1.27, created on 2016-03-22 13:02:11
         compiled from "template\Index\order.html" */ ?>
<?php
/*%%SmartyHeaderCode:1249256f0d1d3eb9af6_07524968%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dd9367ac5bdd00d8ac2c7087f279eba95bdc4f1' => 
    array (
      0 => 'template\\Index\\order.html',
      1 => 1458622931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1249256f0d1d3eb9af6_07524968',
  'variables' => 
  array (
    'userInfo' => 0,
    'cartList' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f0d1d41a8be0_29542069',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f0d1d41a8be0_29542069')) {
function content_56f0d1d41a8be0_29542069 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1249256f0d1d3eb9af6_07524968';
echo $_smarty_tpl->getSubTemplate ('Index/include/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <form action="<?php echo U('index/order/action/submit');?>
" method="POST">
        <div class="main">
            <div class="contentwrap">
                <div class="title">收货地址 <span style="color:red;font-size:14px;">温馨提示：为了保证您的权益，防止黄牛倒卖，订单进入正在配货状态将不能修改收货地址和发票信息！</span></div>
                <div class="con">
                    姓名：<input type="text" name="oname" id="" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['true_name'];?>
" required/>
                    手机：<input type="text" name="phone" id="" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['telephone'];?>
" required/>
                    地区：
                    <select id="formGroupInputProvince">
                        <option value="0">请选择</option>
                    </select>
                    <input type="hidden" id="input-province" name="province" value=""/>
                    <select id="formGroupInputCity" name="city">
                        <option value="0">请选择</option>
                    </select>
                    <input type="hidden" id="input-city" name="city" value=""/>
                    <select id="formGroupInputArea" name="area">
                        <option value="0">请选择</option>
                    </select>
                    <input type="hidden" id="input-area" name="area" value=""/>
                    地址：<input type="text" name="address" id="" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['address'];?>
" required/>
                    
                    <!-- <a href="#" class="newadd"></a> -->
                </div>
                <div class="con" style="margin-top:20px;">
                    <span><b>支付方式</b></span>
                    <div class="split"></div>
                    <input type="radio" name="" id="" checked/>在线支付
                </div>
                <div class="con" style="margin-top:20px;">
                    <span><b>配送方式</b></span>
                    <div class="split"></div>
                    <input type="radio" name="" id="" checked />免费配送
                </div>
                <div class="con" style="margin-top:20px;">
                    <span><b>发票信息</b></span>
                    <div class="split"></div>
                    <input type="radio" name="" id="" checked />不开发票
                    <input type="radio" name="" id="" />普通发票
                </div>
                <div class="con" style="margin-top:20px;">
                    <span><b>商品清单</b></span>
                    <div class="split"></div>
                    <div class="hd">
                        <div class="col1">商品信息</div>
                        <div class="col2">单价</div>
                        <div class="col3">数量</div>
                        <div class="col4">合计</div>
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
                                        x<?php echo $_smarty_tpl->tpl_vars['v']->value['num'];?>

                                </div>
                                <div class="r4"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['price']*$_smarty_tpl->tpl_vars['v']->value['num'];?>
</span>元</div>
                            </div>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                        </div>
                    </div>
                    <div class="pay"> 商品总计：<span></span>元</div>
                    <input type="hidden" id="allprice" name="allprice" value=""/>
                    <div class="split"></div>
                    <!-- <p align="right">寄送至：<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['address'];?>
</p> -->
                    <!-- <p align="right"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['true_name'];?>
 (收件人) <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['telephone'];?>
</p> -->
                    <br>
                    <div class="btn">
                        <button type="submit" style="cursor: pointer" class="b2">立即下单</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <?php echo '<script'; ?>
 type="text/javascript">



                var str='<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['area'];?>
';
                arr=str.split(',');
                province =arr[0];
                city     =arr[1];
                area     =arr[2];
                if(province!=0 && city!=0 && area!=0){
                    $.ajax({
                    url: "<?php echo U('Api/getareas');?>
",
                    type: 'GET',
                    data:'areas_id=0',
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        data=JSON.parse(html);
                        $.each(data, function(value,name){     
                            if(value==province){
                                $('#formGroupInputProvince').append("<option value='"+value+"' selected='selected'>"+name+"</option>");
                                $("#input-province").val(name);
                            } else{
                                $('#formGroupInputProvince').append("<option value='"+value+"'>"+name+"</option>");
                            }
                        });   
                    }
                    });

                    $.ajax({
                    url: "<?php echo U('Api/getareas');?>
",
                    type: 'GET',
                    data:'areas_id='+province,
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        data=JSON.parse(html);
                        $.each(data, function(value,name){     
                            if(value==city){
                                $('#formGroupInputCity').append("<option value='"+value+"' selected='selected'>"+name+"</option>");
                                $("#input-city").val(name);
                            } else{
                                $('#formGroupInputCity').append("<option value='"+value+"'>"+name+"</option>");
                            }
                        });   
                    }
                    });

                    $.ajax({
                    url: "<?php echo U('Api/getareas');?>
",
                    type: 'GET',
                    data:'areas_id='+city,
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        data=JSON.parse(html);
                        $.each(data, function(value,name){     
                            if(value==area){
                                $('#formGroupInputArea').append("<option value='"+value+"' selected='selected'>"+name+"</option>");
                                $("#input-area").val(name);
                            } else{
                                $('#formGroupInputArea').append("<option value='"+value+"'>"+name+"</option>");
                            }
                        });   
                    }
                    });
                }else{
                    $.ajax({
                    url: "<?php echo U('Api/getareas');?>
",
                    type: 'GET',
                    data:'areas_id=0',
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        data=JSON.parse(html);
                        $.each(data, function(value,name){     
                            $('#formGroupInputProvince').append("<option value='"+value+"'>"+name+"</option>");
                        });   
                    }
                    });
                }

            <!--
            $(document).ready( function () {

                $('#formGroupInputProvince').change(function(){
                    $("#input-province").val($('#formGroupInputProvince').find("option:selected").text());
                    $.ajax({
                    url: "<?php echo U('Api/getareas');?>
",
                    type: 'GET',
                    data:'areas_id='+$(this).val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        $('#formGroupInputCity').html('<option value="0">请选择</option>');
                        $('#formGroupInputArea').html('<option value="0">请选择</option>');
                        data=JSON.parse(html);
                        $.each(data, function(value,name){    
                            $('#formGroupInputCity').append("<option value='"+value+"'>"+name+"</option>"); 
                        });   
                    }
                    });
                });
                $('#formGroupInputCity').change(function(){
                    $("#input-city").val($('#formGroupInputCity').find("option:selected").text());
                    $.ajax({
                    url: "<?php echo U('Api/getareas');?>
",
                    type: 'GET',
                    data:'areas_id='+$(this).val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        $('#formGroupInputArea').html('<option value="0">请选择</option>');
                        data=JSON.parse(html);
                        $.each(data, function(value,name){      
                            $('#formGroupInputArea').append("<option value='"+value+"'>"+name+"</option>");
                        });   
                    }
                    });
                });
                $('#formGroupInputArea').change(function(){
                    $("#input-area").val($('#formGroupInputArea').find("option:selected").text());
                });

                cartSum();
                function cartSum(){
                    sum=0;
                    count=$(".r4 span").length;
                    for(i=0;i<count;i++){
                        sum+=$(".r4 span:eq("+i+")").html()*1;
                    }
                    $(".pay span").html(sum);
                    $("#allprice").val(sum);
                }
            });
        <?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ('Index/include/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>