<?php /* Smarty version 3.1.27, created on 2016-03-21 17:09:13
         compiled from "template\Admin\edituser.html" */ ?>
<?php
/*%%SmartyHeaderCode:2593756efba39b84854_79512917%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '427624789bf4d184b377c82f2c82a9135942d7d6' => 
    array (
      0 => 'template\\Admin\\edituser.html',
      1 => 1458551352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2593756efba39b84854_79512917',
  'variables' => 
  array (
    'page' => 0,
    'userInfo' => 0,
    'groupList' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56efba3a169599_31204202',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56efba3a169599_31204202')) {
function content_56efba3a169599_31204202 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2593756efba39b84854_79512917';
echo $_smarty_tpl->getSubTemplate ("Admin/include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="container maincontent">
            <div class="row">
                <div class="alert alert-success alert-dismissible fade in" id="saveOk" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="glyphicon glyphicon-ok"></span> 设置保存成功！
                </div>
                <div class="alert alert-danger alert-dismissible fade in" id="saveError" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <span class="glyphicon glyphicon-remove"></span> 设置保存失败！
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_tmp1=ob_get_clean();
echo U(('admin/user/page/').($_tmp1));?>
" class="btn btn-default" style="margin-bottom:10px" ><span class="glyphicon glyphicon-menu-left"></span> 返回</a>
                        <input type="hidden" id="formGroupInputId" name="id" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['id'];?>
"/>
                        <table class="table table-striped table-bordered table-condensed table-hover">
                            <tbody>
                                <tr>
                                    <th>用户名：</th>
                                    <td>
                                        <input class="normal" id="formGroupInputUsername" name="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
" alt="用户名不能为空" />
                                        <label>* 用户名称（必填）</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>邮箱：</th>
                                    <td>
                                        <input type="text" id="formGroupInputEmail" class="normal" name="email" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['email'];?>
" alt="邮箱错误" />
                                        <label>* 邮箱（必填）</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>密码：</th>
                                    <td>
                                        <input id="formGroupInputPassword" class="normal" name="password" type="password" />
                                        <label>登录密码</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>会员组：</th>
                                    <td>
                                        <select id="formGroupInputGroupid" class="normal" name="group_id">
                                        <?php
$_from = $_smarty_tpl->tpl_vars['groupList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                            <option value='<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
' <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['group_id'] == '{$v.id}') {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>姓名：</th>
                                    <td>
                                        <input id="formGroupInputTruename" class="normal" name="true_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['true_name'];?>
" />
                                        <label>真实姓名</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>性别：</th>
                                    <td>
                                        <select id="formGroupInputSex" name="sex">
                                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['sex'] == '0') {?> selected="selected" <?php }?>>女</option>
                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['sex'] == '1') {?> selected="selected" <?php }?>>男</option>
                                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['sex'] == '2') {?> selected="selected" <?php }?>>保密</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>电话：</th>
                                    <td>
                                        <input id="formGroupInputMoblie" class="normal" name="telephone" type="text" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['mobile'];?>
" alt="格式不正确 格式：（地区号-）用户号（-分机号）如010-66668888-123" />
                                        <label>格式：（地区号-）用户号（-分机号）如010-66668888-123</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>手机：</th>
                                    <td>
                                        <input id="formGroupInputTelephone" class="normal" name="mobile" type="text" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['telephone'];?>
" alt="格式不正确" />
                                        <label>手机号码</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>地区：</th>
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
                                    <th>地址：</th>
                                    <td>
                                        <input id="formGroupInputAddress" class="normal" name="contact_addr" type="text" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['address'];?>
" />
                                        <label>联系地址</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>邮编：</th>
                                    <td>
                                        <input id="formGroupInputZip" class="normal" name="zip" type="text" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['zip'];?>
" empty pattern="zip" alt="格式不正确（6位数字）" />
                                        <label>邮政编码</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>QQ：</th>
                                    <td>
                                        <input id="formGroupInputQq" class="normal" name="qq" type="text" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['qq'];?>
" empty pattern="qq" alt="格式不正确" />
                                        <label>QQ号码</label>
                                    </td>
                                </tr>
                                <tr>
                                    <th>经验值：</th>
                                    <td>
                                        <input id="formGroupInputExp" class="normal" name="exp" type="text" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['exp'];?>
" />
                                    </td>
                                </tr>
                                <tr>
                                    <th>积分：</th>
                                    <td>
                                        <input id="formGroupInputPoint" class="normal" name="point" type="text" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['point'];?>
" />
                                    </td>
                                </tr>
                                <tr>
                                    <th>状态：</th>
                                    <td>
                                        <select id="formGroupInputStatus" name="status">
                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['status'] == '1') {?> selected="selected" <?php }?>>正常</option>
                                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['userInfo']->value['status'] == '0') {?> selected="selected" <?php }?>>锁定</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <button type="reset" class="btn btn-default">重置</button>
                                        <button type="button" class="btn btn-default" id="btn-save">保存设置</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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



                $('#btn-save').click ( function () {
                    $.ajax({
                    url: "<?php echo U('Admin/save/action/userinfo');?>
",
                    type: 'POST',
                    data:'id='+$('#formGroupInputId').val()+
                         '&username='+$('#formGroupInputUsername').val()+
                         '&email='+$('#formGroupInputEmail').val()+
                         '&password='+$('#formGroupInputPassword').val()+
                         '&group_id='+$('#formGroupInputGroupid').val()+
                         '&true_name='+$('#formGroupInputTruename').val()+
                         '&sex='+$('#formGroupInputSex').val()+
                         '&telephone='+$('#formGroupInputTelephone').val()+
                         '&mobile='+$('#formGroupInputMoblie').val()+
                         '&province='+$('#formGroupInputProvince').val()+
                         '&city='+$('#formGroupInputCity').val()+
                         '&area='+$('#formGroupInputArea').val()+
                         '&address='+$('#formGroupInputAddress').val()+
                         '&zip='+$('#formGroupInputZip').val()+
                         '&qq='+$('#formGroupInputQq').val()+
                         '&exp='+$('#formGroupInputExp').val()+
                         '&point='+$('#formGroupInputPoint').val()+
                         '&status='+$('#formGroupInputStatus').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        if(html=='1'){
                            $('body,html').animate({
                                scrollTop:0
                            },1000); 
                            $('#saveOk').slideToggle("slow");
                            setTimeout(function () { 
                                $('#saveOk').slideToggle("slow");
                            }, 2000);
                        }else{
                            $('body,html').animate({
                                scrollTop:0
                            },1000); 
                            $('#saveError').slideToggle("slow");
                            setTimeout(function () { 
                                $('#saveError').slideToggle("slow");
                            }, 2000);
                        }
                    }
                    });
                });

            });
            //-->
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>