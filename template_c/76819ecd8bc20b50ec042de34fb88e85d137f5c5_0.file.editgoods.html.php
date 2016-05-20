<?php /* Smarty version 3.1.27, created on 2016-03-20 16:06:00
         compiled from "template\Admin\editgoods.html" */ ?>
<?php
/*%%SmartyHeaderCode:2897056ee59e86e0ae6_88666033%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76819ecd8bc20b50ec042de34fb88e85d137f5c5' => 
    array (
      0 => 'template\\Admin\\editgoods.html',
      1 => 1458461159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2897056ee59e86e0ae6_88666033',
  'variables' => 
  array (
    'page' => 0,
    'goodsInfo' => 0,
    'classifyList' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ee59e8969897_62640847',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ee59e8969897_62640847')) {
function content_56ee59e8969897_62640847 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2897056ee59e86e0ae6_88666033';
echo $_smarty_tpl->getSubTemplate ("Admin/include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="container maincontent">
            <div class="row">
                <form action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_tmp1=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['goodsInfo']->value['id'];
$_tmp2=ob_get_clean();
echo U(((('Admin/goods/action/updategoods/page/').($_tmp1)).('/id/')).($_tmp2));?>
" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <a href="javascript:history.back(-1);" class="btn btn-default"><span class="glyphicon glyphicon-menu-left"></span> 返回</a>
                            <button type="submit" class="btn btn-default" id="btn-save">保存编辑</button>
                            <table  style="margin-top:10px" class="table table-striped table-bordered table-condensed table-hover">
                                <tbody>
                                    <tr>
                                        <th>商品名称：</th>
                                        <td>
                                            <input class="normal" name="name" id="formGroupInputName" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['gname'];?>
"/>
                                            <label>* 商品名称（必填）</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>商品描述：</th>
                                        <td>
                                            <textarea name="desc" id="formGroupInputDesc" rows="5" cols="30"><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['description'];?>
</textarea>
                                            <label></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>商品分类：</th>
                                        <td>
                                            <select name="class" id="formGroupInputClass" class="normal">
                                            <?php
$_from = $_smarty_tpl->tpl_vars['classifyList']->value;
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
' <?php if ($_smarty_tpl->tpl_vars['v']->value['id'] == $_smarty_tpl->tpl_vars['goodsInfo']->value['class_id']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
                                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                            </select>
                                            <label><a href="<?php echo U('admin/classify');?>
" target="_blank">添加分类</a></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>商品单价：</th>
                                        <td>
                                            <input name="price" id="formGroupInputPrice" class="normal" type="text" value="<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['price'];?>
" />
                                            <label></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>商品积分：</th>
                                        <td>
                                            <input name="point" id="formGroupInputPoint" class="normal" type="Number" value="<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['point'];?>
" />
                                            <label>（用户购买商品后所获得的积分）</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>商品库存：</th>
                                        <td>
                                            <input name="stock" id="formGroupInputStock" class="normal" type="Number" value="<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['stock'];?>
" />
                                            <label></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>商品封面：</th>
                                        <td>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['image'];?>
" alt="">
                                            <input type="file" name="file" id="formGroupInputImage" />
                                            <label></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>是否新品：</th>
                                        <td>
                                            <select name="isnew" id="formGroupInputIsNew" class="normal" name="group_id">
                                                <option value='0' <?php if ($_smarty_tpl->tpl_vars['goodsInfo']->value['isnew'] == 0) {?>selected="selected"<?php }?>>否</option>
                                                <option value='1' <?php if ($_smarty_tpl->tpl_vars['goodsInfo']->value['isnew'] == 1) {?>selected="selected"<?php }?>>是</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>是否热销：</th>
                                        <td>
                                            <select name="ishot" id="formGroupInputIsHot" class="normal" name="group_id">
                                                <option value='0' <?php if ($_smarty_tpl->tpl_vars['goodsInfo']->value['ishot'] == 0) {?>selected="selected"<?php }?>>否</option>
                                                <option value='1' <?php if ($_smarty_tpl->tpl_vars['goodsInfo']->value['ishot'] == 1) {?>selected="selected"<?php }?>>是</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>状态：</th>
                                        <td>
                                            <select name="status" id="formGroupInputStatus" class="normal" name="group_id">
                                                <option value='0' <?php if ($_smarty_tpl->tpl_vars['goodsInfo']->value['status'] == 0) {?>selected="selected"<?php }?>>下架</option>
                                                <option value='1' <?php if ($_smarty_tpl->tpl_vars['goodsInfo']->value['status'] == 1) {?>selected="selected"<?php }?>>上架</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>商品内容：</th>
                                        <td>
                                            <!-- 加载编辑器的容器 -->
                                            <?php echo '<script'; ?>
 id="formGroupInputContent" name="content" type="text/plain"><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['content'];?>
<?php echo '</script'; ?>
>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-default" id="btn-save">保存编辑</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- 配置文件 -->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo TPL_PATH;?>
/Admin/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
        <!-- 编辑器源码文件 -->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo TPL_PATH;?>
/Admin/ueditor/ueditor.all.js"><?php echo '</script'; ?>
>
        <!-- 实例化编辑器 -->
        <?php echo '<script'; ?>
 type="text/javascript">
            var ue = UE.getEditor('formGroupInputContent');
        <?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>