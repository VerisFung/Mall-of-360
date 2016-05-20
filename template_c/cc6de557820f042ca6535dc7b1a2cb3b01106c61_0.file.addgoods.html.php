<?php /* Smarty version 3.1.27, created on 2016-03-20 11:35:29
         compiled from "template\Admin\addgoods.html" */ ?>
<?php
/*%%SmartyHeaderCode:376356ee1a813ee729_87444409%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc6de557820f042ca6535dc7b1a2cb3b01106c61' => 
    array (
      0 => 'template\\Admin\\addgoods.html',
      1 => 1458444921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '376356ee1a813ee729_87444409',
  'variables' => 
  array (
    'page' => 0,
    'classifyList' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ee1a815286a7_86125271',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ee1a815286a7_86125271')) {
function content_56ee1a815286a7_86125271 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '376356ee1a813ee729_87444409';
echo $_smarty_tpl->getSubTemplate ("Admin/include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("Admin/include/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div class="container maincontent">
            <div class="row">
                <form action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_tmp1=ob_get_clean();
echo U(('Admin/goods/action/savegoods/page/').($_tmp1));?>
" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <a href="javascript:history.back(-1);" class="btn btn-default" style="margin-bottom:10px" ><span class="glyphicon glyphicon-menu-left"></span> 返回</a>
                            <table class="table table-striped table-bordered table-condensed table-hover">
                                <tbody>
                                    <tr>
                                        <th>商品名称：</th>
                                        <td>
                                            <input class="normal" name="name" id="formGroupInputName" type="text" value="" required/>
                                            <label>* 商品名称（必填）</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>商品描述：</th>
                                        <td>
                                            <textarea name="desc" id="formGroupInputDesc" rows="5" cols="30"></textarea>
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
'><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
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
                                            <input name="price" id="formGroupInputPrice" class="normal" type="text" value=""  required/>
                                            <label></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>商品积分：</th>
                                        <td>
                                            <input name="point" id="formGroupInputPoint" class="normal" type="Number" value="0"  required/>
                                            <label>（用户购买商品后所获得的积分）</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>商品库存：</th>
                                        <td>
                                            <input name="stock" id="formGroupInputStock" class="normal" type="Number" value="0"  required/>
                                            <label></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>商品封面：</th>
                                        <td>
                                            <input type="file" name="file" id="formGroupInputImage"  required/>
                                            <label></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>是否新品：</th>
                                        <td>
                                            <select name="isnew" id="formGroupInputIsNew" class="normal" name="group_id">
                                                <option value='0'selected="selected">否</option>
                                                <option value='1'>是</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>是否热销：</th>
                                        <td>
                                            <select name="ishot" id="formGroupInputIsHot" class="normal" name="group_id">
                                                <option value='0'selected="selected">否</option>
                                                <option value='1'>是</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>状态：</th>
                                        <td>
                                            <select name="status" id="formGroupInputStatus" class="normal" name="group_id">
                                                <option value='0'>下架</option>
                                                <option value='1'selected="selected">上架</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>商品内容：</th>
                                        <td>
                                            <!-- 加载编辑器的容器 -->
                                            <?php echo '<script'; ?>
 id="formGroupInputContent" name="content" type="text/plain">
                                            <?php echo '</script'; ?>
>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <button type="submit" class="btn btn-default" id="btn-save">添加商品</button>
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