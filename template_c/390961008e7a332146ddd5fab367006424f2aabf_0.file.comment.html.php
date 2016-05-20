<?php /* Smarty version 3.1.27, created on 2016-03-22 13:14:13
         compiled from "template\Admin\comment.html" */ ?>
<?php
/*%%SmartyHeaderCode:1203956f0d4a55ef2b4_12707758%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '390961008e7a332146ddd5fab367006424f2aabf' => 
    array (
      0 => 'template\\Admin\\comment.html',
      1 => 1458623652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1203956f0d4a55ef2b4_12707758',
  'variables' => 
  array (
    'commentList' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f0d4a57730f5_79972233',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f0d4a57730f5_79972233')) {
function content_56f0d4a57730f5_79972233 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1203956f0d4a55ef2b4_12707758';
echo $_smarty_tpl->getSubTemplate ("Admin/include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="container-fluid maincontent">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <!-- 有数据的情况 -->
                                                <table class="table table-striped table-condensed table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:20px" >#</th>
                                                            <th style="width:300px" >商品名称</th>
                                                            <th style="width:40px">头像</th>
                                                            <th style="width:40px">ID</th>
                                                            <th style="width:70px">姓名</th>
                                                            <th>评论</th>
                                                            <th style="width:180px">发表时间</th>
                                                            <th style="width:100px">操作</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['commentList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                                        <tr style="height:50px">
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                                                            <td><a href="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];
$_tmp1=ob_get_clean();
echo U(('index/product/id/').($_tmp1));?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></td>
                                                            <td><img width="64px" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['avatar'];?>
" alt=""></td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['true_name'];?>
</td>
                                                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['msg'];?>
</td>
                                                            <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['uptime']);?>
</td>
                                                            <td><button type="button" onclick="delComment(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)" class="btn btn-danger">删除</button></td>
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
            </div>
        <?php echo '<script'; ?>
 type="text/javascript">
            <!--
            function delComment(id){
                $.ajax({
                url: "<?php echo U('Admin/comment/action/del');?>
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
            //-->
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>