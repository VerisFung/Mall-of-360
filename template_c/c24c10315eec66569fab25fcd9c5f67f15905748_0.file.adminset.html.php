<?php /* Smarty version 3.1.27, created on 2016-03-17 09:10:44
         compiled from "template\Admin\adminset.html" */ ?>
<?php
/*%%SmartyHeaderCode:77556ea0414b7c822_32583008%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c24c10315eec66569fab25fcd9c5f67f15905748' => 
    array (
      0 => 'template\\Admin\\adminset.html',
      1 => 1458177044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77556ea0414b7c822_32583008',
  'variables' => 
  array (
    'adminInfo' => 0,
    'adminList' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ea0414d2a370_33564132',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ea0414d2a370_33564132')) {
function content_56ea0414d2a370_33564132 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '77556ea0414b7c822_32583008';
echo $_smarty_tpl->getSubTemplate ("Admin/include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- 添加一级分类 -->
<div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">添加管理员</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="input-username" class="control-label">用户名:</label>
            <input type="text" class="form-control" id="input-username">
          </div>
          <div class="form-group">
            <label for="input-password" class="control-label">密码:</label>
            <input type="password" class="form-control" id="input-password">
          </div>
          <div class="form-group">
            <label for="input-email" class="control-label">邮箱:</label>
            <input type="email" class="form-control" id="input-email">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="btn-addAdminClose">关闭</button>
        <button type="button" class="btn btn-success" id="btn-addAdmin">添加</button>
      </div>
    </div>
  </div>
</div>
        <div class="container-fluid maincontent">
          <div class="row">
              <div class="col-md-12">
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-12">
                            <?php if ($_smarty_tpl->tpl_vars['adminInfo']->value['level'] != 255) {?>
                              <div class="alert alert-warning" role="alert">您是普通管理员没有权限添加或删除其他管理员</div>
                            <?php } else { ?>
                              <a class="btn btn-info" data-toggle="modal" data-target="#addAdminModal"><span class="glyphicon glyphicon-plus"></span> 添加管理员</a>
                            <?php }?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <table class="table table-striped table-condensed table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:40px">ID</th>
                                        <th style="width:160px">用户名</th>
                                        <th>email</th>
                                        <th>上一次登录时间</th>
                                        <th>上一次登录IP</th>
                                        <th>角色</th>
                                        <th style="width:100px">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['adminList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
                                        <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['last_time']);?>
</td>
                                        <td>
                                          <?php if ($_smarty_tpl->tpl_vars['v']->value['last_ip'] == '::1') {?>
                                            127.0.0.1
                                          <?php } else { ?>
                                            $v.last_ip
                                          <?php }?>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == $_smarty_tpl->tpl_vars['adminInfo']->value['id'] || $_smarty_tpl->tpl_vars['adminInfo']->value['level'] != 255 || $_smarty_tpl->tpl_vars['v']->value['role_level'] == 255) {?>
                                            <a class="btn btn-sm btn-danger btn-delAdmin disabled" href="javascript:void(0);" admin-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><span class="glyphicon glyphicon-remove"></span> 删除</a>
                                            <?php } else { ?>
                                            <a class="btn btn-sm btn-danger btn-delAdmin" href="javascript:void(0);" admin-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><span class="glyphicon glyphicon-remove"></span> 删除</a>
                                            <?php }?>
                                        </td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            <!--
            $(document).ready( function () {
                //添加管理员
                $("#btn-addAdmin").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/adminset/action/addadmin');?>
",
                    type: 'POST',
                    data:'username='+$('#input-username').val()+
                         '&password='+$('#input-password').val()+
                         '&email='+$('#input-email').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        // alert('添加成功!');
                        location.reload();
                    }
                    });
                });
                //删除管理员
                $(".btn-delAdmin").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/adminset/action/deladmin');?>
",
                    type: 'GET',
                    data:'adminid='+$(this).attr("admin-id"),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        // alert('添加成功!');
                        location.reload();
                    }
                    });
                });
            })
            //-->
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>