<?php /* Smarty version 3.1.27, created on 2016-03-18 09:29:18
         compiled from "template\Admin\user.html" */ ?>
<?php
/*%%SmartyHeaderCode:822956eb59ee875f79_50410930%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02a62b4e297f1bf49b3f0e61d17f01df27730663' => 
    array (
      0 => 'template\\Admin\\user.html',
      1 => 1458264557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '822956eb59ee875f79_50410930',
  'variables' => 
  array (
    'userList' => 0,
    'pageInfo' => 0,
    'v' => 0,
    'groupList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56eb59ef0f80b5_00379514',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56eb59ef0f80b5_00379514')) {
function content_56eb59ef0f80b5_00379514 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '822956eb59ee875f79_50410930';
echo $_smarty_tpl->getSubTemplate ("Admin/include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<!-- 增加用户框 -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">添加用户</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="input-email" class="control-label">邮箱:</label>
            <input type="text" class="form-control" id="input-email">
          </div>
          <div class="form-group">
            <label for="input-username" class="control-label">用户名:</label>
            <input type="text" class="form-control" id="input-username">
          </div>
          <div class="form-group">
            <label for="input-password" class="control-label">密码:</label>
            <input type="text" class="form-control" id="input-password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-success" id="btn-addUser">添加</button>
      </div>
    </div>
  </div>
</div>
<!-- 增加用户组框 -->
<div class="modal fade" id="addGroupModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">添加用户组</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="input-groupname" class="control-label">用户组名:</label>
            <input type="text" class="form-control" id="input-groupname">
          </div>
          <div class="form-group">
            <label for="input-discount" class="control-label">折扣率:</label>
            <input type="text" class="form-control" id="input-discount">
          </div>
          <div class="form-group">
            <label for="input-minexp" class="control-label">最小经验:</label>
            <input type="text" class="form-control" id="input-minexp">
          </div>
          <div class="form-group">
            <label for="input-maxexp" class="control-label">最大经验:</label>
            <input type="text" class="form-control" id="input-maxexp">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="btn-addGroupClose">关闭</button>
        <button type="button" class="btn btn-success" id="btn-addGroup">添加</button>
      </div>
    </div>
  </div>
</div>
<!-- 修改用户组框 -->
<div class="modal fade" id="editGroupModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">编辑用户组</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="input-editgroupname" class="control-label">用户组名:</label>
            <input type="hidden" class="form-control" id="input-editgroupid">
            <input type="text" class="form-control" id="input-editgroupname">
          </div>
          <div class="form-group">
            <label for="input-editdiscount" class="control-label">折扣率:</label>
            <input type="text" class="form-control" id="input-editdiscount">
          </div>
          <div class="form-group">
            <label for="input-editminexp" class="control-label">最小经验:</label>
            <input type="text" class="form-control" id="input-editminexp">
          </div>
          <div class="form-group">
            <label for="input-editmaxexp" class="control-label">最大经验:</label>
            <input type="text" class="form-control" id="input-editmaxexp">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="btn-editGroupClose">关闭</button>
        <button type="button" class="btn btn-success" id="btn-editGroup">保存</button>
      </div>
    </div>
  </div>
</div>
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
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#userList" aria-controls="userList" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span> 用户</a></li>
                        <li role="presentation"><a href="#groupList" aria-controls="groupList" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-th-large"></span> 用户组</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!-- 用户 -->
                        <div role="tabpanel" class="tab-pane fade in active" id="userList">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-7">
                                                <a class="btn btn-success" data-toggle="modal" data-target="#addUserModal"><span class="glyphicon glyphicon-plus"></span> 添加用户</a>
                                                <a class="btn btn-info" id="btn-addranduser" href="<?php echo U('admin/addranduser');?>
" target="_blank"><span class="glyphicon glyphicon-plus"></span> 添加机器人</a>
                                                <?php if (count($_smarty_tpl->tpl_vars['userList']->value) > 0) {?>
                                                <a class="btn btn-primary" id="checkAllUser"><span class="glyphicon glyphicon-unchecked"></span> 全选</a>
                                                <a class="btn btn-danger" id="delAllUser"><span class="glyphicon glyphicon-trash"></span> 批量删除</a>
                                                <?php } else { ?>
                                                <a class="btn btn-primary disabled" id="checkAllUser"><span class="glyphicon glyphicon-unchecked"></span> 全选</a>
                                                <a class="btn btn-danger disabled" id="delAllUser"><span class="glyphicon glyphicon-trash"></span> 批量删除</a>
                                                <?php }?>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="col-md-2 control-input">
                                                    <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] != '' && $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'] != '') {?>
                                                    <a class="btn btn-default" href="<?php echo U('admin/user/page/1');?>
"><span class="glyphicon glyphicon-refresh"></span> 清空</a>
                                                    <?php }?>
                                                </div>
                                                <div class="col-md-3 control-input">
                                                    <select class="form-control" id="search">
                                                        <option value="username"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'username') {?>selected="selected"<?php }?>>用户名</option>
                                                        <option value="id"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'id') {?>selected="selected"<?php }?>>ID</option>
                                                        <option value="truename"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'truename') {?>selected="selected"<?php }?>>姓名</option>
                                                        <option value="moblie"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'moblie') {?>selected="selected"<?php }?>>电话</option>
                                                        <option value="telephone"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'telephone') {?>selected="selected"<?php }?>>手机</option>
                                                        <option value="email"<?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'email') {?>selected="selected"<?php }?>>email</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-7 control-input">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="搜索您想要的..." name="search" id="input-search" value="<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
">
                                                        <div class="input-group-btn">
                                                            <button class="btn btn-default" type="button" id="btn-search"><i class="glyphicon glyphicon-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <!-- 没有搜索,没有数据的情况 -->
                                                <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == '' && $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'] == '' && $_smarty_tpl->tpl_vars['pageInfo']->value['total'] == 0) {?>
                                                    <div id="tip" class="alert alert-warning alert-dismissible">暂无用户</div>
                                                <?php }?>
                                                <!-- 有搜索,没有数据的情况 -->
                                                <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] != '' && $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'] != '' && $_smarty_tpl->tpl_vars['pageInfo']->value['total'] == 0) {?>
                                                    <div id="tip" class="alert alert-warning alert-dismissible">暂无<strong>
                                                    <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'username') {?>
                                                    用户名
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'id') {?>
                                                    ID
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'truename') {?>
                                                    姓名
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'moblie') {?>
                                                    电话
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'telephone') {?>
                                                    手机
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['pageInfo']->value['search'] == 'email') {?>
                                                    邮箱
                                                    <?php }?>
                                                    </strong>为<strong> <?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
 </strong>的数据</div>
                                                <?php }?>
                                                <!-- 有数据的情况 -->
                                                <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['total'] != 0) {?>
                                                <table class="table table-striped table-condensed table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:20px" >#</th>
                                                            <th style="width:40px">ID</th>
                                                            <th style="width:120px">用户名</th>
                                                            <th style="width:100px" >用户组</th>
                                                            <th style="width:80px" >姓名</th>
                                                            <th style="width:50px">性别</th>
                                                            <th style="width:190px" >Email</th>
                                                            <th style="width:50px">积分</th>
                                                            <th style="width:50px">状态</th>
                                                            <th style="width:180px">注册日期</th>
                                                            <th style="width:110px">手机</th>
                                                            <th style="width:160px">操作</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['userList']->value;
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
                                                            <td><input type="checkbox" name="checklist[]" /></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['group_id'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['true_name'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sex'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['point'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['reg_time'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['telephone'];?>
</td>
                                                            <td>
                                                                <a class="btn btn-sm btn-success" href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];
$_tmp1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['id'];
$_tmp2=ob_get_clean();
echo U(((('admin/user/page/').($_tmp1)).('/action/edituser/id/')).($_tmp2));?>
"><span class="glyphicon glyphicon-edit"></span> 编辑</a>
                                                                <a class="btn btn-sm btn-danger btn-delUser" href="javascript:void(0);" ><span class="glyphicon glyphicon-remove"></span> 删除</a>
                                                            </td>
                                                        </tr>
                                                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                                <?php }?>
                                                    </tbody>
                                                </table>
                                                <!-- 有数据的情况 -->
                                                <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['total'] != 0) {?>
                                                <hr>
                                                共<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['pageCount'];?>
页，当前第<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];?>
页，本页显示<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['rows'];?>
条记录，共<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['total'];?>
条记录
                                                <nav>
                                                    <ul class="pagination pull-left">
                                                        <li>
                                                            <a href="<?php echo U('admin/user/page/1');?>
&search=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['search'];?>
&keywords=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
" aria-label="Previous"> <span class="glyphicon glyphicon-step-backward"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo U('admin/user/page/');
echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']-1;?>
&search=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['search'];?>
&keywords=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
" aria-label="Previous"> <span class="glyphicon glyphicon-chevron-left"></span>
                                                            </a>
                                                        </li>
                                                        <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['startBanner'] == '...') {?>
                                                            <li><a href="javascript:void(0);">...</a></li>
                                                        <?php }?>
                                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['total'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['total']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['name'] = 'total';
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pageInfo']->value['pageCount']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total']);
?>
                                                        <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1 == $_smarty_tpl->tpl_vars['pageInfo']->value['page']) {?>
                                                            <li class="active"><a href="javascript:void(0);"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
</a></li>
                                                        <?php } else { ?>
                                                            <?php if ((($_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1 >= $_smarty_tpl->tpl_vars['pageInfo']->value['start']) && ($_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1 <= $_smarty_tpl->tpl_vars['pageInfo']->value['end']))) {?>
                                                                <li><a href="<?php echo U('admin/user/page/');
echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
&search=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['search'];?>
&keywords=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
</a></li>
                                                            <?php }?>
                                                        <?php }?>
                                                    <?php endfor; endif; ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['pageInfo']->value['endBanner'] == '...') {?>
                                                            <li><a href="javascript:void(0);">...</a></li>
                                                        <?php }?>
                                                        <li>
                                                            <a href="<?php echo U('admin/user/page/');
echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']+1;?>
&search=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['search'];?>
&keywords=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
" aria-label="Next"> <span class="glyphicon glyphicon-chevron-right"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo U('admin/user/page/');
echo $_smarty_tpl->tpl_vars['pageInfo']->value['pageCount'];?>
&search=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['search'];?>
&keywords=<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['keywords'];?>
" aria-label="Next"> <span class="glyphicon glyphicon-step-forward"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="col-md-2 pull-left" style="margin:20px 0;">
                                                        <select class="form-control" id="select-gotoPage">
                                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['total'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['total']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['name'] = 'total';
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pageInfo']->value['pageCount']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total']);
?>
                                                            <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1 == $_smarty_tpl->tpl_vars['pageInfo']->value['page']) {?>
                                                                <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
" selected="selected"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
</option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['total']['index']+1;?>
</option>
                                                            <?php }?>
                                                        <?php endfor; endif; ?>
                                                        </select>
                                                    </div>
                                                    <button type="button" class="btn btn-default" style="margin:20px 0;" id="btn-gotoPage">走你</button>
                                                </nav>
                                                <?php }?><!-- 有数据的情况 END -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- 用户组 -->
                        <div role="tabpanel" class="tab-pane fade " id="groupList">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <a class="btn btn-success" data-toggle="modal" data-target="#addGroupModal"><span class="glyphicon glyphicon-plus"></span> 添加用户组</a>
                                                <button type="button" class="btn btn-primary" id="checkAllGroup"><span class="glyphicon glyphicon-unchecked"></span> 全选</button>
                                                <button type="button" class="btn btn-danger" id="delAllGroup"><span class="glyphicon glyphicon-trash"></span> 批量删除</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <table class="table table-striped table-condensed table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:20px">#</th>
                                                            <th style="width:40px">ID</th>
                                                            <th>组名</th>
                                                            <th>折扣率</th>
                                                            <th>最小经验</th>
                                                            <th>最大经验</th>
                                                            <th style="width:160px">操作</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
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
                                                        <tr>
                                                            <td><input type="checkbox" name="checklist[]" />
                                                            </td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['discount'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['minexp'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['maxexp'];?>
</td>
                                                            <td>
                                                                <button class="btn btn-sm btn-success btn-editGroupRun" type="button" data-toggle="modal" data-target="#editGroupModal"><span class="glyphicon glyphicon-edit"></span> 编辑</button>
                                                                <button class="btn btn-sm btn-danger btn-delGroup" type="button"><span class="glyphicon glyphicon-remove"></span> 删除</button>
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
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                

            </div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            (function($){
            $.getUrlParam
             = function(name)
            {
            var reg
             = new RegExp("(^|&)"+
             name +"=([^&]*)(&|$)");
            var r
             = window.location.search.substr(1).match(reg);
            if (r!=null) return unescape(r[2]); return null;
            }
            })(jQuery);


            if($.getUrlParam('tab')!=''){
                $("a[aria-controls='"+$.getUrlParam('tab')+"']").tab('show');
            }

            <!--
            $(document).ready( function () {
                //搜索
                $("#btn-search").click(function(){
                    location.href="<?php echo U('admin/user/page/1');?>
"+'&search='+$("#search").val()+'&keywords='+$("#input-search").val();
                });
                //搜索框回车
                $("#input-search").keydown(function(event){
                    if(event.keyCode ==13){
                        $("#btn-search").trigger("click");
                    }
                });
                //搜索框点击选中文字
                $("#input-search").click(function(){
                    $(this).select();
                });

                //走你
                $("#btn-gotoPage").click(function(){
                    location.href="<?php echo U('admin/user/page/');?>
"+$("#select-gotoPage").val()+'&search='+$("#search").val()+'&keywords='+$("#input-search").val();
                });

                //添加用户
                $("#btn-addUser").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/user/action/adduser');?>
",
                    type: 'POST',
                    data:'username='+$('#input-username').val()+
                         '&password='+$('#input-password').val()+
                         '&email='+$('#input-email').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        alert('添加成功!');
                        location.href="<?php echo U('admin/user/page/');?>
"+<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['pageCount']+1;?>
;
                    }
                    });
                });

                //删除用户
                $("#userList tbody .btn-delUser").click(function(){
                    if(confirm("确定要删除这条用户吗？")){
                        $("#userList tbody tr:eq("+$(".btn-delUser").index($(this))+")").fadeOut();
                        $.ajax({
                        url: "<?php echo U('Admin/user/action/deluser');?>
",
                        type: 'GET',
                        data:'id='+$("#userList tbody tr:eq("+$(".btn-delUser").index($(this))+") td:eq(1)").html(),
                        dataType: 'html',
                        timeout: 1000,
                        success: function(html){
                            location.href="<?php echo U('admin/user/page/');?>
"+<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page'];?>
;
                        }
                        });
                    }
                });

                //批量删除用户
                $("#delAllUser").click(function(){
                    if(confirm("确定要删除这些用户吗？")){
                        for(i=0;i<$("#userList input[type='checkbox']").length;i++){
                            if($("#userList input[type='checkbox']:eq("+i+")").prop("checked")==true){
                                $.ajax({
                                url: "<?php echo U('Admin/user/action/deluser');?>
",
                                type: 'GET',
                                data:'id='+$("tbody tr:eq("+i+") td:eq(1)").html(),
                                dataType: 'html',
                                timeout: 1000,
                                });
                            }
                        }
                        setTimeout(function(){
                            location.href="<?php echo U('admin/user/page/');?>
"+<?php echo $_smarty_tpl->tpl_vars['pageInfo']->value['page']+1;?>
;
                        }, 1000);
                    }
                });

                //用户全选or反选
                $("#checkAllUser").click(function(){
                    if($("#checkAllUser").prop("checked") == true){
                        $("#checkAllUser").prop("checked", false);
                        $("#checkAllUser span").attr("class", "glyphicon glyphicon-unchecked");
                        $("#userList input[type='checkbox']").prop("checked", false);
                    }else{
                        $("#checkAllUser").prop("checked", true);
                        $("#checkAllUser span").attr("class", "glyphicon glyphicon-check");
                        $("#userList input[type='checkbox']").prop("checked", true);
                    }
                });

                //=============用户组===============
                

                //添加用户组
                $("#btn-addGroup").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/user/action/addgroup');?>
",
                    type: 'POST',
                    data:'groupname='+$('#input-groupname').val()+
                         '&discount='+$('#input-discount').val()+
                         '&minexp='+$('#input-minexp').val()+
                         '&maxexp='+$('#input-maxexp').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        location.href="<?php echo U('admin/user/tab/groupList');?>
";
                    }
                    });
                });


                //删除用户组
                $("#groupList tbody .btn-delGroup").click(function(){
                    if(confirm("确定要删除这条用户组吗？")){
                        $("#groupList tbody tr:eq("+$(".btn-delGroup").index($(this))+")").fadeOut();
                        $.ajax({
                        url: "<?php echo U('Admin/user/action/delgroup');?>
",
                        type: 'GET',
                        data:'id='+$("#groupList tbody tr:eq("+$(".btn-delGroup").index($(this))+") td:eq(1)").html(),
                        dataType: 'html',
                        timeout: 1000,
                        success: function(html){
                            location.href="<?php echo U('admin/user/tab/groupList');?>
";
                        }
                        });
                    }
                });

                //批量删除用户组
                $("#delAllGroup").click(function(){
                    if(confirm("确定要删除这些用户组吗？")){
                        for(i=0;i<$("#groupList input[type='checkbox']").length;i++){
                            if($("#groupList input[type='checkbox']:eq("+i+")").prop("checked")==true){
                                $.ajax({
                                url: "<?php echo U('Admin/user/action/delgroup');?>
",
                                type: 'GET',
                                data:'id='+$("#groupList tbody tr:eq("+i+") td:eq(1)").html(),
                                dataType: 'html',
                                timeout: 1000,
                                });
                            }
                        }
                        setTimeout(function(){
                            location.href="<?php echo U('admin/user/tab/groupList');?>
";
                        }, 100);
                    }
                });


                //点击修改用户组
                $("#groupList .btn-editGroupRun").click(function(){
                    $("#editGroupModal #input-editgroupid").val($("#groupList tbody tr:eq("+$(".btn-editGroupRun").index($(this))+") td:eq(1)").html());
                    $("#editGroupModal #input-editgroupname").val($("#groupList tbody tr:eq("+$(".btn-editGroupRun").index($(this))+") td:eq(2)").html());
                    $("#editGroupModal #input-editdiscount").val($("#groupList tbody tr:eq("+$(".btn-editGroupRun").index($(this))+") td:eq(3)").html());
                    $("#editGroupModal #input-editminexp").val($("#groupList tbody tr:eq("+$(".btn-editGroupRun").index($(this))+") td:eq(4)").html());
                    $("#editGroupModal #input-editmaxexp").val($("#groupList tbody tr:eq("+$(".btn-editGroupRun").index($(this))+") td:eq(5)").html());
                });

                //保存用户组
                $("#btn-editGroup").click(function(){
                    $.ajax({
                    url: "<?php echo U('Admin/user/action/editgroup');?>
",
                    type: 'POST',
                    data:'groupname='+$('#input-editgroupname').val()+
                         '&discount='+$('#input-editdiscount').val()+
                         '&minexp='+$('#input-editminexp').val()+
                         '&maxexp='+$('#input-editmaxexp').val()+
                         '&id='+$('#input-editgroupid').val(),
                    dataType: 'html',
                    timeout: 1000,
                    success: function(html){
                        location.href="<?php echo U('admin/user/tab/groupList');?>
";
                    }
                    });
                });

                //用户组全选or反选
                $("#checkAllGroup").click(function(){
                    if($("#checkAllGroup").prop("checked") == true){
                        $("#checkAllGroup").prop("checked", false);
                        $("#checkAllGroup span").attr("class", "glyphicon glyphicon-unchecked");
                        $("#groupList input[type='checkbox']").prop("checked", false);
                    }else{
                        $("#checkAllGroup").prop("checked", true);
                        $("#checkAllGroup span").attr("class", "glyphicon glyphicon-check");
                        $("#groupList input[type='checkbox']").prop("checked", true);
                    }
                });

            })
            //-->
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>