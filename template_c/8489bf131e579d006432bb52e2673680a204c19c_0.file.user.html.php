<?php /* Smarty version 3.1.27, created on 2016-03-21 18:38:47
         compiled from "template\Index\user.html" */ ?>
<?php
/*%%SmartyHeaderCode:251756efcf375b8335_81589331%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8489bf131e579d006432bb52e2673680a204c19c' => 
    array (
      0 => 'template\\Index\\user.html',
      1 => 1458556726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251756efcf375b8335_81589331',
  'variables' => 
  array (
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56efcf3781fdf0_94058798',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56efcf3781fdf0_94058798')) {
function content_56efcf3781fdf0_94058798 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '251756efcf375b8335_81589331';
echo $_smarty_tpl->getSubTemplate ('Index/include/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="main">
            <div class="contentwrap">
                <div class="leftcon">
                    <ul>
                        <span>个人中心</span>
                        <li><a href="<?php echo U('index/user');?>
" class="cur">个人信息</a></li>
                        <li><a href="<?php echo U('index/user/action/order');?>
">我的订单</a></li>
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
                        <div class="left">
                            <?php if (file_exists($_smarty_tpl->tpl_vars['userInfo']->value['avatar'])) {?>
                            <a href="javascript:void(0);" onclick="file.click()"><img width="150px" src="<?php echo TPL_PATH;?>
/Index/images/tx.png" alt=""></a>
                            <?php } else { ?>
                            <a href="javascript:void(0);" onclick="file.click()"><img width="150px" src="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['avatar'];?>
" alt=""></a>
                            <?php }?>
                            <input class="btn btn-success" style="display:none" id="file" type="file" name="file">
                        </div>
                        <div class="right">
                                <table height='300px' width='600px' style="margin-left:20px;">
                                    <tr>
                                        <td>姓名:</td>
                                        <td><input type="text" name="true_name" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['true_name'];?>
"/></td>
                                    </tr>
                                    <tr>
                                        <td>360账号:</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
</td>
                                    </tr>
                                    <tr>
                                        <td>新密码:</td>
                                        <td><input type="password" name="password" id="" /></td>
                                    </tr>
                                    <tr>
                                        <td>用户组:</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['group_id'];?>
</td>
                                    </tr>
                                    <tr>
                                        <td>积分:</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['point'];?>
</td>
                                    </tr>
                                    <tr>
                                        <td>经验:</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['exp'];?>
</td>
                                    </tr>
                                    <tr>
                                        <td>安全邮箱:</td>
                                        <td><input type="text" name="email" id="" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['email'];?>
"/></td>
                                    </tr>
                                    <tr>
                                        <td>安全手机:</td>
                                        <td><input type="text" name="telephone" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['telephone'];?>
" id="" /></td>
                                    </tr>
                                    <tr>
                                        <td>性别:</td>
                                        <td>
                                            <select id="formGroupInputSex" name="sex">
                                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['sex'] == '女') {?> selected="selected" <?php }?>>女</option>
                                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['sex'] == '男') {?> selected="selected" <?php }?>>男</option>
                                                <option value="2" <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['sex'] == '保密') {?> selected="selected" <?php }?>>保密</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>城市地区:</td>
                                        <td>
                                            <select id="formGroupInputProvince" name="province">
                                                <option value="0">请选择</option>
                                            </select>
                                            <select id="formGroupInputCity" name="city">
                                                <option value="0">请选择</option>
                                            </select>
                                            <select id="formGroupInputArea" name="area">
                                                <option value="0">请选择</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>详细地址：</td>
                                        <td>
                                            <input type="text" name="address" id="" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['address'];?>
"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button type="submit">保存</button>
                                            <!-- <button type="button">取消</button> -->
                                        </td>
                                    </tr>
                                </table>
                        </div>
                        <div class="clear"></div>
                    </div>

                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <?php echo '<script'; ?>
 type="text/javascript">
                province =<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['province'];?>
;
                city     =<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['city'];?>
;
                area     =<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['area'];?>
;
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


            });
            //-->
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ('Index/include/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>